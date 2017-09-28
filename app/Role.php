<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillabel = ['name'];

    public function role()
    {
    	return $this->belongsTo('App\Role');
    }
}
