<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $permis = ['AM', 'A1', 'A', 'B', 'EB', 'C', 'EC', 'D', 'ED'];
        return [
            'nom' => fake()->name(),
            'prenom' => fake()->lastName(),
            'cin' => Str::random(4),
            'adresse' => fake()->address(),
            'dateNaissance' => fake()->dateTimeBetween('1990-01-01', '2019-12-31')->format('d/m/Y'),
            'email' => fake()->unique()->safeEmail(),
            'IsClient' => fake()->boolean(50),
            'montantPaye' => fake()->numberBetween(1700, 5000),
            'montantRestant' => fake()->numberBetween(500, 800),
            'permis' => fake()->randomElement($permis),
            'admin' => false,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
