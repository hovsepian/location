<?php

namespace Webs\Location\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo('Webs\Location\Models\Country');
    }

    public function state(){
        return $this->belongsTo('Webs\Location\Models\State');
    }
}
