<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    public function run(): void
    {
        $activities = [
            ['Formations Bibliques', "Sessions d'enseignement pour approfondir la parole de Dieu.", '📖', 'seed/formation-biblique.jpeg'],
            ['Actions Sociales', 'Soutien aux familles et projets humanitaires.', '🤝', 'seed/action-sociale.jpeg'],
            ['Événements Spirituels', 'Conférences, cultes spéciaux et rassemblements.', '🙏', 'seed/eve-spirituel.jpeg'],
        ];

        foreach ($activities as $i => [$title, $description, $icon, $image]) {
            Activity::updateOrCreate(['title' => $title], [
                'description' => $description,
                'icon' => $icon,
                'image' => $image,
                'order' => $i + 1,
            ]);
        }
    }
}
