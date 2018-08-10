<?php

namespace App\Http\Controllers;

use Image;
use Response;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Input;
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
            return redirect()->route('owner-index');
        }
        else{
            return redirect()->route('owner-index');
        }
    }
    
    public function personnelForm(){

        return view('admin.personnel.add');
    }

    public function AddPersonnel(Request $request){

        $this->validate($request, [
            'name' => 'required',
            
            'nationality' => 'required',
            'email' => 'email|required|unique:users',
            'address' => 'required',
            'phone_number' => 'required|numeric|unique:users',
            
            'profile_pic' => 'mimes:jpg,jpeg,png',
            'password' => 'required'
        ]);
        $newPersonnel = User::create([
            'location_id'=>1,
            'name'=> $request->input('name'),
            'nationality'=> $request->input('nationality'),
            'email'=> $request->input('email'),
            'address'=> $request->input('address'),
            'phone_number'=> $request->input('phone_number'),
            'user_type'=>'Personnel',
            'password' => bcrypt($request['password']),
            'status'=>0
            
            
            
      
          ]);
        
        




        if(Input::file())
        {

            $image = Input::file('profile_pic');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('profilepics/' . $filename);


            Image::make($image->getRealPath())->resize(200, 200)->save($path);

            $newPersonnel->profile_pic = $filename;
        }

       

        

       

        $newPersonnel->save();


        $user_id = $newPersonnel->id;
        

        if($newPersonnel){
            return redirect('/user/personnel/show')->with('success','New Personnel Added Successfully');
        
    
    }
    
    return back()->withInput()->with('errors','Personnel has not been created');
   
    }

    public function showIndex(){

    $personnels = User::all();

        return view('admin.personnel.show',['personnels'=>$personnels]);
    }


    public function editPersonnel($id){



        $personnel = User::find($id);
        
        return view('admin.personnel.edit',['personnel'=>$personnel]);



       
        
    }

    public function updatePersonnel(Request $request,$id){

        
            
        $personnel =User::find($request->id);
        
        $personnel->location_id=1;
        $personnel->name= $request->name;
        $personnel->nationality = $request->nationality;
        $personnel->email = $request->email;
        $personnel->address = $request->address;
        $personnel->phone_number = $request->phone_number;
        $personnel->user_type ='Personnel';
        $personnel->password = bcrypt($request['password']);
        $personnel->status = 0;
            
        


            if(Input::file())
        {

            $image = Input::file('profile_pic');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('profilepics/' . $filename);


            Image::make($image->getRealPath())->resize(200, 200)->save($path);

            $personnel->profile_pic = $filename;
        }

        // User::where('id',$id)->update($personnel);
        $personnel->save();

        return redirect()->route('showpersonnel')->with('success','Personnel details updated successfully!');;

        


            


    }


    public function deletePersonnel($id){
        $findPersonnel =User::find($id);
        $findPersonnel->delete();
        // dd($findPersonnel);

        
     return redirect()->route('showpersonnel')->with('success','Personnel detail deleted successfully!');;
        

    }
}
