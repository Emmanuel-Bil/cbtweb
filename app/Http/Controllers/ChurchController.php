<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\Zone;

class ChurchController extends Controller
{
    public function map()
    {
        $churches = Church::whereNotNull('lat')->whereNotNull('lng')->with('zone')->get();

        $churchesJson = $churches->map(fn ($c) => [
            'name' => $c->name,
            'lat' => $c->lat,
            'lng' => $c->lng,
            'zone' => $c->zone?->name,
            'city' => $c->city,
            'pastor' => $c->pastor_name,
        ])->toJson();

        return view('churches.map', compact('churches', 'churchesJson'));
    }

    public function directory()
    {
        $churches = Church::with('zone')->orderBy('region')->orderBy('name')->get()->groupBy(fn ($c) => $c->region ?? 'Autres');

        return view('churches.directory', compact('churches'));
    }

    public function zones()
    {
        $zones = Zone::withCount('churches')->orderBy('order')->get();

        return view('churches.zones', compact('zones'));
    }
}
