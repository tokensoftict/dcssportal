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
            array("name"=>"Command Children School Dantuku Road Kaduna.","state_id"=>"19"),
            array("name"=>"Command Day Secondary School Kaduna.","state_id"=>"19"),
            array("name"=>"Army Children School Kano.","state_id"=>"20"),
            array("name"=>"Army Day Secondary School Minna.","state_id"=>"19"),
            array("name"=>"Command Secondary School Kaduna.","state_id"=>"19"),
            array("name"=>"Command Day Secondary School Chindit Zaria","state_id"=>"19"),
            array("name"=>"Command Day Secondary School Odogbo, Ibadan.","state_id"=>"31"),
            array("name"=>"Command Day Secondary School Mokola Ibadan.","state_id"=>"31"),
            array("name"=>"Command Children School Ilorin Kwara.","state_id"=>"24"),
            array("name"=>"Command Children School GRA Benin.","state_id"=>"13"),
            array("name"=>"Command Day Secondary School Owena Barracks,Akure","state_id"=>"29"),
            array("name"=>"Command Day Secondary School Ijebu-Ode","state_id"=>"28"),
            array("name"=>"Command Day Secondary School Ede.","state_id"=>"30"),
            array("name"=>"Command Secondary School Ibadan.","state_id"=>"31"),
            array("name"=>"Command Science Secondary School Saki .","state_id"=>"31"),
            array("name"=>"Command Day Secondary School Maxwell Khobe Cantonment, Jos.","state_id"=>"32"),
            array("name"=>"Army Children School Bauchi.","state_id"=>"6"),
            array("name"=>"Command Secondary School Jos.","state_id"=>"32"),
            array("name"=>"Command Science Secondary School Numan Adamawa","state_id"=>"3"),
            array("name"=>"Command Children School Gibson Jalo Cantonment Yola.","state_id"=>"3"),
            array("name"=>"Command Secondary School Mbiri.","state_id"=>"11"),
            array("name"=>"Army Children School PortHarcourt.","state_id"=>"33"),
            array("name"=>"Christ the King Pry School, Uyo","state_id"=>"4"),
            array("name"=>"Saint Patrick College Asaba.","state_id"=>"11"),
            array("name"=>"Command Science Secondary School Effa-Etinan.","state_id"=>"4"),
            array("name"=>"Command Science Secondary School Ebedebiri.","state_id"=>"7"),
            array("name"=>"Army Children School Maiduguri.","state_id"=>"9"),
            array("name"=>"Command Day Secondary School Biu Borno State","state_id"=>"9"),
            array("name"=>"Command Science Secondary School (Boys) Jega","state_id"=>"22"),
            array("name"=>"Command Day Secondary School Gigginya Barracks Sokoto","state_id"=>"34"),
            array("name"=>"Command Science Secondary School (Girls) Gusau Zamfara.","state_id"=>"37"),
            array("name"=>"Command Science Secondary School (Boys) Faskari.","state_id"=>"21"),
            array("name"=>"Army Children School Katsina.","state_id"=>"21"),
            array("name"=>"Command Day Secondary School Ikeja.","state_id"=>"25"),
            array("name"=>"Command Children School (Extension) Ikeja.","state_id"=>"25"),
            array("name"=>"Command Day Secondary School Oshodi.","state_id"=>"25"),
            array("name"=>"Command Children School Oshodi.","state_id"=>"25"),
            array("name"=>"Command Children School Ojo.","state_id"=>"25"),
            array("name"=>"Command Day Secondary School Ojo.","state_id"=>"25"),
            array("name"=>"Command Secondary School Lagos.","state_id"=>"25"),
            array("name"=>"Command Children School Bonny Camp.","state_id"=>"25"),
            array("name"=>"Army Children School Badagry.","state_id"=>"25"),
            array("name"=>"Command Children School Yaba.","state_id"=>"25"),
            array("name"=>"Army Children School Losi ‚Äì Odogunyan Barracks, Ikorodu.","state_id"=>"25"),
            array("name"=>"Army Children School Lafenwa Barracks Abeokuta.","state_id"=>"28"),
            array("name"=>"Airforce Secondary School, Sam Ethan Airforce Base Ikeja.","state_id"=>"25"),
            array("name"=>"Nigerian Navy Secondary School, Navy Town Ojo.","state_id"=>"25"),
            array("name"=>"Command Day Secondary School Enugu.","state_id"=>"15"),
            array("name"=>"Command Secondary School,Orba Udena.","state_id"=>"15"),
            array("name"=>"Command Secondary School,MPU Aninri.","state_id"=>"15"),
            array("name"=>"Army Children School Calabar.","state_id"=>"10"),
            array("name"=>"Army Children School Owerri.","state_id"=>"17"),
            array("name"=>"Army Children School Makurdi.","state_id"=>"8"),
            array("name"=>"Command Secondary School Abakaliki.","state_id"=>"12"),
            array("name"=>"Command Children School Onitsha.","state_id"=>"5"),
            array("name"=>"Command Secondary School Ohafia.","state_id"=>"1"),
            array("name"=>"Command Science Secondary School, Orlu.","state_id"=>"17"),
            array("name"=>"Ibeku High School Umuahia.","state_id"=>"1"),
            array("name"=>"Command Children School Awkunanau, 103 Battalion, Enugu","state_id"=>"15"),
            array("name"=>"Command Day Secondary School Abuja.","state_id"=>"2"),
            array("name"=>"Army Day Secondary School Chari-Maigumeri Barracks, Lokoja.","state_id"=>"23"),
            array("name"=>"Command Secondary School Suleja.","state_id"=>"27"),
            array("name"=>"Command Science Secondary School Lafia.","state_id"=>"26"),
            array("name"=>"Command Secondary School Isan Ekiti","state_id"=>"14"),
            array("name"=>"Government College Ado Ekiti - Centre for Ado -Ekiti","state_id"=>"14")
        );

        DB::table('centers')->insert( $centers);
    }
}
