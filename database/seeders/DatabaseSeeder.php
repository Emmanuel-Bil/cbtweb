<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            SettingsSeeder::class,
            PageSeeder::class,
            ConfessionPointsSeeder::class,
            HistoryEventsSeeder::class,
            ZonesSeeder::class,
            BureauMembersSeeder::class,
            DepartmentsSeeder::class,
            ActivitiesSeeder::class,
            KeyDatesSeeder::class,
            DemoContentSeeder::class,
        ]);
    }
}
