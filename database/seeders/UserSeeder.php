<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds. ./vendor/bin/sail artisan db:seed
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $randomPassword = Str::random(10); // 10 caracteres aleatorios (letras y números)
            User::create([
                'name'     => "Usuario $i",
                'email'    => "usuario$i@example.com",
                'password' => Hash::make($randomPassword),
            ]);
        }
    }
}
