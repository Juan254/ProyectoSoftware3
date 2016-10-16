<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aim extends Model
{
    //
    protected $table = "aims";
    protected $fillable = ['date', 'pet','board','archive','blow','junk','metal','plega','glass','frame', 'date'];
}
