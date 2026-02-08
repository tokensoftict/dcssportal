<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(StateSeeders::class);
        $this->call(ParentalStatusSeeder::class);
        $this->call(SchoolTypesSeeder::class);
        //$this->call(CentersSeeder::class);
        $this->call(AnotherNewSeeder::class);
        $this->call(AnotherNewSchoolSeeder::class);
        $this->call(SessionSeeder::class);
    }
}
