<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Propertie extends Model
{

    //for soft delete
    use SoftDeletes;



    protected $dates = ['deleted_at'];
    
}
