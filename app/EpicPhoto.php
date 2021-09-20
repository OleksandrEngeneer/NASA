<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EpicPhoto extends Model
{
    protected $fillable = [
        'id', 'caption', 'picture', 'date', 'created_at'
    ];
}
