<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'address' => '657 Bd de la Kara, Tokoin Doumasséssé — 08 B.P. 80754 Lomé',
            'phones' => '(+228) 22 20 85 56 / 22 21 95 26 — (+228) 91 12 72 92 / 97 68 40 25',
            'emails' => 'convention.togo@gmail.com — cbtogo2@yahoo.fr',
            'website' => 'www.conventionbaptistetogo.org',
            'stat_1_value' => '20+',
            'stat_1_label' => 'Années d\'impact',
            'stat_2_value' => '5 000+',
            'stat_2_label' => 'Membres accompagnés',
            'stat_3_value' => '150+',
            'stat_3_label' => 'Événements organisés',
            'stat_4_value' => '12+',
            'stat_4_label' => 'Programmes actifs',
            'footer_tagline' => 'Organisation chrétienne engagée dans l\'évangélisation, l\'éducation spirituelle et les œuvres sociales.',
            'don_moov_number' => '90 00 00 00',
            'don_mixx_number' => '92 00 00 00',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }
    }
}
