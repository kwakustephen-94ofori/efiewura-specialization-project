<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public static function saveEffiewura($request){
        $newUser = new User;

        $newUser->location_id = 1;
        $newUser->name = $request['name'];
        $newUser->gender = $request['gender'];
        $newUser->nationality = $request['nationality'];
        $newUser->email = $request['email'];
        $newUser->address = $request['address'];
        $newUser->phone_number = $request['phone_number'];
        $newUser->age = $request['age'];




        if(Input::file())
        {

            $image = Input::file('profile_pic');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('profilepics/' . $filename);


            Image::make($image->getRealPath())->resize(200, 200)->save($path);

            $newUser->profile_pic = $filename;
        }

        $newUser->user_type = "Property Owner";

        $newUser->password = bcrypt($request['password']);

        $newUser->status =0;

        $newUser->save();


        $user_id = $newUser->id;
    }

    public static function verification_code($data){
        $code = rand(100000, 999999);
        $data->session()->put('code', $code);
/*
        // define separator constants.
        define ('VALSEP', '__@');
        define ('RECPTSEP', '__#');

        // Base URL for sending SMS.
        $smsurl = "http://api.smsonlinegh.com/sendsms.php";

        // account login
        $user = urlencode("samwisegh@live.com");

        // account password
        $password = urlencode("elimalech");

        // sender ID.
        $sender = urlencode("EffiewuraGH");

        // message type (We will send as Text)
        $type = 0;

        $message = urlencode("Hello ". $data['name'] . ", your verification code for Effiewuragh is ". $code);

        // we should set the string for destination and values.
        $destination = "0540873366";

        // set the parameter string.
        $params = "user={$user}&password={$password}&message={$message}" .
            "&type={$type}&sender={$sender}&destination={$destination}";

        // send the message and show the response.
        $liveurl = "{$smsurl}?{$params}";
        readfile($liveurl);
*/
    }
}
