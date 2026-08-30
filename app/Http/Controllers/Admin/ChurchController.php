<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\Church;
use App\Models\Zone;

class ChurchController extends ResourceController
{
    protected string $model = Church::class;
    protected string $routePrefix = 'admin.churches';
    protected string $title = 'église';

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Nom de l\'église', 'type' => 'text', 'required' => true],
            ['name' => 'zone_id', 'label' => 'Zone', 'type' => 'select', 'options' => Zone::orderBy('name')->pluck('name', 'id')->toArray()],
            ['name' => 'region', 'label' => 'Région', 'type' => 'text'],
            ['name' => 'city', 'label' => 'Ville', 'type' => 'text'],
            ['name' => 'address', 'label' => 'Adresse', 'type' => 'text'],
            ['name' => 'lat', 'label' => 'Latitude', 'type' => 'number'],
            ['name' => 'lng', 'label' => 'Longitude', 'type' => 'number'],
            ['name' => 'pastor_name', 'label' => 'Pasteur', 'type' => 'text'],
            ['name' => 'phone', 'label' => 'Téléphone', 'type' => 'text'],
        ];
    }
}
