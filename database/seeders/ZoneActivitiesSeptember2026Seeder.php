<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Zone;
use Illuminate\Database\Seeder;

/**
 * Activités du calendrier général de la CBT pour septembre 2026
 * (Bureau Exécutif, JCBT et zones).
 */
class ZoneActivitiesSeptember2026Seeder extends Seeder
{
    public function run(): void
    {
        $heritiers = Zone::where('name', 'HERITIERS DE LA GRACE')->first();
        $moisson = Zone::where('name', 'LA MOISSON')->first();
        $yeesu = Zone::where('name', 'YEESU NI ONA')->first();
        $agape = Zone::where('name', 'AGAPE')->first();
        $fleuveDeVie = Zone::where('name', 'FLEUVE DE VIE')->first();
        $vie = Zone::where('name', 'VIE')->first();

        $events = [
            // Bureau Exécutif de la CBT
            [null, "Rencontre avec le Comité de l'EB La Délivrance", "Rencontre du Bureau Exécutif de la CBT avec le comité de l'Église Baptiste La Délivrance.", '2026-09-08', null, 'Siège de la CBT'],
            [null, 'Réunion du BE de la CBT', "Réunion du Bureau Exécutif de la CBT.", '2026-09-17', null, 'Siège de la CBT'],
            [null, 'Mission à Dankpen', "Mission du Bureau Exécutif de la CBT à Dankpen.", '2026-09-19', '2026-09-24', 'Dankpen'],
            [null, 'Formation de 50 Leaders de la CBT', "Formation de 50 leaders organisée par le Bureau Exécutif de la CBT.", '2026-09-21', '2026-09-24', 'Sokodé'],

            // JCBT
            [null, 'Semaine nationale de la jeunesse', "Semaine nationale de la jeunesse organisée par la JCBT dans toutes les églises de la CBT.", '2026-08-31', '2026-09-06', 'Toutes les églises de la CBT'],

            [$heritiers, 'Rencontre des pasteurs et intercesseurs', "Rencontre de tous les pasteurs et intercesseurs de chaque église au centre de prière à Konadabo.", '2026-09-01', '2026-09-02', 'Konadabo'],
            [$heritiers, "Restitution du séminaire sur le traumatisme", "Rencontre de tous les pasteurs et dirigeants d'églises pour la restitution du séminaire sur le traumatisme.", '2026-09-11', '2026-09-12', 'Kokolo'],
            [$heritiers, 'Clôture du terrain des vergers', "Rencontre de tous les délégués des églises au site de Konadabo pour clôturer le terrain des vergers (manguiers et orangers).", '2026-09-17', '2026-09-30', 'Konadabo'],
            [$heritiers, 'Rencontre du comité de l\'UMH', "Rencontre du comité de l'Union Missionnaire des Hommes (UMH).", '2026-09-20', null, 'Kokolo'],
            [$heritiers, 'Bureau Exécutif — Stratégie et budget 2027', "Rencontre du Bureau Exécutif pour la stratégie et le budget de l'année 2027.", '2026-09-24', null, 'Kokolo'],

            [$moisson, 'Rencontre des pasteurs et dirigeants', "Rencontre avec les pasteurs et dirigeants des églises pour prier et discuter des défis rencontrés et des stratégies pour les relever.", '2026-09-06', null, 'Église Baptiste de Kloukpon'],

            [$yeesu, 'Retraite des enfants', "Retraite des enfants de la zone Yéèsù Ni Ona.", '2026-09-04', '2026-09-05', null],
            [$yeesu, 'Journée d\'orientation et de prière pour les élèves', "Journée d'orientation et de prière en faveur des élèves.", '2026-09-10', null, null],

            [$agape, 'Gala de football', "Gala de football organisé par la zone Agapé.", '2026-09-19', null, null],

            [$fleuveDeVie, 'Rencontre des Pasteurs', "Rencontre des pasteurs de la zone Fleuve de Vie.", '2026-09-07', null, 'Améléomé-Kopé'],

            [$vie, 'Retraite des Pasteurs', "Retraite des pasteurs de la zone Vie.", '2026-09-02', '2026-09-05', 'Ountivou'],
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
