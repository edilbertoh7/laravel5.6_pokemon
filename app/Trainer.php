<?php

namespace edy;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
     protected $fillable = [
        'name','avatar'
    ];
    /**
    *
    *
    *@return string
    */
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
