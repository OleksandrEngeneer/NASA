<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BestPhoto extends Model
{
    protected $fillable = [
        'id', 'time', 'explanation', 'url', 'created_at'
    ];
}
