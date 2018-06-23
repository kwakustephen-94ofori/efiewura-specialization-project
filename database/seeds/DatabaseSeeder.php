<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(Property_typesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(AmenitiesTableSeeder::class);
    }
}
