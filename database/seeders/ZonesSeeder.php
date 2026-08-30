<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Seeder;

class ZonesSeeder extends Seeder
{
    public function run(): void
    {
        $zones = [
            ['AGAPE', 'Rév. AKPAGLI Marcelin', '90 35 41 34'],
            ['BETHEL', 'Rév. APEMEKOU Emmanuel', '91 98 63 19'],
            ['ZION', 'Rév. FINOU Joseph', '92 51 37 07'],
            ['VICTOIRE', 'Past. ATTISSO Robert', '90 32 62 13'],
            ['VERITE', 'Rév. MAWUSSI Emmanuel', '90 19 89 74'],
            ['VIE', 'Rév. KOMAGBE Agbo', '92 90 02 23'],
            ['SOLUTION', 'Rév. AGBO Kossi', '92 52 82 02'],
            ['PAIX', 'Rév. AYEFOUNE Béni Esdras', '90 72 42 77'],
            ['HERITIERS DE LA GRACE', 'Rév. ATAKPAH Koffide', '90 73 89 01'],
            ['YEESU NI ONA', 'Rév. ODJOBO Komlan', '70 27 84 53'],
            ['CHRIST-ROI', 'Past. PILABA Dikati', '91 73 85 04'],
            ["DIEU D'ABORD", 'Rév. ODJO Babatoundé', '91 26 56 31'],
            ['ROC', 'Past. TIDEMA Bikalabou', '90 74 42 81'],
            ['BONNE NOUVELLE', 'Rév. NEMBA Koamkahoga', '91 93 09 47'],
            ['GRACE DE DIEU', 'Rév. TOUGOUR Emmanuel', '91 17 48 41'],
            ['FLEUVE DE VIE', 'Past. ANATOR Yawo Sédoh', '90 31 92 65'],
            ['LA MOISSON', 'Past. KPADJIBA Tognon', '92 51 10 16'],
        ];

        foreach ($zones as $i => [$name, $moderator, $phone]) {
            Zone::updateOrCreate(['name' => $name], [
                'moderator_name' => $moderator,
                'moderator_phone' => $phone,
                'order' => $i + 1,
            ]);
        }
    }
}
