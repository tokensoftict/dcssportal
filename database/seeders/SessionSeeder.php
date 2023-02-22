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
        $closing_date = Carbon::create(date('Y'),date('m'),date('d'));
        $closing_date->addDays(24);

        DB::table("sessions")
            ->insert([
                [
                    "name" => "2023/2024 SESSION",
                    "registration_begins" => Carbon::now(),
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
