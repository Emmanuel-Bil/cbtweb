<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\Activity;

class ActivityController extends ResourceController
{
    protected string $model = Activity::class;
    protected string $routePrefix = 'admin.activities';
    protected string $title = 'activité';
    protected string $orderColumn = 'order';
    protected string $orderDirection = 'asc';

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea'],
            ['name' => 'icon', 'label' => 'Icône (nom ou emoji)', 'type' => 'text'],
            ['name' => 'image', 'label' => 'Image', 'type' => 'image'],
            ['name' => 'order', 'label' => 'Ordre', 'type' => 'number'],
        ];
    }
}
