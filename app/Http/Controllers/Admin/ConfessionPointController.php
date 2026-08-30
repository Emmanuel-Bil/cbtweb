<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\ConfessionPoint;

class ConfessionPointController extends ResourceController
{
    protected string $model = ConfessionPoint::class;
    protected string $routePrefix = 'admin.confession-points';
    protected string $title = 'point de confession de foi';
    protected string $orderColumn = 'order';
    protected string $orderDirection = 'asc';

    protected function fields(): array
    {
        return [
            ['name' => 'order', 'label' => 'Numéro', 'type' => 'number', 'required' => true],
            ['name' => 'content', 'label' => 'Contenu', 'type' => 'textarea', 'required' => true],
            ['name' => 'references', 'label' => 'Références bibliques', 'type' => 'text'],
        ];
    }
}
