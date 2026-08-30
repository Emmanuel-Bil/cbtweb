<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\Event;
use App\Models\Zone;

class EventController extends ResourceController
{
    protected string $model = Event::class;
    protected string $routePrefix = 'admin.events';
    protected string $title = 'événement';
    protected string $orderColumn = 'starts_at';
    protected string $orderDirection = 'desc';

    protected function fields(): array
    {
        return [
            ['name' => 'zone_id', 'label' => 'Zone (optionnel)', 'type' => 'select', 'options' => Zone::orderBy('order')->pluck('name', 'id')->toArray()],
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea'],
            ['name' => 'starts_at', 'label' => 'Date de début', 'type' => 'datetime', 'required' => true],
            ['name' => 'ends_at', 'label' => 'Date de fin', 'type' => 'datetime'],
            ['name' => 'location', 'label' => 'Lieu', 'type' => 'text'],
            ['name' => 'image', 'label' => 'Image', 'type' => 'image'],
            ['name' => 'is_featured', 'label' => 'Mis en avant', 'type' => 'checkbox'],
        ];
    }
}
