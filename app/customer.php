<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $dates = ['birthday','created_at','updated_at'];

    public function pref()
    {

        return $this->belongsTo('App\pref');
    }
}
