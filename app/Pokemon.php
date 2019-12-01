<?php

namespace edy;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public function trainer($value='')
    {
    	return $this->belongsTo('edy\Trainer');
    	
    }
}
