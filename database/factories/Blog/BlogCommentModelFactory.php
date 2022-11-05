<?php

namespace Database\Factories\Blog;

use App\Models\Blog\BlogCommentModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCommentModelFactory extends Factory
{
    protected $model = BlogCommentModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'text' => $this->faker->text(300),
            'blog_num' => $this->faker->numberBetween(1, 40),
            'created' => $this->faker->dateTime(),
        ];
    }
}
