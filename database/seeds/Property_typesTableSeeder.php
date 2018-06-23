<?php

use Illuminate\Database\Seeder;

class Property_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_types')->insert([
            
            'property_name' => 'Land',
            
        ]);

         DB::table('property_types')->insert([
            
            'property_name' => 'Apartment',
            
        ]);
        
    }
}
