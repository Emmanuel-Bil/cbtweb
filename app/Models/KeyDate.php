<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeyDate extends Model
{
    protected $fillable = ['year', 'label', 'description', 'order'];
}
