<?php

namespace Database\Factories;

use App\Models\Idea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idea>
 */
class IdeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Idea::class;

    public function definition(): array
    {
        return [
            "title" => fake()->sentence(),
            "description" => fake()->paragraph(),
            "user_id" => 1,
            "is_public" => false
        ];
    }
}
