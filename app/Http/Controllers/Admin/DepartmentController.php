<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\Department;

class DepartmentController extends ResourceController
{
    protected string $model = Department::class;
    protected string $routePrefix = 'admin.departments';
    protected string $title = 'département';
    protected string $orderColumn = 'order';
    protected string $orderDirection = 'asc';

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Nom du département', 'type' => 'text', 'required' => true],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea'],
            ['name' => 'order', 'label' => 'Ordre', 'type' => 'number'],
        ];
    }
}
