<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibraryItem extends Model
{
    protected $fillable = ['title', 'description', 'file', 'external_link', 'category'];
}
