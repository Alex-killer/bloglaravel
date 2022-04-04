<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');


    Route::get('/posts', 'PostController@index')->name('post.index');
//    Route::get('/posts/create', 'CreateController')->name('post.create');
//    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'PostController@show')->name('post.show');
//    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
//    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
//    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');

Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {
        Route::get('/main', 'HomeController@index')->name('personal.main.index');
        Route::get('/liked', 'LikedController@index')->name('personal.liked.index');
        Route::delete('/liked{post}', 'LikedController@destroy')->name('personal.liked.delete');

        Route::get('/comments', 'CommentController@index')->name('personal.comment.index');


});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', 'PostController@index')->name('admin.post.index');
        Route::get('/create', 'PostController@create')->name('admin.post.create');
        Route::post('/', 'PostController@store')->name('admin.post.store');
        Route::get('/{post}', 'PostController@show')->name('admin.post.show');
        Route::get('/{post}/edit', 'PostController@edit')->name('admin.post.edit');
        Route::patch('/{post}', 'PostController@update')->name('admin.post.update');
        Route::delete('/{post}', 'PostController@destroy')->name('admin.post.delete');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'CategoryController@index')->name('admin.category.index');
        Route::get('/create', 'CategoryController@create')->name('admin.category.create');
        Route::post('/', 'CategoryController@store')->name('admin.category.store');
        Route::get('/{category}', 'CategoryController@show')->name('admin.category.show');
        Route::get('/{category}/edit', 'CategoryController@edit')->name('admin.category.edit');
        Route::patch('/{category}', 'CategoryController@update')->name('admin.category.update');
        Route::delete('/{category}', 'CategoryController@destroy')->name('admin.category.delete');
    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', 'TagController@index')->name('admin.tag.index');
        Route::get('/create', 'TagController@create')->name('admin.tag.create');
        Route::post('/', 'TagController@store')->name('admin.tag.store');
        Route::get('/{tag}', 'TagController@show')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'TagController@edit')->name('admin.tag.edit');
        Route::patch('/{tag}', 'TagController@update')->name('admin.tag.update');
        Route::delete('/{tag}', 'TagController@destroy')->name('admin.tag.delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index')->name('admin.user.index');
        Route::get('/create', 'UserController@create')->name('admin.user.create');
        Route::post('/', 'UserController@store')->name('admin.user.store');
        Route::get('/{user}', 'UserController@show')->name('admin.user.show');
        Route::get('/{user}/edit', 'UserController@edit')->name('admin.user.edit');
        Route::patch('/{user}', 'UserController@update')->name('admin.user.update');
        Route::delete('/{user}', 'UserController@destroy')->name('admin.user.delete');
    });
});




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
