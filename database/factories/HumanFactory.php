<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Human>
 */
class HumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => fake() -> firstName(),
            'lastName' => fake() -> lastName(),
            'dateOfBirth' => fake() -> dateTime(),
            'height' => fake() -> numberBetween(100, 200),
            // 'height' => fake() -> boolean() 
            // ? fake() -> numberBetween(100, 200)
            // : null,
        ];
    }
}