<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'location_id' => 1,
            'name' => 'Nyarko Isaac Kwadwo',
            'gender' =>'Male',
            'nationality' => 'Ghanaian',
            'email' => 'nyarko@gmail.com',
            'address' => 'Post Office Box 126',
            'phone_number'=>'0544474706',
            'age' => '24',
            'user_type'=>'Property Owner',
            'password' => bcrypt('de4253!@#'),
            'status'=>0,
        ]);
        DB::table('users')->insert([
            'location_id' => 1,
            'name' => 'Gberbie Derick',
            'gender' =>'Male',
            'nationality' => 'Ghanaian',
            'email' => 'derick@gmail.com',
            'address' => 'Post Office Box 126',
            'phone_number'=>'0544474706',
            'age' => '24',
            'user_type'=>'Admin',
            'password' => bcrypt('de4253!@#'),
            'status'=>0,
        ]);
    }
}
