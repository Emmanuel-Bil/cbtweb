<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Church extends Model
{
    protected $fillable = ['zone_id', 'name', 'region', 'city', 'address', 'lat', 'lng', 'pastor_name', 'phone'];

    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }
}
