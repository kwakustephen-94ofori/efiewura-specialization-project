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
            'name' => str_random(10),
            'description' => 'This is the first real estate house',
            'price'=>'50',
            'video'=>'img/3.jpg',
            'sale_type'=>'Rent',
            'number_of_rooms'=>3,
            'number_of_bathrooms'=>2,
            'garage'=>'Yes',
            'map'=>'Nothing',
            'street_view'=>'Nothing',
            'dimension'=>'240 x 350',
            'negotiable'=>1,
            'social_amenities'=>'School'
        
        ]);


    }
}
