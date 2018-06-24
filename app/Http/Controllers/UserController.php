<?php

namespace App\Http\Controllers;

use Image;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    //
    public function register(){
    	return view('users.register');
    }

    public function store(Request $request){
    	$this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'email' => 'email|required|unique:users',
            'address' => 'required',
            'phone_number' => 'required|numeric|unique:users',
            'age' => 'required|numeric',
            'profile_pic' => 'mimes:jpg,jpeg,png',
            'password' => 'required|confirmed'
        ]);

        User::saveEffiewura($request);
        User::verification_code($request);


        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return view('Users.verification');
        }
    }


    public function showVerificationForm(){
        return view('Users.verification');
    }


    public function verification(Request $request){
        if (session('code')==$request['code']){

            DB::table('users')->where('id', auth()->user()->id)->update(['status'=>1]);
            return redirect()->route('home');
        }
        else{
            return redirect()->route('home');
        }
    }
}
