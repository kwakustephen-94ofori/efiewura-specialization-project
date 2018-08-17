<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image as Image;

class Property extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function saveProperty($request){
        
        $user_id = auth()->user()->id;
        $property_type_id = $request['p_type'];
        $location_id = 1;
        $name = $request['p_name'];
        $description = $request['description'];
        $price = $request['price'];
        $sale_type = $request['sale_type'];
        $number_of_rooms = $request['num_room'];
        $number_of_bathrooms = $request['num_bathroom'];
        $garage = $request['garage'];
        $dimension = $request['dimension'];
        $negotiable = $request['negotiable'];
        $social_amenities = $request['amenities'];

        //dd($request);

        $p_id = DB::table('properties')->insertGetId([
            'user_id' => $user_id,
            'property_type_id' => $property_type_id,
            'location_id' => $location_id,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'sale_type' => $sale_type,
            'number_of_rooms' => $number_of_rooms,
            'number_of_bathrooms' => $number_of_bathrooms,
            'garage' => $garage,
            'dimension' => $dimension,
            'negotiable' => $negotiable,
            'social_amenities' => $social_amenities
        ]);


        $image = $request['image'];
        foreach ($image as $pic)
        {
            $filename  = 'IMG_'. time() . rand(10, 99) . '.' . $pic->getClientOriginalExtension();

            $path = public_path('facility_images/' . $filename);


            Image::make($pic->getRealPath())->resize(200, 200)->save($path);


            DB::table('images')->insert(
                ['property_id' => $p_id, 'filename' => $filename]
            );
        }
    }
}