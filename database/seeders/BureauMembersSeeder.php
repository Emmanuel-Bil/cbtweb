<?php

namespace Database\Seeders;

use App\Models\BureauMember;
use Illuminate\Database\Seeder;

class BureauMembersSeeder extends Seeder
{
    public function run(): void
    {
        $bureau = [
            ['RÉV. AYADOME KOKOU ELIE', 'Président National de la CBT', '90 86 03 00 / 98 71 42 42', 'seed/org/bureau-1-ayadome.jpeg'],
            ['Rév. COMAR CODJIA Kokou', 'Vice Président', '90 10 40 20 / 99 83 15 68', 'seed/org/bureau-2-comar-codjia.jpeg'],
            ['Rév. FINOU Kossi Joseph', 'Secrétaire Administratif', '92 51 37 07', 'seed/org/bureau-3-finou.jpeg'],
            ['Diacre OLOYEDE Sunday O.', 'Trésorier Général', '90 29 12 14', 'seed/org/bureau-4-oloyede.jpeg'],
            ['PALI Pigassani Jules', 'Trésorier Adjoint', '91 26 80 52', 'seed/org/bureau-5-pali.jpeg'],
            ['Pasteur LOKO Kodjo Paul', 'Secrétaire Administratif Adjoint', '97 49 34 73', 'seed/org/bureau-6-loko.jpeg'],
            ['Rév. AMEDJIKPO Kouami Charles', 'Directeur DMEFT-CBT', '90 21 81 32', 'seed/org/bureau-7-amedjikpo.jpeg'],
        ];

        foreach ($bureau as $i => [$name, $title, $phone, $photo]) {
            BureauMember::updateOrCreate(['category' => 'bureau', 'name' => $name], [
                'title' => $title,
                'phone' => $phone,
                'photo' => $photo,
                'order' => $i + 1,
            ]);
        }

        $directors = [
            ['Past. SANVI Komlan Jacques', "Directeur de l'UMH", '90 77 64 87', 'seed/org/dir-1-sanvi.jpeg'],
            ['EGOU Abra épse AMEDJIKPO', "Directrice de l'UMF", '90 38 84 50', 'seed/org/dir-2-egou.jpeg'],
            ['Rév. DABLA Yao Amétépé', 'Directeur de la JCBT', '90 35 47 93', 'seed/org/dir-3-dabla.jpeg'],
            ['KODJO Kafui Louange épse AYADOME', 'Directrice Développement des Enfants', '93 01 36 86', 'seed/org/dir-4-kodjo.jpeg'],
            ['Rév. SENOU Yawo', 'Directeur Mission-Evangélisation', '97 42 68 86', 'seed/org/dir-5-senou.jpeg'],
            ['ASSIDJAH Abalo Oscar', 'Directeur des Projets', '91 27 27 52', 'seed/org/dir-6-assidjah.jpeg'],
            ['Rév. TCHALARE', "Directeur de l'IBBT", '93 85 09 85', 'seed/org/dir-7-tchalare.jpeg'],
        ];

        foreach ($directors as $i => [$name, $title, $phone, $photo]) {
            BureauMember::updateOrCreate(['category' => 'department_director', 'name' => $name], [
                'title' => $title,
                'phone' => $phone,
                'photo' => $photo,
                'order' => $i + 1,
            ]);
        }

        $zoneModerators = [
            ['Pasteur AFATSAO Kodjo David', 'Vice Modérateur de la Zone Agapé', '90 89 30 66', 'seed/zones/zm-01-afatsao.jpeg'],
            ['Rév APEMEKOU Komivi', 'Modérateur de la Zone Béthel', '91 98 63 19', 'seed/zones/zm-02-apemekou.jpeg'],
            ['Rév. MAYIKOU Koffi Emmanuel', 'Modérateur de la Zone Zion', '90 74 99 65 / 97 67 72 00', 'seed/zones/zm-03-mayikou.jpeg'],
            ['Rév. ATITSO Kodzo Robert', 'Modérateur de la Zone Jésus la Victoire', '90 32 62 13', 'seed/zones/zm-04-atitso.jpeg'],
            ['Rév. AROUKA Mawussi', 'Modérateur de la Zone Jésus la Vérité', '90 19 89 74', 'seed/zones/zm-05-arouka.jpeg'],
            ['Rév. KOMAGBE Hougbedji Agbo', 'Modérateur de la Zone Jésus la Vie', '92 90 02 23', 'seed/zones/zm-06-komagbe.jpeg'],
            ['Rév. AGBO Kossi', 'Modérateur de la Zone Jésus la Solution', '92 52 82 02', 'seed/zones/zm-07-agbo.jpeg'],
            ['Rév. AYEFOUINE Béni Esdras', 'Modérateur de la Zone Jésus la Paix', '90 72 42 77', 'seed/zones/zm-08-ayefouine.jpeg'],
            ['Rév. ATAKPAH Koffidé', 'Modérateur de la Zone Héritier de la Grâce', '90 73 89 01', 'seed/zones/zm-09-atakpah.jpeg'],
            ['Past. ODJOBO Komlan', 'Modérateur de la Zone Yeesu Ni Ona', '70 27 84 53', 'seed/zones/zm-10-odjobo.jpeg'],
            ['Past. PILABA Dikati', 'Modérateur de la Zone Christ Roi', '91 76 85 04', 'seed/zones/zm-11-pilaba.jpeg'],
            ["Past. ODJO Babatoundé", "Modérateur de la Zone Dieu d'Abord", '91 26 56 31', 'seed/zones/zm-12-odjo.jpeg'],
            ['Past. TIDEMA Bikalabou', 'Modérateur de la Zone Jésus le Roc', '90 74 42 81', 'seed/zones/zm-13-tidema.jpeg'],
            ['Rév. NEMBA Koamkahoga', 'Modérateur de la Zone Bonne Nouvelle', '91 83 09 47', 'seed/zones/zm-14-nemba.jpeg'],
            ['Rév. TOUGOUR Emmanuel', 'Modérateur de la Zone Grâce de Dieu', '91 17 48 41', 'seed/zones/zm-15-tougour.jpeg'],
            ['Past. ANATOR Yawo Sédoh', 'Modérateur de la Zone Fleuve de Vie', '90 31 92 65', 'seed/zones/zm-16-anator.jpeg'],
            ['Rév. KPADJIBA Tognon', 'Modérateur de la Zone Moisson', '92 51 10 16', 'seed/zones/zm-17-kpadjiba.jpeg'],
        ];

        foreach ($zoneModerators as $i => [$name, $title, $phone, $photo]) {
            BureauMember::updateOrCreate(['category' => 'zone_moderator', 'name' => $name], [
                'title' => $title,
                'phone' => $phone,
                'photo' => $photo,
                'order' => $i + 1,
            ]);
        }
    }
}
