<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnotherNewSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nmc_schools = array(
            array('name' => 'Command Secondary School, Kaduna', 'school_type_id' => '2'),
            array('name' => 'Command Day Secondary School, Kaduna', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Chindit, Zaria', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Jaji, Zaria', 'school_type_id' => '1'),
            array('name' => 'Command Secondary School, Ibadan', 'school_type_id' => '2'),
            array('name' => 'Command Secondary School, Isan-Ekiti', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School, Saki', 'school_type_id' => '2'),
            array('name' => 'Command Day Secondary School, Ibadan', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Ijebu-Ode', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Ede', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Mokola', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Akure', 'school_type_id' => '1'),
            array('name' => 'Command Secondary School Jos', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School, Numan', 'school_type_id' => '2'),
            array('name' => 'Command Day Secondary School, Jos', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Bauchi', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Yola', 'school_type_id' => '1'),
            array('name' => 'Command Secondary School Mbiri', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Ebedebiri', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Efa-Etinan', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School, Port Harcourt', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Boys Auno', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Girls Mirnga', 'school_type_id' => '2'),
            array('name' => 'Command Secondary School Boys Buratai', 'school_type_id' => '2'),
            array('name' => 'Command Day Secondary School, Biu', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Maiduguri (Maimalari Cant)', 'school_type_id' => '1'),
            array('name' => 'Command Science Secondary School Boys Shagari', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Boys Jega', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Girls Goru', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Boys T/Mafara', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Girls Gusau', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Boys Faskari', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Girls Barkiya', 'school_type_id' => '2'),
            array('name' => 'Command Day Secondary School, Giginya', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Daura', 'school_type_id' => '1'),
            array('name' => 'Command Secondary School, Lagos', 'school_type_id' => '2'),
            array('name' => 'Command Day Secondary School, Ikeja', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Ojo', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Oshodi', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Bonny Cant', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Abeokuta', 'school_type_id' => '1'),
            array('name' => 'Command Secondary School Abakaliki', 'school_type_id' => '2'),
            array('name' => 'Command Secondary School Makurdi', 'school_type_id' => '2'),
            array('name' => 'Command Secondary School, Ohafia', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School, Orlu', 'school_type_id' => '2'),
            array('name' => 'Command Secondary School, Orba Udenu', 'school_type_id' => '2'),
            array('name' => 'Command Secondary School, Mpu Aninri', 'school_type_id' => '2'),
            array('name' => 'Command Day Secondary School, Enugu', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School, Makurdi', 'school_type_id' => '1'),
            array('name' => 'Command Secondary School Suleja', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Lafia', 'school_type_id' => '2'),
            array('name' => 'Command Science Technical Secondary School Rinze-Akwanga', 'school_type_id' => '2'),
            array('name' => 'Command Science Secondary School Agwada', 'school_type_id' => '2'),
            array('name' => 'Command Day Secondary School Abuja', 'school_type_id' => '1'),
            array('name' => 'Command Day Secondary School Doma', 'school_type_id' => '1'),
        );


        foreach ($nmc_schools as $nmc_school) {
            $nmc_school['created_at'] = now();
            $nmc_school['updated_at'] = now();
            DB::table("schools")
                ->insert($nmc_school);
        }
    }
}
