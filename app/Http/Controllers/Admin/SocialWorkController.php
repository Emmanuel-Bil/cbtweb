<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\SocialWork;

class SocialWorkController extends ResourceController
{
    protected string $model = SocialWork::class;
    protected string $routePrefix = 'admin.social-works';
    protected string $title = 'œuvre sociale';
    protected string $orderColumn = 'order';
    protected string $orderDirection = 'asc';

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea'],
            ['name' => 'image', 'label' => 'Image', 'type' => 'image'],
            ['name' => 'category', 'label' => 'Catégorie', 'type' => 'text'],
            ['name' => 'order', 'label' => 'Ordre', 'type' => 'number'],
        ];
    }
}
