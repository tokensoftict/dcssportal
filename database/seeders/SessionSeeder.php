<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sessions")
            ->insert([
                [
                    "name" => "Testing Session",
                    "registration_begins" => Carbon::now(),
                    "registration_ends" =>Carbon::now(),
                    "session" => date("Y"),
                    "form_fee" => 2000,
                    "split_one" => 1000,
                    "split_two" => 1000,
                    "status" => 1
                ]
            ]);
    }
}
