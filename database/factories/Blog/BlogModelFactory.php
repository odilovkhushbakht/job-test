<?php

namespace Database\Factories\Blog;

use App\Models\Blog\BlogModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(150),
            'text' => $this->faker->text(400),
            'category_id' => $this->faker->numberBetween(1, 4),
            'author_id' => $this->faker->numberBetween(1, 20),
            'created' => $this->faker->dateTime(),
        ];
    }
}
