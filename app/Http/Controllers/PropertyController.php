<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Session;

class PropertyController extends Controller
{
    //

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

        return Redirect::to('owner/index');
        

    }
}
