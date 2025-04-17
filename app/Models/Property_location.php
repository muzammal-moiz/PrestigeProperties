<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_location extends Model
{
    use HasFactory;
    protected $table = 'properties_location';
    protected $guarded = [];
}
