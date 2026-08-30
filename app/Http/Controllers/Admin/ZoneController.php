<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\Zone;

class ZoneController extends ResourceController
{
    protected string $model = Zone::class;
    protected string $routePrefix = 'admin.zones';
    protected string $title = 'zone';
    protected string $orderColumn = 'order';
    protected string $orderDirection = 'asc';

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Nom de la zone', 'type' => 'text', 'required' => true],
            ['name' => 'moderator_name', 'label' => 'Modérateur', 'type' => 'text'],
            ['name' => 'moderator_phone', 'label' => 'Téléphone', 'type' => 'text'],
            ['name' => 'order', 'label' => 'Ordre', 'type' => 'number'],
        ];
    }
}
