<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable=["name","price","description","category_id","location_id","bedrooms","status"];

    public function location(){
        return $this->belongsTo('App\Location');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
