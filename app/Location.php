<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ["name"];

    public function property(){
        return $this->hasMany('App\Property');
    }
}
