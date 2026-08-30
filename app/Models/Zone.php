<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    protected $fillable = ['name', 'moderator_name', 'moderator_phone', 'order'];

    public function churches(): HasMany
    {
        return $this->hasMany(Church::class);
    }
}
