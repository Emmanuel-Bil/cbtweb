<?php

namespace Database\Seeders;

use App\Models\KeyDate;
use Illuminate\Database\Seeder;

class KeyDatesSeeder extends Seeder
{
    public function run(): void
    {
        $dates = [
            ['Octobre', 'Mois de soutien aux ministères : ABT, Wycliffe, CPC'],
            ['Novembre', "Mois de soutien aux Ministres de l'Évangile"],
            ['1er Novembre', 'Journée Nationale des œuvres sociales'],
            ['25 Janv', 'Dimanche de la formation théologique'],
            ['23-27 Fév', 'Comité Exécutif'],
            ['15 Mars', "Dimanche de l'AG & Prière pour la CBT"],
            ['16 Mars', 'Assemblée Générale'],
            ['5 Avril', 'Dimanche de Pâque'],
            ['24 Mai', 'Dimanche de Pentecôte'],
            ['Juin', 'Mois de la Mission'],
            ['6-10 Juillet', 'Pastorale'],
            ['Août', 'Mois Enfant CBT'],
        ];

        foreach ($dates as $i => [$label, $description]) {
            KeyDate::updateOrCreate(['year' => 2026, 'label' => $label], [
                'description' => $description,
                'order' => $i + 1,
            ]);
        }
    }
}
