<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            "Département des Ministres de l'Evangile et de la Formation Théologique",
            'Département du Développement des Eglises',
            'Département de Mission-Evangélisation',
            "Département de l'Union Missionnaire des Hommes",
            "Département de l'Union Missionnaire des Femmes",
            'Département de la Jeunesse, du Sport et des Loisirs',
            'Département du Développement des Enfants',
            'Département des Projets et des Ecoles',
        ];

        foreach ($departments as $i => $name) {
            Department::updateOrCreate(['name' => $name], ['order' => $i + 1]);
        }
    }
}
