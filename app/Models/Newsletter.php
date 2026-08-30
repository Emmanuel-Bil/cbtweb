<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['title', 'file', 'published_at'];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
