<?php

namespace Database\Seeders;

use App\Models\S3DogReport;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PersonalData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        S3DogReport::factory(50)->create();
        $this->call(
            UserSeeder::class,
        );
    }
}
