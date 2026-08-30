<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\Download;

class DownloadController extends ResourceController
{
    protected string $model = Download::class;
    protected string $routePrefix = 'admin.downloads';
    protected string $title = 'téléchargement';

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea'],
            ['name' => 'file', 'label' => 'Fichier', 'type' => 'file', 'required' => true],
            ['name' => 'category', 'label' => 'Catégorie', 'type' => 'text'],
        ];
    }
}
