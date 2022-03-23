<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('tag_id')->unsigned()->nullable();

            $table->string('title');
            $table->text('content')->nullable();
            $table->boolean('is_published')->default(false);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');
            $table->foreign('user_id', 'post_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
