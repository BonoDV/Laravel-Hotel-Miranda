<?php
namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookings>
 */
class BookingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Selecciona una habitación existente aleatoriamente
        $room = Room::inRandomOrder()->first();

        // Si no hay habitaciones, crea una por defecto
        if (! $room) {
            $room = Room::factory()->create();
        }

        $check_in  = $this->faker->dateTimeBetween('now', '+1 month');
        $check_out = (clone $check_in)->modify('+' . rand(1, 7) . ' days');

        return [
            'id'                     => (string) Str::uuid(),
            'name'                   => $this->faker->name(),
            'image'                  => $this->faker->optional()->imageUrl(640, 480, 'people'),
            'order_date'             => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'check_in'               => $check_in->format('Y-m-d'),
            'check_out'              => $check_out->format('Y-m-d'),
            'special_request_status' => $this->faker->boolean(20),
            'special_request_text'   => $this->faker->optional()->sentence(),
            'room_type'              => $room->room_type,
            'status'                 => $this->faker->randomElement(['Pending', 'Confirmed', 'Cancelled']),
            'phone'                  => $this->faker->phoneNumber(),
            'email'                  => $this->faker->unique()->safeEmail(),
            'room_number'            => $room->room_number,
        ];
    }
}