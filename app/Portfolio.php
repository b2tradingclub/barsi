<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function operations()
    {
    	return $this->hasMany('Operation');
    }

    public function user()
    {
    	return $this->belongsTo('user');
    }
}
