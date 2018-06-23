<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index(){
        return view('main.contact');
    }


    public function store(Request $request){

        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:50',
            'message' => 'required'
        ]);

        dd($request);
    }
}
