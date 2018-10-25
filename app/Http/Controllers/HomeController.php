<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Property;
use DB;

class HomeController extends Controller
{
    public function index(){

    	$properties = DB::table('properties')
                            ->join('users', 'users.id', '=', 'properties.user_id')
                            ->join('locations', 'locations.id', '=', 'properties.location_id')
                            ->join('property_types', 'property_types.id', 'properties.property_type_id')
                            ->select('properties.id','properties.user_id','properties.name AS property_name','properties.description', 'properties.number_of_rooms', 'properties.sale_type','properties.number_of_bathrooms', 'properties.garage', 'properties.dimension', 'properties.price' , 'users.phone_number', 'users.name', 'users.email' , 'locations.region', 'locations.city', 'locations.suburb','property_types.name AS property_type')
                            ->paginate(6);
        //dd($properties);
        //$slideProperty = $properties->random();
        //dd($slideProperty);

    	return view('main.index', compact('properties'));
    }

  
}
