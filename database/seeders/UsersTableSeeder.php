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
                ],
            ]);
    }
}
