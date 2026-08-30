<?php

namespace Database\Seeders;

use App\Models\Church;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\LibraryItem;
use App\Models\News;
use App\Models\SocialWork;
use App\Models\Zone;
use Illuminate\Database\Seeder;

/**
 * Starter content for sections that are still empty on the live site
 * (actualités, événements, galerie, œuvres, bibliothèque, annuaire/carte).
 * The client fills these in for real via the admin panel.
 */
class DemoContentSeeder extends Seeder
{
    public function run(): void
    {
        $news = News::updateOrCreate(['slug' => 'assemblee-generale-2026'], [
            'title' => 'Assemblée Générale 2026',
            'excerpt' => "La 37ème Assemblée Générale de la CBT se tiendra le 16 mars 2026 autour du thème « Femmes vertueuses, la force de la jeunesse ».",
            'content' => "La Convention Baptiste du Togo tiendra sa 37ème Assemblée Générale le 16 mars 2026, précédée d'un dimanche de prière le 15 mars. Cette rencontre annuelle rassemblera les délégués des 17 zones ecclésiastiques autour des grands chantiers de la Convention : développement institutionnel, mission et évangélisation, œuvres sociales, et promotion de la justice et de la paix.\n\nDe plus amples informations seront communiquées par les modérateurs de zone dans les prochaines semaines.",
            'image' => 'seed/ag-2026.jpeg',
            'published_at' => now(),
            'is_featured' => true,
        ]);

        Event::updateOrCreate(['title' => 'Assemblée Générale 2026'], [
            'description' => "37ème Assemblée Générale de la Convention Baptiste du Togo.",
            'starts_at' => '2026-03-16 09:00:00',
            'location' => 'Lomé',
            'is_featured' => true,
        ]);

        Event::updateOrCreate(['title' => 'Comité Exécutif'], [
            'description' => 'Session du Comité Exécutif national de la CBT.',
            'starts_at' => '2026-02-23 09:00:00',
            'ends_at' => '2026-02-27 17:00:00',
            'location' => 'Lomé',
        ]);

        $albums = ['Culte du dimanche', 'Assemblée générale', 'Baptême', 'Conférence mission', 'Jeunesse CBT'];
        foreach ($albums as $i => $title) {
            Gallery::updateOrCreate(['title' => $title], ['order' => $i + 1]);
        }

        SocialWork::updateOrCreate(['title' => 'Éducation et formation professionnelle'], [
            'description' => 'Programmes de formation professionnelle et de soutien scolaire portés par les églises locales.',
            'category' => 'Éducation',
            'order' => 1,
        ]);
        SocialWork::updateOrCreate(['title' => 'Santé communautaire'], [
            'description' => 'Actions de sensibilisation et de promotion de la santé dans les communautés.',
            'category' => 'Santé',
            'order' => 2,
        ]);
        SocialWork::updateOrCreate(['title' => 'Agriculture durable'], [
            'description' => "Accompagnement des familles vers des pratiques agricoles durables et respectueuses de l'environnement.",
            'category' => 'Environnement',
            'order' => 3,
        ]);

        LibraryItem::updateOrCreate(['title' => 'Constitution de la CBT'], [
            'description' => 'Texte fondateur de la Convention Baptiste du Togo (1988).',
            'category' => 'Documents officiels',
        ]);

        // Zone-capital churches with real Togo coordinates, as a starting
        // point for the interactive map — the client completes the
        // directory (629 churches) progressively via the admin panel.
        $zoneChurches = [
            ['Église Baptiste du Boulevard', 'AGAPE', 'Maritime', 'Lomé', 6.1319, 1.2228],
            ['Église Baptiste Bethel', 'BETHEL', 'Maritime', 'Lomé', 6.1725, 1.2318],
            ['Église Baptiste Zion', 'ZION', 'Maritime', 'Tsévié', 6.4167, 1.2167],
            ['Église Baptiste Jésus la Victoire', 'VICTOIRE', 'Plateaux', 'Kpalimé', 6.9000, 0.6333],
            ['Église Baptiste Jésus la Vérité', 'VERITE', 'Plateaux', 'Atakpamé', 7.5333, 1.1333],
            ['Église Baptiste Jésus la Vie', 'VIE', 'Centrale', 'Sokodé', 8.9833, 1.1333],
            ['Église Baptiste Bonne Nouvelle', 'BONNE NOUVELLE', 'Kara', 'Kara', 9.5511, 1.1861],
            ['Église Baptiste la Moisson', 'LA MOISSON', 'Savanes', 'Dapaong', 10.8632, 0.2058],
        ];

        foreach ($zoneChurches as [$name, $zoneName, $region, $city, $lat, $lng]) {
            $zone = Zone::where('name', $zoneName)->first();

            Church::updateOrCreate(['name' => $name], [
                'zone_id' => $zone?->id,
                'region' => $region,
                'city' => $city,
                'lat' => $lat,
                'lng' => $lng,
            ]);
        }
    }
}
