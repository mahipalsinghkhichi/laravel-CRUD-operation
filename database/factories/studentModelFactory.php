<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class studentModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
        ];
    }
    // public function definationcandidates(): array
    // {
    //     return [
    //         'name' => $this->faker->name,
    //         'email' => $this->faker->unique()->safeEmail,
    //         'section' => $this->faker->section,
    //         'specialization' => $this->faker->specialization,
    //         'project' => $this->faker->project,
    //         'passout' => $this->faker->passout,
            
    //     ];
    // }
}
