<?php

namespace Webs\Location\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function states(){
        return $this->hasMany('Webs\Location\Models\State');
    }

    public function cities(){
        return $this->hasMany('Webs\Location\Models\City');
    }
}
