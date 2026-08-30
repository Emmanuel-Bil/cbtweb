<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\KeyDate;

class KeyDateController extends ResourceController
{
    protected string $model = KeyDate::class;
    protected string $routePrefix = 'admin.key-dates';
    protected string $title = 'date utile';
    protected string $orderColumn = 'order';
    protected string $orderDirection = 'asc';

    protected function fields(): array
    {
        return [
            ['name' => 'year', 'label' => 'Année', 'type' => 'number', 'required' => true],
            ['name' => 'label', 'label' => 'Date / période', 'type' => 'text', 'required' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'text', 'required' => true],
            ['name' => 'order', 'label' => 'Ordre', 'type' => 'number'],
        ];
    }
}
