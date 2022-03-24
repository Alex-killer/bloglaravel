<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::get()->random()->id,
            'user_id' => User::get()->random()->id,
            'title' => $this->faker->word,
            'content' => $this->faker->text(100),
            'is_published' => rand(0, 1),

        ];
    }
}
