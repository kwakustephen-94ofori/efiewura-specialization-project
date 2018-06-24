<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amenity;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use App\User;
use App\Propertie;
use Image;

class AdminController extends Controller
{
    //function to return the main admin page
    public function adminIndex(){
    	return view('admin.index');
    }


    // function to view all posted properties
    public function viewProperties(){

        $prop = DB::table('properties')
        ->join('users', 'properties.user_id', '=', 'users.id')
        ->join('property_types', 'properties.property_type_id', '=', 'property_types.id')
        ->join('locations', 'properties.location_id', '=', 'locations.id')
        ->select('properties.*', 'users.name', 'property_types.name AS proname', 'locations.region', 'locations.city', 'locations.suburb')
        ->orderBy('created_at', 'desc')
        ->paginate(20);

        return view('admin.properties', compact('prop'));
    }


    // function that will delete properties
    public function deleteProperty($id){
        $prop = Propertie::find($id);
        $prop->delete();

        Session::flash('delete', 'Properties has been Deleted');

        return redirect()->route('allProperties');
    }
    

}
