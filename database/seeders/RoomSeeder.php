<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Room::factory()->state([
            'type' => '1',
            'name' => '101',
            'capacity' => '1',
        ])->create();
        \App\Models\Room::factory()->state([
            'type' => '2',
            'name' => '102',
            'capacity' => '2',
        ])->create();
        \App\Models\Room::factory()->state([
            'type' => '3',
            'name' => '201',
            'capacity' => '2',
        ])->create();
        \App\Models\Room::factory()->state([
            'type' => '4',
            'name' => '202',
            'capacity' => '4',
        ])->create();
    }
}
