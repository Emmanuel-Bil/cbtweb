<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryEvent extends Model
{
    protected $fillable = ['order', 'period', 'title', 'content'];
}
