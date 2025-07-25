<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'         => $this->faker->firstName(),
            'surname'      => $this->faker->lastName(),
            'phone_number' => $this->faker->phoneNumber(),
            'email'        => $this->faker->unique()->safeEmail(),
            'subject'      => $this->faker->sentence(3),
            'message'      => $this->faker->paragraph(),
        ];
    }
}