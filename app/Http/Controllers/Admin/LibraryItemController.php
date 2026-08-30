<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\LibraryItem;

class LibraryItemController extends ResourceController
{
    protected string $model = LibraryItem::class;
    protected string $routePrefix = 'admin.library-items';
    protected string $title = 'ressource de la bibliothèque';

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea'],
            ['name' => 'file', 'label' => 'Fichier', 'type' => 'file'],
            ['name' => 'external_link', 'label' => 'Lien externe', 'type' => 'text'],
            ['name' => 'category', 'label' => 'Catégorie', 'type' => 'text'],
        ];
    }
}
