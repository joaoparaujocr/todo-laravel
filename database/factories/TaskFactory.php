<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();

        while ($user->categories->count() === 0) {
            $user = User::all()->random();
        };

        return [
            'title' => $this->faker->text(20),
            'description' => $this->faker->text(50),
            'due_date' => $this->faker->dateTime(),
            'category_id' => $user->categories->random(),
            'user_id' => $user
        ];
    }
}
