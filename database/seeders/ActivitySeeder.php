<?php
namespace Database\Seeders;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types   = ['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon'];
        $userIds = User::pluck('id')->toArray();

        for ($i = 1; $i <= 20; $i++) {
            Activity::create([
                'type'         => $types[array_rand($types)],
                'user_id'      => $userIds[array_rand($userIds)],
                'date_time'    => now()->addDays(rand(0, 30))->setTime(rand(8, 20), rand(0, 59)),
                'paid'         => (bool) rand(0, 1),
                'notes'        => 'Nota de actividad ' . $i,
                'satisfaction' => rand(1, 10),
            ]);
        }
    }
}
