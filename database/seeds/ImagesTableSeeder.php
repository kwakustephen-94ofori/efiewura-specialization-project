<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            
            'property_id' =>1,
            'filename'=>'img/3.jpg',
            
        ]);

        
    }
}
