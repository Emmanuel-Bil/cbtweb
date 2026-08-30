<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'youtube_url', 'description', 'published_at'];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getEmbedUrlAttribute(): string
    {
        $url = $this->youtube_url;

        if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([A-Za-z0-9_-]+)/', $url, $m)) {
            return 'https://www.youtube.com/embed/' . $m[1];
        }

        return $url;
    }
}
