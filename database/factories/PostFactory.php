<?php

namespace Database\Factories;

use App\Models\Category;
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
            'title'=> $this->faker->sentence(mt_rand(2, 8)),
            'slug'=> $this->faker->slug(),
            'excerpt'=> $this->faker->paragraph(),
            'content'=> $this->faker->paragraph(mt_rand(5,10)),
            // 'published_at'=> $this->faker->dateTimeBetween('-1 years', 'now'),
            'category_id'=> mt_rand(1,2),
            'user_id'=>mt_rand(1,3)

        ];
    }
}
