<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $guarded = [

    ];
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner');
    }
    public function type()
    {
        return $this->belongsTo('App\PropertyType', 'property_type');
    }
}
