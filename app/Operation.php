<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    public function stock()
    {
    	return $this->belongsTo('Stock');
    }

    public function portfolio()
    {
    	return $this->belongsTo('Portfolio');
    }
}
