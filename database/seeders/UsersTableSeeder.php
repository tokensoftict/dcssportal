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
               ]
            ]);
    }
}
