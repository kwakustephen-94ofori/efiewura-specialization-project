<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //
    public function ownerIndex()
    {
    	return view('owner.index');
    }

    public function ownerGallaryLands()
    {
    	return view('owner.gallary.lands');
    }

    public function ownerGallaryHouses()
    {
    	return view('owner.gallary.houses');
    }
}
