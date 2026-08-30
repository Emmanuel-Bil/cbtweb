<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected array $keys = [
        'address' => 'Adresse',
        'phones' => 'Téléphones (séparés par une virgule)',
        'emails' => 'Emails (séparés par une virgule)',
        'website' => 'Site web',
        'stat_1_value' => 'Statistique 1 - valeur',
        'stat_1_label' => 'Statistique 1 - libellé',
        'stat_2_value' => 'Statistique 2 - valeur',
        'stat_2_label' => 'Statistique 2 - libellé',
        'stat_3_value' => 'Statistique 3 - valeur',
        'stat_3_label' => 'Statistique 3 - libellé',
        'stat_4_value' => 'Statistique 4 - valeur',
        'stat_4_label' => 'Statistique 4 - libellé',
        'footer_tagline' => 'Tagline du footer',
        'don_moov_number' => 'Numéro Moov Money',
        'don_mixx_number' => 'Numéro Mixx by Yas',
    ];

    public function edit()
    {
        $settings = Setting::pluck('value', 'key');

        return view('admin.settings.edit', ['settings' => $settings, 'keys' => $this->keys]);
    }

    public function update(Request $request)
    {
        foreach (array_keys($this->keys) as $key) {
            Setting::set($key, $request->input($key));
        }

        return redirect()->route('admin.settings.edit')->with('status', 'Réglages mis à jour avec succès.');
    }
}
