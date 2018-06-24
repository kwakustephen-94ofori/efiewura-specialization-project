<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //function to return the main admin page
    public function adminIndex(){
    	return view('admin.index');
    }


    // function to view all posted properties
    public function viewProperties(){
        
        return view('admin.properties');
    }

}
