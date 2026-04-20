<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Sunday Service',
                'description' => 'Corpus Christi Campus',
                'event_date' => '2025-12-28',
                'start_time' => '09:00:00',
                'end_time' => '10:45:00',
                'category' => 'Services',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sunday Service',
                'description' => 'Main Campus',
                'event_date' => '2025-12-28',
                'start_time' => '09:00:00',
                'end_time' => '10:45:00',
                'category' => 'Services',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Youth Gathering',
                'description' => 'Youth Room',
                'event_date' => '2025-12-29',
                'start_time' => '18:00:00',
                'end_time' => '20:00:00',
                'category' => 'Groups',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kids Ministry',
                'description' => 'Kids Hall',
                'event_date' => '2025-12-30',
                'start_time' => '18:00:00',
                'end_time' => '20:00:00',
                'category' => 'Kids',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
