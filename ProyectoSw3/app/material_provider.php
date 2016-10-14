<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class material_provider extends Model
{
    //
    protected $table = "material_provider";
    protected $fillable = ['material_type', 'provider_type', 'quantity', 'municipality', 'price', 'date'];
}
