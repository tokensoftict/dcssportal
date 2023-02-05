<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("parental_statuses")
            ->insert(
                [
                    [
                        'name' => 'Officer'
                    ],
                    [
                        'name' => 'Soldier'
                    ],
                    [
                        'name' => 'Civilian'
                    ],
                    [
                        'name' => 'Other Rank'
                    ],
                ]
            );
    }
}
