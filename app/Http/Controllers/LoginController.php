<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){

        return view('main.login');
    }

    

    public function store(Request $request){

        $this->validate($request, [
            
            'email' => 'required|email',
            'password' => 'required|max:50',
            
        ]);

        

        

        if (Auth::attempt(['email' => $request['email'], 
        'password' => $request['password'],
        'user_type'=>'Property Owner'])) {
            // Authentication passed...
            return redirect()->intended('/admin/index');

        }
        else if(Auth::attempt(['email' => $request['email'], 
        'password' => $request['password'],
        'user_type'=>'Personnel'])){

            return redirect()->intended('/admin/index');


        }
        else if(Auth::attempt(['email' => $request['email'], 
        'password' => $request['password'],
        'user_type'=>'Admin'])){

            return redirect()->intended('/admin/index');


        }else{

            return redirect()->route('login')->with('errors','Please enter the right credentials');

        }
    

        }

        public function doLogout()
       {
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
      }
}
