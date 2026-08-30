<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\HistoryEvent;

class HistoryEventController extends ResourceController
{
    protected string $model = HistoryEvent::class;
    protected string $routePrefix = 'admin.history-events';
    protected string $title = 'étape de l\'historique';
    protected string $orderColumn = 'order';
    protected string $orderDirection = 'asc';

    protected function fields(): array
    {
        return [
            ['name' => 'order', 'label' => 'Numéro', 'type' => 'number', 'required' => true],
            ['name' => 'period', 'label' => 'Période (ex: 1957 – 1959)', 'type' => 'text'],
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'content', 'label' => 'Contenu', 'type' => 'textarea', 'required' => true],
        ];
    }
}
