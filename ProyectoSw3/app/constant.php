<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class constant extends Model
{
    //
    protected $table = "constants";
    protected $fillable = ['buy_price', 'pet','board','archive','blow','junk','metal','plega','glass','frame', 'description'];
}
