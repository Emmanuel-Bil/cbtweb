<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\BureauMember;

class BureauMemberController extends ResourceController
{
    protected string $model = BureauMember::class;
    protected string $routePrefix = 'admin.bureau-members';
    protected string $title = 'membre du bureau';
    protected string $orderColumn = 'order';
    protected string $orderDirection = 'asc';

    protected function fields(): array
    {
        return [
            [
                'name' => 'category', 'label' => 'Catégorie', 'type' => 'select', 'required' => true,
                'options' => ['bureau' => 'Bureau Exécutif', 'department_director' => 'Directeur de département', 'zone_moderator' => 'Modérateur de zone'],
            ],
            ['name' => 'name', 'label' => 'Nom', 'type' => 'text', 'required' => true],
            ['name' => 'title', 'label' => 'Fonction', 'type' => 'text', 'required' => true],
            ['name' => 'phone', 'label' => 'Téléphone', 'type' => 'text'],
            ['name' => 'photo', 'label' => 'Photo', 'type' => 'image'],
            ['name' => 'order', 'label' => 'Ordre', 'type' => 'number'],
        ];
    }
}
