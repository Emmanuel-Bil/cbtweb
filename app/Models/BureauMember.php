<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BureauMember extends Model
{
    protected $fillable = ['category', 'name', 'title', 'phone', 'photo', 'order'];
}
