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
        $opening_date = Carbon::create(2024,02,6);
        $closing_date = Carbon::create(2024,06,15);


        DB::table("sessions")
            ->insert([
                [
                    "name" => "2024/2025 Academic Session",
                    "registration_begins" => $opening_date->toDateTimeLocalString(),
                    "registration_ends" =>$closing_date->toDateTimeLocalString(),
                    "session" => date("Y"),
                    "form_fee" => 2500,
                    "split_one" => 1000,
                    "split_two" => 1500,
                    "status" => 1
                ]
            ]);
    }
}
