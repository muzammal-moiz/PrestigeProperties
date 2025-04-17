<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    protected $table = 'favourite_properties';
    protected $guarded = [];

    public function property_detaill()
    {
        return $this->hasOne('App\Models\Properties', 'id', 'propertyid');
    }
}
