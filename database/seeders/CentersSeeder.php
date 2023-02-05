<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $centers = array(
            array('name' => 'Command Secondary School, Ohafia
','state_id' => '1'),
            array('name' => 'Command Day Secondary School,gibson Jalo, Cantonment, Yola
','state_id' => '3'),
            array('name' => 'Christ The King Primary School, Uyo
','state_id' => '4'),
            array('name' => 'Command Children School, Onitsha
','state_id' => '5'),
            array('name' => 'Army Children School, Bauchi
','state_id' => '6'),
            array('name' => 'Army Children School, Makurdi
','state_id' => '8'),
            array('name' => 'Army Children School, Maiduguri
','state_id' => '9'),
            array('name' => 'Army Children School, Bde Hq, Calabar
','state_id' => '10'),
            array('name' => 'Command Secondary School, Mbiri
','state_id' => '11'),
            array('name' => 'St Patrick\'s College, Asaba
','state_id' => '11'),
            array('name' => 'Command Secondary School, Abakaliki
','state_id' => '12'),
            array('name' => 'Command Children School, Gra Benin City
','state_id' => '13'),
            array('name' => 'Command Day Secondary School, Abakiliki Road, Abakpa Barracks, Enugu
','state_id' => '15'),
            array('name' => 'Command Day Secondary School, Abuja
','state_id' => '2'),
            array('name' => 'Command Secondary School, Suleja
','state_id' => '27'),
            array('name' => 'Army Children School, Owerri.
','state_id' => '17'),
            array('name' => 'Command Secondary School, Kaduna
','state_id' => '19'),
            array('name' => 'Command Children School, Dankuntu Road, Kaduna
','state_id' => '19'),
            array('name' => 'Command Day Secondary School, Kaduna
','state_id' => '19'),
            array('name' => 'Command Children School, (nms) Zaria
','state_id' => '19'),
            array('name' => 'Army Children School, Kano
','state_id' => '20'),
            array('name' => 'Army Children School, Kastina
','state_id' => '21'),
            array('name' => 'Army Children School, Sobi Cantonment, Ilorin.
','state_id' => '24'),
            array('name' => 'Command Secondary School, Ipaja
','state_id' => '25'),
            array('name' => 'Command Day Secondary School, Ikeja, Cantonment
','state_id' => '25'),
            array('name' => 'Command Children School, An Barracks Sabo Yaba
','state_id' => '25'),
            array('name' => 'Command Day Secondary School, Oshodi
','state_id' => '25'),
            array('name' => 'Command Children School, Ojo Cantonment
','state_id' => '25'),
            array('name' => 'Command Children School, Bonny Cantonment
','state_id' => '25'),
            array('name' => 'Army Children School Losi – Odogunyan Barracks, Ikorodu','state_id' => '25'),
            array('name' => 'Army Children School, Ibereko Barracks, Badagry
','state_id' => '25'),
            array('name' => 'Command Day Secondary School, Ojo
','state_id' => '25'),
            array('name' => 'Command Children School, Oshodi
','state_id' => '25'),
            array('name' => 'Command Children School (extension) Ikeja
','state_id' => '25'),
            array('name' => 'Army Day Secondary School Minna.
','state_id' => '27'),
            array('name' => 'Adss Chari-maigumeri Barracks, Lokoja
','state_id' => '23'),
            array('name' => 'Army Children School, Lafenwa, Abeokuta
','state_id' => '28'),
            array('name' => 'Command Day Secondary School, Ijebu-ode
','state_id' => '28'),
            array('name' => 'Command Day Secondary School, Ede
','state_id' => '30'),
            array('name' => 'Command Secondary School, Ibadan
','state_id' => '31'),
            array('name' => 'Command Day Secondary School, Mokola, Ibadan
','state_id' => '31'),
            array('name' => 'Command Children School, Adekunle Fajuyi, Cantonment Odogbo, Ibadan
','state_id' => '31'),
            array('name' => 'Command Secondary School, Jos
','state_id' => '32'),
            array('name' => 'Command Day Secondary School, Jos
','state_id' => '32'),
            array('name' => 'Army Children School, Port Harcourt.
','state_id' => '33'),
            array('name' => 'Government Day Secondary School Kebbi','state_id' => '22'),
            array('name' => 'Nageri College Kebbi
','state_id' => '22'),
            array('name' => 'Command Science Secondary School Boys Faskari Katsina','state_id' => '21'),
            array('name' => 'Command Science Secondary School Girls, Barkiya, Katsina','state_id' => '21'),
            array('name' => 'Command Science Secondary School Numan Adamawa
','state_id' => '3'),
            array('name' => 'Command Science Secondary School Auno','state_id' => '9'),
            array('name' => 'Command Science Secondary School Boys Talata Mafara, Zamfara','state_id' => '37'),
            array('name' => 'Command Science Secondary School Girls Gusau, Zamfara','state_id' => '37'),
            array('name' => 'Army Day Secondary School Gigginya Barracks Sokoto','state_id' => '34'),
            array('name' => 'Bishop Shwuahand College Orlu, Imo','state_id' => '17'),
            array('name' => 'Command Science Secondary School, Lafia, Nassarawa','state_id' => '26'),
            array('name' => 'Command Science Secondary School(Girls)Miringa Biu Local Government Borno State','state_id' => '9'),
            array('name' => 'Command Science Secondary School,Ebedebiri Yenagoa','state_id' => '7'),
            array('name' => 'Command Science Secondary School,Effa-Etinan Akwa-Ibom','state_id' => '4'),
            array('name' => 'Command Science Secondary school,Agwada,Nassarawa','state_id' => '26'),
            array('name' => 'Command Science Technical Secondary School,Rinze-Akwanga,Nassarawa','state_id' => '26'),
            array('name' => 'Command Science Secondary School,Orlu
','state_id' => '17'),
            array('name' => 'Command Day Secondary School Owena Barracks,Akure Ondo State
','state_id' => '29'),
            array('name' => 'Command Science Secondary School Girls,Sabon Gari Goru, Kebbi','state_id' => '22'),
            array('name' => 'Command Secondary School Shaki,Oyo State','state_id' => '31'),
            array('name' => 'Command Secondary School,Buratai,Borno State.','state_id' => '9'),
            array('name' => 'Command Day Secondary School,Biu, Borno State.','state_id' => '9'),
            array('name' => 'Command Secondary School,Orba,Udenu LGA Enugu(Former Boys High School,Orba.','state_id' => '15'),
            array('name' => 'Command Secondary School,Mpu,Aninri LGA Enugu.','state_id' => '15'),
            array('name' => 'Command Science Secondary School,Jega Kebbi State','state_id' => '22')
        );

        DB::table('centers')->insert( $centers);
    }
}
