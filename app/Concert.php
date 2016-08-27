<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $fillable = ['date', 'hour', 'address', 'city', 'place'];
    protected $dates = ['date'];
}
