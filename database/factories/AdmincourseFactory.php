<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admincourse>
 */
class AdmincourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->paragraph(2),
            'excerpt' => $this->faker->paragraph(1),
            'featured_image' => $this->faker->image(null, 360, 360, 'animals', true),
            'subscription' => "Gold",
            'status' => "Published",
        ];
    }
}
