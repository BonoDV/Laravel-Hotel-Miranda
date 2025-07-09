<?php
namespace Database\Seeders;

use App\Models\Bookings;
use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = \App\Models\Room::all(); // Fetch all rooms
        Bookings::factory()
            ->count(20)
            ->recycle($rooms)
            ->create();
    }
}