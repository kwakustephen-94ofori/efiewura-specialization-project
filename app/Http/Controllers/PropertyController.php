<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

use Session;

class PropertyController extends Controller
{
    //
    public function index(){

        $user_id = auth()->user()->id;

        $properties = DB::table('properties as p')
                        ->join('locations as l', 'p.location_id', '=', 'l.id')
                        ->select('p.id as id', 'l.region as region', 'l.city as city', 'l.suburb as suburb', 'p.name as name', 'p.description as description', 'p.price as price', 'p.number_of_rooms as number_of_rooms', 'p.number_of_bathrooms as number_of_bathrooms', 'p.dimension as dimension')
                        ->where('user_id', $user_id)
                        ->paginate(20);

                        //dd($properties);

        return view('owner.properties.index', compact('properties'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function addProperty(){
    	if (Auth::user()->status == 1) {
    		# code...
    		$property_type = DB::select('select * from property_types');

    		return view('owner.properties.add', compact ('property_type'));
    	}
    	else{
    		Session::flash('message', 'Your account is not verified, verify your account to be able to add properties');
    		return Redirect::to('owner/index');
    	}
    	
    }


    public function storeProperty(Request $request){
        $this->validate($request, [
            'p_name' => 'required',
            'p_type' => 'required|numeric',
            'description' => 'required',
            'price' => 'required|numeric',
            'sale_type' => 'required',
            'num_room' => 'required|numeric',
            'num_bathroom' => 'required|numeric',
            'garage' => 'required',
            'dimension' => 'required',
            'negotiable' => 'required|numeric',
            'video' => 'mimes:mp4,mpeg,flv,avi,mkv',
            'image' => 'required',
        ]);
        //dd($request);
        Property::saveProperty($request);

        return Redirect::to('property/index');
        

    }


    public function show($id){

        $id = Crypt::decrypt($id);

        $property = DB::table('properties as p')
                        ->join('locations as l', 'p.location_id', '=', 'l.id')
                        //->join('images as i', 'i.property_id', '=', 'p.id')
                        ->select('p.id as id', 'l.region as region', 'l.city as city', 'l.suburb as suburb', 'p.name as name', 'p.description as description', 'p.sale_type as sale_type', 'p.price as price', 'p.number_of_rooms as number_of_rooms', 'p.number_of_bathrooms as number_of_bathrooms', 'p.garage as garage', 'p.dimension as dimension')
                        ->where('p.id', $id)->get();

        $images = DB::table('images')->where('property_id', $id)->get();
            /*$property = DB::table('properties')
                          ->where('id', $id)->get();*/

                        //dd($property);

        return view('owner.properties.show', compact('property', 'images'));
    }
}
