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
            ["id" => 19, "name" => "Command Children School, Dantuku Road, Kaduna."],
            ["id" => 19, "name" => "Command Day Secondary School, Kaduna."],
            ["id" => 20, "name" => "Army Children School Kano."],
            ["id" => 27, "name" => "Army Day Secondary School, Minna."],
            ["id" => 19, "name" => "Command Secondary School, Kaduna."],
            ["id" => 19, "name" => "Command Day Secondary School, Chindit, Zaria."],
            ["id" => 19, "name" => "Command Day Secondary School Jaji"],

            ["id" => 31, "name" => "Command Day Secondary School, Odogbo, Ibadan."],
            ["id" => 31, "name" => "Command Day Secondary School, Mokola, Ibadan."],

            ["id" => 24, "name" => "Command Children School, Ilorin."],
            ["id" => 13, "name" => "Command Children School GRA Benin."],
            ["id" => 29, "name" => "Command Day Secondary School, Owena Barracks, Akure."],

            ["id" => 14, "name" => "Command Secondary School, Isan Ekiti"],
            ["id" => 14, "name" => "Government College Ado Ekiti"],

            ["id" => 28, "name" => "Command Day Secondary School, Ijebu-Ode"],
            ["id" => 30, "name" => "Command Day Secondary School Ede."],

            ["id" => 31, "name" => "Command Secondary School, Ibadan."],
            ["id" => 31, "name" => "Command Science Secondary School, Saki."],

            ["id" => 32, "name" => "Command Day Secondary School, Maxwell Khobe, Cantonment, Jos."],
            ["id" => 6, "name" => "Command Day Secondary School, Bauchi."],
            ["id" => 32, "name" => "Command Secondary School Jos."],
            ["id" => 3, "name" => "Command Science Secondary School, Numan, Adamawa"],
            ["id" => 3, "name" => "Command Day Secondary School, Yola."],

            ["id" => 11, "name" => "Command Secondary School Mbiri."],
            ["id" => 33, "name" => "Army Children School PortHarcourt."],
            ["id" => 10, "name" => "Christ the King Pry School, Uyo"],
            ["id" => 11, "name" => "Saint Patrick College, Asaba. "],
            ["id" => 4, "name" => "Command Science Secondary School, Effa-Etinan."],
            ["id" => 7, "name" => "Command Science Secondary School Ebedebiri."],

            ["id" => 9, "name" => "Command Day Secondary School, Maiduguri(Maimalari Cant)"],
            ["id" => 9, "name" => "Command Day Secondary School Biu, Borno State"],

            ["id" => 22, "name" => "Command Science Secondary School (Boys) Jega"],
            ["id" => 34, "name" => "Command Day Secondary School, Gigginya Barracks, Sokoto"],
            ["id" => 37, "name" => "Command Science Secondary School (Girls) Gusau, Zamfara."],
            ["id" => 21, "name" => "Command Science Secondary School (Boys) Faskari."],
            ["id" => 21, "name" => "Army Children School, Katsina."],
            ["id" => 21, "name" => "Command Day Secondary School, Daura"],

            ["id" => 25, "name" => "Command Day Secondary School, Ikeja"],
            ["id" => 25, "name" => "Command Children School (Extension), Ikeja."],
            ["id" => 25, "name" => "Command Day Secondary School, Oshodi."],
            ["id" => 25, "name" => "Command Children School, Oshodi."],
            ["id" => 25, "name" => "Command Children School Ojo."],
            ["id" => 25, "name" => "Command Day Secondary School, Ojo."],
            ["id" => 25, "name" => "Command Secondary School, Lagos."],
            ["id" => 25, "name" => "Command Children School, Bonny Cant."],
            ["id" => 25, "name" => "Army Children School, Badagry."],
            ["id" => 25, "name" => "Command Children School, Yaba."],
            ["id" => 25, "name" => "Army Children School Losi – Odogunyan Barracks, Ikorodu."],
            ["id" => 28, "name" => "Command Day Secondary School, Lafenwa Barracks, Abeokuta."],
            ["id" => 25, "name" => "Airforce Secondary School, Sam Ethan Airforce Base, Ikeja."],
            ["id" => 25, "name" => "Nigerian Navy Secondary School, Navy Town, Ojo."],
            ["id" => 25, "name" => "Command Day Secondary School, Bonny Cant Lagos."],
            ["id" => 25, "name" => "Command Children School (Extension) Opposite First Bank Ikeja."],


            ["id" => 15, "name" => "Command Day Secondary School, Enugu"],
            ["id" => 15, "name" => "Command Secondary School, Orba Udena."],
            ["id" => 15, "name" => "Command Secondary School, MPU Aninri."],
            ["id" => 10, "name" => "Army Children School, Calabar."],
            ["id" => 17, "name" => "Army Children School, Owerri."],
            ["id" => 8, "name" => "Army Children School, Makurdi."],
            ["id" => 12, "name" => "Command Secondary School, Abakaliki."],
            ["id" => 5, "name" => "Command Children School, Onitsha."],
            ["id" => 1, "name" => "Command Secondary School, Ohafia."],
            ["id" => 17, "name" => "Command Science Secondary School, Orlu."],
            ["id" => 1, "name" => "Ibeku High School, Umuahia."],
            ["id" => 15, "name" => "Command Children School Awkunanau, 103 Battalion, Enugu"],

            ["id" => 2, "name" => "Command Day Secondary School, Abuja."],
            ["id" => 23, "name" => "Army Day Secondary School, Chari-Maigumeri Barracks, Lokoja."],
            ["id" => 27, "name" => "Command Secondary School, Suleja."],
            ["id" => 26, "name" => "Command Science Secondary School, Lafia."],

            ["id" => 26, "name" => "Command Day Secondary School Doma"],

        ];

        DB::table('centers')->insert( $centers);
    }
}
