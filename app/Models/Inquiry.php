<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $table = 'inquiry';
    protected $guarded = [];

    public function property()
    {
        return $this->hasOne('App\Models\Properties', 'id', 'propertyid');
    }

}
