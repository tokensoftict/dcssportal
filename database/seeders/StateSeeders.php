<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nigerian_states = array(
            array('id' => '1','name' => 'Abia'),
            array('id' => '2','name' => 'Abuja'),
            array('id' => '3','name' => 'Adamawa'),
            array('id' => '4','name' => 'Akwa-Ibom'),
            array('id' => '5','name' => 'Anambra'),
            array('id' => '6','name' => 'Bauchi'),
            array('id' => '7','name' => 'Bayelsa'),
            array('id' => '8','name' => 'Benue'),
            array('id' => '9','name' => 'Borno'),
            array('id' => '10','name' => 'Cross River'),
            array('id' => '11','name' => 'Delta'),
            array('id' => '12','name' => 'Ebonyi'),
            array('id' => '13','name' => 'Edo'),
            array('id' => '14','name' => 'Ekiti'),
            array('id' => '15','name' => 'Enugu'),
            array('id' => '16','name' => 'Gombe'),
            array('id' => '17','name' => 'Imo'),
            array('id' => '18','name' => 'Jigawa'),
            array('id' => '19','name' => 'Kaduna'),
            array('id' => '20','name' => 'Kano'),
            array('id' => '21','name' => 'Katsina'),
            array('id' => '22','name' => 'Kebbi'),
            array('id' => '23','name' => 'Kogi'),
            array('id' => '24','name' => 'Kwara'),
            array('id' => '25','name' => 'Lagos'),
            array('id' => '26','name' => 'Nassarawa'),
            array('id' => '27','name' => 'Niger'),
            array('id' => '28','name' => 'Ogun'),
            array('id' => '29','name' => 'Ondo'),
            array('id' => '30','name' => 'Osun'),
            array('id' => '31','name' => 'Oyo'),
            array('id' => '32','name' => 'Plateau'),
            array('id' => '33','name' => 'Rivers'),
            array('id' => '34','name' => 'Sokoto'),
            array('id' => '35','name' => 'Taraba'),
            array('id' => '36','name' => 'Yobe'),
            array('id' => '37','name' => 'Zamfara')
        );


        DB::table('states')->insert($nigerian_states);
    }
}
