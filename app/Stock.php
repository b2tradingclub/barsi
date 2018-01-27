<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function operations()
    {
    	return $this->hasMany('Operation');
    }
}
