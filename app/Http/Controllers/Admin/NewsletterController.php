<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\Newsletter;

class NewsletterController extends ResourceController
{
    protected string $model = Newsletter::class;
    protected string $routePrefix = 'admin.newsletters';
    protected string $title = 'newsletter';

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'file', 'label' => 'Fichier PDF', 'type' => 'file'],
            ['name' => 'published_at', 'label' => 'Date de publication', 'type' => 'datetime'],
        ];
    }
}
