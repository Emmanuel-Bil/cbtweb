<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Zone;
use Illuminate\Database\Seeder;

/**
 * Activités communiquées par les zones pour septembre 2026.
 */
class ZoneActivitiesSeptember2026Seeder extends Seeder
{
    public function run(): void
    {
        $heritiers = Zone::where('name', 'HERITIERS DE LA GRACE')->first();
        $moisson = Zone::where('name', 'LA MOISSON')->first();
        $yeesu = Zone::where('name', 'YEESU NI ONA')->first();

        $events = [
            [$heritiers, 'Rencontre des pasteurs et intercesseurs', "Rencontre de tous les pasteurs et intercesseurs de chaque église au centre de prière à Konadabo.", '2026-09-01', '2026-09-02', 'Konadabo'],
            [$heritiers, "Restitution du séminaire sur le traumatisme", "Rencontre de tous les pasteurs et dirigeants d'églises pour la restitution du séminaire sur le traumatisme.", '2026-09-11', '2026-09-12', 'Kokolo'],
            [$heritiers, 'Clôture du terrain des vergers', "Rencontre de tous les délégués des églises au site de Konadabo pour clôturer le terrain des vergers (manguiers et orangers).", '2026-09-17', '2026-09-30', 'Konadabo'],
            [$heritiers, 'Rencontre du comité de l\'UMH', "Rencontre du comité de l'Union Missionnaire des Hommes (UMH).", '2026-09-20', null, 'Kokolo'],
            [$heritiers, 'Bureau Exécutif — Stratégie et budget 2027', "Rencontre du Bureau Exécutif pour la stratégie et le budget de l'année 2027.", '2026-09-24', null, 'Kokolo'],

            [$moisson, 'Rencontre des pasteurs et dirigeants', "Rencontre avec les pasteurs et dirigeants des églises pour prier et discuter des défis rencontrés et des stratégies pour les relever.", '2026-09-06', null, 'Église Baptiste de Kloukpon'],

            [$yeesu, 'Retraite des enfants', "Retraite des enfants de la zone Yéèsù Ni Ona.", '2026-09-04', '2026-09-05', null],
            [$yeesu, 'Journée d\'orientation et de prière pour les élèves', "Journée d'orientation et de prière en faveur des élèves.", '2026-09-10', null, null],
        ];

        foreach ($events as [$zone, $title, $description, $start, $end, $location]) {
            Event::updateOrCreate(
                ['zone_id' => $zone?->id, 'title' => $title, 'starts_at' => $start],
                [
                    'description' => $description,
                    'ends_at' => $end,
                    'location' => $location,
                ]
            );
        }
    }
}
