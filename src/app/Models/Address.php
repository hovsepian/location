<?php

namespace Webs\Location\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function country(){
        return $this->belongsTo('Webs\Location\Models\Country');
    }

    public function state(){
        return $this->belongsTo('Webs\Location\Models\State');
    }

    public function city(){
        return $this->belongsTo('Webs\Location\Models\City');
    }
}
