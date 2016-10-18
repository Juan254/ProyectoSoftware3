<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    //
    protected $table = "persons";
    protected $fillable = ['id_card', 'name', 'last_name', 'age', 'municipality', 'social_number'];
}
