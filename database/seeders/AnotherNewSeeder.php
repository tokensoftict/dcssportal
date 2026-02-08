<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnotherNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $centers = [
            ["state_id" => 19, "name" => "Command Children School, Dantuku Road, Kaduna."],
            ["state_id" => 19, "name" => "Command Day Secondary School, Kaduna."],
            ["state_id" => 20, "name" => "Army Children School Kano."],
            ["state_id" => 27, "name" => "Army Day Secondary School, Minna."],
            ["state_id" => 19, "name" => "Command Secondary School, Kaduna."],
            ["state_id" => 19, "name" => "Command Day Secondary School, Chindit, Zaria."],
            ["state_id" => 19, "name" => "Command Day Secondary School Jaji"],

            ["state_id" => 31, "name" => "Command Day Secondary School, Odogbo, Ibadan."],
            ["state_id" => 31, "name" => "Command Day Secondary School, Mokola, Ibadan."],

            ["state_id" => 24, "name" => "Command Children School, Ilorin."],
            ["state_id" => 13, "name" => "Command Children School GRA Benin."],
            ["state_id" => 29, "name" => "Command Day Secondary School, Owena Barracks, Akure."],

            ["state_id" => 14, "name" => "Command Secondary School, Isan Ekiti"],
            ["state_id" => 14, "name" => "Government College Ado Ekiti"],

            ["state_id" => 28, "name" => "Command Day Secondary School, Ijebu-Ode"],
            ["state_id" => 30, "name" => "Command Day Secondary School Ede."],

            ["state_id" => 31, "name" => "Command Secondary School, Ibadan."],
            ["state_id" => 31, "name" => "Command Science Secondary School, Saki."],

            ["state_id" => 32, "name" => "Command Day Secondary School, Maxwell Khobe, Cantonment, Jos."],
            ["state_id" => 6, "name" => "Command Day Secondary School, Bauchi."],
            ["state_id" => 32, "name" => "Command Secondary School Jos."],
            ["state_id" => 3, "name" => "Command Science Secondary School, Numan, Adamawa"],
            ["state_id" => 3, "name" => "Command Day Secondary School, Yola."],

            ["state_id" => 11, "name" => "Command Secondary School Mbiri."],
            ["state_id" => 33, "name" => "Army Children School PortHarcourt."],
            ["state_id" => 10, "name" => "Christ the King Pry School, Uyo"],
            ["state_id" => 11, "name" => "Saint Patrick College, Asaba. "],
            ["state_id" => 4, "name" => "Command Science Secondary School, Effa-Etinan."],
            ["state_id" => 7, "name" => "Command Science Secondary School Ebedebiri."],

            ["state_id" => 9, "name" => "Command Day Secondary School, Maiduguri(Maimalari Cant)"],
            ["state_id" => 9, "name" => "Command Day Secondary School Biu, Borno State"],

            ["state_id" => 22, "name" => "Command Science Secondary School (Boys) Jega"],
            ["state_id" => 34, "name" => "Command Day Secondary School, Gigginya Barracks, Sokoto"],
            ["state_id" => 37, "name" => "Command Science Secondary School (Girls) Gusau, Zamfara."],
            ["state_id" => 21, "name" => "Command Science Secondary School (Boys) Faskari."],
            ["state_id" => 21, "name" => "Army Children School, Katsina."],
            ["state_id" => 21, "name" => "Command Day Secondary School, Daura"],

            ["state_id" => 25, "name" => "Command Day Secondary School, Ikeja"],
            ["state_id" => 25, "name" => "Command Children School (Extension), Ikeja."],
            ["state_id" => 25, "name" => "Command Day Secondary School, Oshodi."],
            ["state_id" => 25, "name" => "Command Children School, Oshodi."],
            ["state_id" => 25, "name" => "Command Children School Ojo."],
            ["state_id" => 25, "name" => "Command Day Secondary School, Ojo."],
            ["state_id" => 25, "name" => "Command Secondary School, Lagos."],
            ["state_id" => 25, "name" => "Command Children School, Bonny Cant."],
            ["state_id" => 25, "name" => "Army Children School, Badagry."],
            ["state_id" => 25, "name" => "Command Children School, Yaba."],
            ["state_id" => 25, "name" => "Army Children School Losi – Odogunyan Barracks, Ikorodu."],
            ["state_id" => 28, "name" => "Command Day Secondary School, Lafenwa Barracks, Abeokuta."],
            ["state_id" => 25, "name" => "Airforce Secondary School, Sam Ethan Airforce Base, Ikeja."],
            ["state_id" => 25, "name" => "Nigerian Navy Secondary School, Navy Town, Ojo."],
            ["state_id" => 25, "name" => "Command Day Secondary School, Bonny Cant Lagos."],
            ["state_id" => 25, "name" => "Command Children School (Extension) Opposite First Bank Ikeja."],


            ["state_id" => 15, "name" => "Command Day Secondary School, Enugu"],
            ["state_id" => 15, "name" => "Command Secondary School, Orba Udena."],
            ["state_id" => 15, "name" => "Command Secondary School, MPU Aninri."],
            ["state_id" => 10, "name" => "Army Children School, Calabar."],
            ["state_id" => 17, "name" => "Army Children School, Owerri."],
            ["state_id" => 8, "name" => "Army Children School, Makurdi."],
            ["state_id" => 12, "name" => "Command Secondary School, Abakaliki."],
            ["state_id" => 5, "name" => "Command Children School, Onitsha."],
            ["state_id" => 1, "name" => "Command Secondary School, Ohafia."],
            ["state_id" => 17, "name" => "Command Science Secondary School, Orlu."],
            ["state_id" => 1, "name" => "Ibeku High School, Umuahia."],
            ["state_id" => 15, "name" => "Command Children School Awkunanau, 103 Battalion, Enugu"],

            ["state_id" => 2, "name" => "Command Day Secondary School, Abuja."],
            ["state_id" => 23, "name" => "Army Day Secondary School, Chari-Maigumeri Barracks, Lokoja."],
            ["state_id" => 27, "name" => "Command Secondary School, Suleja."],
            ["state_id" => 26, "name" => "Command Science Secondary School, Lafia."],

            ["state_id" => 26, "name" => "Command Day Secondary School Doma"],

        ];

        foreach ($centers as $center) {
            $center['created_at'] = now();
            $center['updated_at'] = now();

            DB::table('centers')->insert($center);
        }

    }
}
