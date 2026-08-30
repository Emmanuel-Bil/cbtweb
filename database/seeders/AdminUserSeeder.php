<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = 'dev.bilimon23@gmail.com';
        $password = 'Cbt-' . Str::random(8);

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Administrateur CBT',
                'password' => Hash::make($password),
                'role' => 'admin',
            ]
        );

        $this->command->warn("Compte admin : {$email} / mot de passe : {$password}");
    }
}
