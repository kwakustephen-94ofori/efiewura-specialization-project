<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //function to return the main admin page
    public function adminIndex(){
    	return view('admin.index');
    }
}
