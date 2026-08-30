<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\Video;

class VideoController extends ResourceController
{
    protected string $model = Video::class;
    protected string $routePrefix = 'admin.videos';
    protected string $title = 'vidéo';

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'youtube_url', 'label' => 'URL YouTube', 'type' => 'text', 'required' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea'],
            ['name' => 'published_at', 'label' => 'Date de publication', 'type' => 'datetime'],
        ];
    }
}
