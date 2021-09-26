<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarsRoverPhoto extends Model
{
    protected $fillable = [
        'id', 'camera', 'img_src', 'earth_date'
    ];
}
