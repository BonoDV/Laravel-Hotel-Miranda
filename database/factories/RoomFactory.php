<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $allAmenities = [
            'Air conditioner',
            'High speed WIFI',
            'Breakfast',
            'Kitchen',
            'Cleaning',
            'Shower',
            'Grocery',
            'Single bed',
            'Shop near',
            'Towels',
            '24/7 Online Support',
            'Strong Locker',
            'Smart Security',
            'Expert Team',
        ];

        return [
            'room_number'  => $this->faker->unique()->numberBetween(100, 999),
            'room_type'    => $this->faker->randomElement(['Single', 'Double', 'Suite', 'Deluxe']),
            'bed_type'     => $this->faker->randomElement(['Single', 'Double', 'Queen', 'King']),
            'room_floor'   => $this->faker->numberBetween(1, 10),
            'photos'       => json_encode([
                $this->faker->imageUrl(640, 480, 'room'),
                $this->faker->imageUrl(640, 480, 'room'),
            ]),
            'description'  => $this->faker->sentence(10),
            'offer'        => $this->faker->randomElement(['YES', 'NO']),
            'price'        => $this->faker->randomFloat(2, 50, 500),
            'discount'     => $this->faker->randomFloat(2, 0, 100),
            'cancellation' => $this->faker->randomElement(['Free', '24h notice', 'Non-refundable']),
            'amenities'    => json_encode($this->faker->randomElements($allAmenities, rand(3, 7))),
        ];
    }
}