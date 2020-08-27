<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = ['duration','attendants','day','service','date'];

    public function members()
    {
        return $this->hasMany('App\Member');
    }
}

