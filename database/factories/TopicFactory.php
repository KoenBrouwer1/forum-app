<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory()->create()->id,
            'subject_id' => Subject::inRandomOrder()->first()->id,
            'topic' => fake()->words(1, true),
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            ];
    }
}
