<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            'user_id' =>1,
            'property_type_id'=>1,
            'location_id'=>1,
            'properties_name' => str_random(10),
            'description' => 'This is the first real estate house',
            'price'=>'50',
            'video'=>'img/3.jpg',
            'number_of_rooms'=>3,
            'number_of_brooms'=>2,
            'garage'=>'Yes',
            'dimension'=>'240 x 350',
            'negotiable'=>1,
            
        ]);
    }
}
