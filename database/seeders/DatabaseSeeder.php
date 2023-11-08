<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('locations')->insert([
            [
                'name' => 'Location 1',
                'latitude' => '-7.7876428023645605',
                'longitude' => '110.38059933454753'
            ],
            [
                'name'  => 'Location 2',
                'latitude' => '-7.787063080688294',
                'longitude' => '110.37653951572223'
            ],
            [
                'name'  => 'Location 3',
                'latitude' => '-7.784481684342785',
                'longitude' => '110.37911779029174'
            ]
        ]);
    }
}
