<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['name', 'firstname', 'email', 'country', 'phone', 'message', 'is_read'];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
