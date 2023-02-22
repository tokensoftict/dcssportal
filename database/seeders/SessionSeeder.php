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
        $opening_date = Carbon::create(2023,02,24);
        $closing_date = Carbon::create(2023,05,10);


        DB::table("sessions")
            ->insert([
                [
                    "name" => "2023/2024 SESSION",
                    "registration_begins" => $opening_date->toDateTimeLocalString(),
                    "registration_ends" =>$closing_date->toDateTimeLocalString(),
                    "session" => date("Y"),
                    "form_fee" => 2000,
                    "split_one" => 1000,
                    "split_two" => 1000,
                    "status" => 1
                ]
            ]);
    }
}
