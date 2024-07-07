<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarMake;
use App\Models\CarModel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Car::factory(10)->create();
        Car::factory(3)->create(['owner' => 'user',]);

        CarMake::factory(10)->create();
        CarModel::factory(10)->create();
    }
}
