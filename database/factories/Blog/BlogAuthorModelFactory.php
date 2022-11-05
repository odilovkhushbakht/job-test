<?php

namespace Database\Factories\Blog;

use App\Models\Blog\BlogAuthorModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogAuthorModelFactory extends Factory
{
    protected $model = BlogAuthorModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
        ];
    }
}
