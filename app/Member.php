<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name','identification','phone','age','gender','service_id'];

    public function service(){
        $this->belongsTo('App\Service');
    }
}
