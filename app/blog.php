<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class blog extends Model
{

    protected $table = 'users';
    public $timestamps = false;

    //softdeletes
    //use SoftDeletes;
	//protected $dates = ['deleted_at'];


    protected $fillable = ['umur','nama']; //whitelist
    // public $guarded = []; //blacklist
    
}
