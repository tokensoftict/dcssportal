<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert([
                [
                    'firstname' => 'Admin',
                    'othernames' => 'istrator',
                    'is_admin' => '1',
                    'phone' => '08130610626',
                    'password' => bcrypt('dcssadmin'),
                    'email' => 'olatunji.yusuf@upperlink.ng',
                    'email_verified_at' => Carbon::now()
                ],
                [
                    "firstname" => "DCSS",
                    "othernames" => "Adminstrator",
                    "is_admin" => 2,
                    "phone" => "0814444444444",
                    "password" => '$2y$10$FLllkgTCqh0vG8aUm1yY..bw8zOqC.G2NQdeQJuQUh6E6KjSl5npO',
                    "email" => "commandentrance@gmail.com",
                    'email_verified_at' => Carbon::now(),
                    "remember_token" => NULL,
                    "created_at" => "2023-03-24 11:29:28",
                    "updated_at" => "2023-03-24 11:29:28"
                ],
                [
                    "firstname" => "Oluwatobi",
                    "othernames" => "Oladosu",
                    "is_admin" => 3,
                    "phone" => "09078987667",
                    "password" => '$2y$10$heyMvclaN7VZw6R9raAKBO8way8BxujbAvpckR.AMEwsNbp1PxOzK',
                    "email" => "oluwatobi.oladosu@upperlink.ng",
                    'email_verified_at' => Carbon::now(),
                    "remember_token" => NULL,
                    "created_at" => "2023-03-24 11:29:28",
                    "updated_at" => "2023-03-24 11:29:28"
                ],
                [
                    "firstname" => "Folakemi",
                    "othernames" => "Okesola",
                    "is_admin" => 3,
                    "phone" => "0909898789",
                    "password" => '$2y$10$EkoDvr8UQB0VcVvMzHoqJOJn.zyxQUR3cmTibzBJM.qYOaI0yUdFW',
                    "email" => "folakemi.okesola@upperlink.ng",
                    'email_verified_at' => Carbon::now(),
                    "remember_token" => NULL,
                    "created_at" => "2023-03-24 11:31:48",
                    "updated_at" => "2023-03-24 11:31:48"
                ],
                [
                    "firstname" => "Mosope",
                    "othernames" => "Fayemi",
                    "is_admin" => 3,
                    "phone" => "09099899878",
                    "password" => '$2y$10$p1pVC1dq1aRMGaFz9AmxO.Iu.uJrNhk1Sj3Je555gFL01NBEKrBue',
                    "email" => "mosope.fayemi@upperlink.ng",
                    'email_verified_at' => Carbon::now(),
                    "remember_token" => NULL,
                    "created_at" => "2023-03-24 11:32:21",
                    "updated_at" => "2023-03-24 11:32:21"
                ],
                [
                    "firstname" => "Opeyemi",
                    "othernames" => "Quadri",
                    "is_admin" => 3,
                    "phone" => "0909989878",
                    "password" => '$2y$10$LZ/yHEd.ZEXQHmgpFpRLw.ouO34RknNNiwsJhate3wVvwJhSugQZC',
                    "email" => "nimatope08@gmail.com",
                    'email_verified_at' => Carbon::now(),
                    "remember_token" => NULL,
                    "created_at" => "2023-03-24 11:32:57",
                    "updated_at" => "2023-03-24 11:32:57"
                ],
                [
                    "firstname" => "Aisha",
                    "othernames" => "Mustapha",
                    "is_admin" => 3,
                    "phone" => "09099898745",
                    "password" => '$2y$10$MlNRl1GYMpNdInWnY.e2PuK.3GauXdrrYv5XpSN9LpiuOfsXhSPzu',
                    "email" => "ayshamustapha99@gmail.com",
                    "email_verified_at" => NULL,
                    "remember_token" => NULL,
                    "created_at" => "2023-03-24 11:33:54",
                    "updated_at" => "2023-03-24 11:33:54"
                ]
            ]);
    }
}
