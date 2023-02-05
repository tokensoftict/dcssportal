<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("school_types")
            ->insert([
                [
                    'name'=>'Day',
                ],
                [
                    'name' =>'Boarding'
                ]
            ]);
    }
}
