<?php

namespace Database\Seeders;

use App\Models\State;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $centers = array(
            0 => array('name' => 'Command Children School Dantuku Road Kaduna.', 'state' => 'KADUNA'),
            1 => array('name' => 'Command Day Secondary School Kaduna.', 'state' => 'KADUNA'),
            2 => array('name' => 'Army Children School Kano.', 'state' => 'KANO'),
            3 => array('name' => 'Army Day Secondary School Minna.', 'state' => 'Kaduna'),
            4 => array('name' => 'Command Secondary School Kaduna.', 'state' => 'KADUNA'),
            5 => array('name' => 'Command Day Secondary School Chindit Zaria', 'state' => 'KADUNA'),
            6 => array('name' => 'Command Day Secondary School Odogbo, Ibadan.', 'state' => 'OYO'),
            7 => array('name' => 'Command Day Secondary School Mokola Ibadan.', 'state' => 'OYO'),
            8 => array('name' => 'Command Children School Ilorin Kwara.', 'state' => 'KWARA'),
            9 => array('name' => 'Command Children School GRA Benin.', 'state' => 'EDO'),
            10 => array('name' => 'Command Day Secondary School Owena Barracks,Akure', 'state' => 'ONDO'),
            11 => array('name' => 'Command Day Secondary School Ijebu-Ode', 'state' => 'OGUN'),
            12 => array('name' => 'Command Day Secondary School Ede.', 'state' => 'OSUN'),
            13 => array('name' => 'Command Secondary School Ibadan.', 'state' => 'OYO'),
            14 => array('name' => 'Command Science Secondary School Saki .', 'state' => 'OYO'),
            15 => array('name' => 'Command Day Secondary School Maxwell Khobe Cantonment, Jos.', 'state' => 'PLATEAU'),
            16 => array('name' => 'Army Children School Bauchi.', 'state' => 'BAUCHI'),
            17 => array('name' => 'Command Secondary School Jos.', 'state' => 'PLATEAU'),
            18 => array('name' => 'Command Science Secondary School Numan Adamawa', 'state' => 'Adamawa'),
            19 => array('name' => 'Command Children School Gibson Jalo Cantonment Yola.', 'state' => 'Adamawa'),
            20 => array('name' => 'Command Secondary School Mbiri.', 'state' => 'DELTA'),
            21 => array('name' => 'Army Children School PortHarcourt.', 'state' => 'RIVERS'),
            22 => array('name' => 'Christ the King Pry School, Uyo', 'state' => 'AKWA-IBOM'),
            23 => array('name' => 'Saint Patrick College Asaba.', 'state' => 'DELTA'),
            24 => array('name' => 'Command Science Secondary School Effa-Etinan.', 'state' => 'AKWA-IBOM'),
            25 => array('name' => 'Command Science Secondary School Ebedebiri.', 'state' => 'BAYELSA'),
            26 => array('name' => 'Army Children School Maiduguri.', 'state' => 'BORNO'),
            27 => array('name' => 'Command Day Secondary School Biu Borno State', 'state' => 'BORNO'),
            28 => array('name' => 'Command Science Secondary School (Boys) Jega', 'state' => 'KEBBI'),
            29 => array('name' => 'Command Day Secondary School Gigginya Barracks Sokoto', 'state' => 'SOKOTO'),
            30 => array('name' => 'Command Science Secondary School (Girls) Gusau Zamfara.', 'state' => 'ZAMFARA'),
            31 => array('name' => 'Command Science Secondary School (Boys) Faskari.', 'state' => 'KATSINA'),
            32 => array('name' => 'Army Children School Katsina.', 'state' => 'KATSINA'),
            33 => array('name' => 'Command Day Secondary School Ikeja.', 'state' => 'LAGOS'),
            34 => array('name' => 'Command Children School (Extension) Ikeja.', 'state' => 'LAGOS'),
            35 => array('name' => 'Command Day Secondary School Oshodi.', 'state' => 'LAGOS'),
            36 => array('name' => 'Command Children School Oshodi.', 'state' => 'LAGOS'),
            37 => array('name' => 'Command Children School Ojo.', 'state' => 'LAGOS'),
            38 => array('name' => 'Command Day Secondary School Ojo.', 'state' => 'LAGOS'),
            39 => array('name' => 'Command Secondary School Lagos.', 'state' => 'LAGOS'),
            40 => array('name' => 'Command Children School Bonny Camp.', 'state' => 'LAGOS'),
            41 => array('name' => 'Army Children School Badagry.', 'state' => 'LAGOS'),
            42 => array('name' => 'Command Children School Yaba.', 'state' => 'LAGOS'),
            43 => array('name' => 'Army Children School Losi – Odogunyan Barracks, Ikorodu.', 'state' => 'LAGOS'),
            44 => array('name' => 'Army Children School Lafenwa Barracks Abeokuta.', 'state' => 'OGUN'),
            45 => array('name' => 'Airforce Secondary School, Sam Ethan Airforce Base Ikeja.', 'state' => 'LAGOS'),
            46 => array('name' => 'Nigerian Navy Secondary School, Navy Town Ojo.', 'state' => 'LAGOS'),
            47 => array('name' => 'Command Day Secondary School Enugu.', 'state' => 'ENUGU'),
            48 => array('name' => 'Command Secondary School,Orba Udena.', 'state' => 'ENUGU'),
            49 => array('name' => 'Command Secondary School,MPU Aninri.', 'state' => 'ENUGU'),
            50 => array('name' => 'Army Children School Calabar.', 'state' => 'Cross River'),
            51 => array('name' => 'Army Children School Owerri.', 'state' => 'IMO'),
            52 => array('name' => 'Army Children School Makurdi.', 'state' => 'BENUE'),
            53 => array('name' => 'Command Secondary School Abakaliki.', 'state' => 'EBONYI'),
            54 => array('name' => 'Command Children School Onitsha.', 'state' => 'ANAMBRA'),
            55 => array('name' => 'Command Secondary School Ohafia.', 'state' => 'ABIA'),
            56 => array('name' => 'Command Science Secondary School, Orlu.', 'state' => 'IMO'),
            57 => array('name' => 'Ibeku High School Umuahia.', 'state' => 'ABIA'),
            58 => array('name' => 'Command Children School Awkunanau, 103 Battalion, Enugu', 'state' => 'ENUGU'),
            59 => array('name' => 'Command Day Secondary School Abuja.', 'state' => 'ABUJA'),
            60 => array('name' => 'Army Day Secondary School Chari-Maigumeri Barracks, Lokoja.', 'state' => 'KOGI'),
            61 => array('name' => 'Command Secondary School Suleja.', 'state' => 'NIGER'),
            62 => array('name' => 'Command Science Secondary School Lafia.', 'state' => 'Nassarawa'),
        );

        foreach ($centers as $center)
        {
            $s = strtolower($center['state']);
            $state_id = State::where('name','LIKE',"%$s%")->first();
            if($state_id)
            {
                DB::table('centers')->insert([
                    'name' => $center['name'],
                    'state_id' => $state_id->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

                $state_id->created_at = Carbon::now();
                $state_id->updated_at = Carbon::now();
                $state_id->update();
            }
            else {
                DB::table('centers')->insert([
                    'name' => $center['name'],
                    'state_id' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }



    }
}
