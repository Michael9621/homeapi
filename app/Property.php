<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable=["name","price","description","category_id","location_id","bedrooms","status"];

    public function locations(){
        return $this->belongsTo('App\Location');
    }
}
