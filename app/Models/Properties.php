<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $guarded = [];

    public function amenities()
    {
        return $this->hasMany('App\Models\Property_amenities', 'property_id', 'id');
    }

    public function location()
    {
        return $this->hasOne('App\Models\Property_location', 'property_id', 'id');
    }

    public function plans()
    {
        return $this->hasMany('App\Models\Property_plans', 'property_id', 'id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Property_images', 'property_id', 'id');
    }
}
