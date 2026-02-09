<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "skill" => fake()->jobTitle(),
            "power" => fake()->numberBetween(30, 95),
            "bio" => fake()->realText(300),
        ];
    }
}
/**
 * @info create 50 fake ninjas
 * 
 * php artisan tinker
 * use App\Models\Ninja
 * Ninja::factory()->count(50)->create()
 * 
 * or you can make a seeder
 */
