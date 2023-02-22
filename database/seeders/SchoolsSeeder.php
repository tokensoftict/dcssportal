<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nmc_schools = array(
            array('name' => 'Command Day Secondary School Kaduna','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Jos','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Makurdi','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Enugu','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Ede','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Ijebu-ode','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Odogbo Ibadan','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Mokola Ibadan','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Ikeja Lagos','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Oshodi Lagos','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Ojo Lagos','school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Abuja','school_type_id' => '1'),
            array('name' => 'Command Secondary School Kaduna','school_type_id' => '2'),
            array('name' => 'Command Secondary School Jos','school_type_id' => '2'),
            array('name' => 'Command Secondary School Makurdi','school_type_id' => '2'),
            array('name' => 'Command Secondary School Abakaliki','school_type_id' => '2'),
            array('name' => 'Command Secondary School Mbiri','school_type_id' => '2'),
            array('name' => 'Command Secondary School Ohafia','school_type_id' => '2'),
            array('name' => 'Command Secondary School Ibadan','school_type_id' => '2'),
            array('name' => 'Command Secondary School, Ipaja Lagos','school_type_id' => '2'),
            array('name' => 'Command Secondary School Suleja','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Boys, Jega, Kebbi','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Girls,Sabon Gari Goru, Kebbi','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Boys, Faskari, Katsina','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Girls, Barkiya, Katsina','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School, Numan, Adamawa','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School, Lafia, Nassarawa','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Boys, Auno, Borno','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Girls, Miringa, Borno','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Boys, Shagari, Sokoto','school_type_id' => '2'),
            array('name' => 'Command Day Secondary School Girls, Gigginya, Sokoto','school_type_id' => '1'),
            array('name' => 'Command Science Secondary School Boys, Talata Mafara, Zamfara','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Girls, Gusau, Zamfara','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School, Orlu, Imo','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School,Ebedebiri Yenagoa,Bayelsa','school_type_id' => '2'),
            array('name' => 'Command Science secondary School,EFfa-Etinan,Akwa-Ibom','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School,Agwada,Nassarawa','school_type_id' => '2'),
            array('name' => 'Command Science Technical Secondary School,Rinze-Akwanga,Nassarawa','school_type_id' => '2'),
            array('name' => 'Command Science Secondary School,Port Harcourt','school_type_id' => '2'),
            array('name' => 'Command  Day Secondary School,Akure Ondo State','school_type_id' => '1'),
            array('name' => 'Command Secondary School Shaki, Oyo State.','school_type_id' => '2'),
            array('name' => 'Command Secondary School, Buratai Borno State.','school_type_id' => '2'),
            array('name' => 'Command Day Secondary School,Biu,Borno State.','school_type_id' => '1'),
            array('name' => 'Command Secondary School,Orba,Udenu Enugu','school_type_id' => '2'),
            array('name' => 'Command Secondary School,Mpu Aninri,Enugu','school_type_id' => '2'),
            array('name' => 'Command Day Secondary School Chindit Zaria','school_type_id' => '1')
        );

        DB::table("schools")
            ->insert($nmc_schools);
    }
}
