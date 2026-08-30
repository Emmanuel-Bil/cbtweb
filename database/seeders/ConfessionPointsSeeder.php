<?php

namespace Database\Seeders;

use App\Models\ConfessionPoint;
use Illuminate\Database\Seeder;

class ConfessionPointsSeeder extends Seeder
{
    public function run(): void
    {
        $points = [
            [1, "La Bible, composée des soixante-six (66) livres canoniques, est tout entière inspirée de Dieu et constitue la révélation écrite, complète de Dieu à l'homme. Nous reconnaissons donc et affirmons l'infaillibilité de la Bible, son inerrance et son autorité. Elle est la seule autorité en matière de foi et de pratique.", "Ex 24.4 ; Dt 4.1-2 ; 17.19 ; 18.18 ; Mt 5.17-18 ; Jn 5.39, 46 ; Rom 1.2; 3.2 ; 2Tim 3.15-17; Hé 1.1-2; 1P 1.19-21; Ap 22.18"],
            [2, "Dieu est un et éternel, Il est le créateur de l'univers, révélé en trois personnes : Père, Fils et Saint Esprit. Il est souverain, parfait en sagesse, sainteté et puissance.", "Gn 1.1, 26 ; Ex 15.11; Dt 4.39 ; 1S 6.20 ; Ps 65.7; 99.9; 115.3; 139.8 ; Ch 29.12 ; Jb 42.2 ; Es 6.3; Rm 16.25 ; Mt 28-19-20; 19.26 ; Jn 1.1ss ; 10.30 ; 16.13-15, 30; Ac 1.24; Ap 15.4."],
            [3, "Dieu entend nos prières ; Il sauve du péché, du jugement et de la condamnation ceux qui viennent à lui par la foi en Jésus-Christ.", "Ps 17.6 ; 50.15 ; Ph 4.6 ; Jn 3.16-18 ; Rm 3.2324 ; Ep 2.8-9."],
            [4, "Jésus-Christ, le Fils unique de Dieu, préexistant, conçu du Saint Esprit, né d'une vierge, a vécu sur la terre sans commettre de péché et il s'est donné sur la croix pour l'expiation des péchés des hommes.", "Es 7.14 ; Lc 1.34-35 ; Jn 1.3, 14, 29 ; Mt 20.28 ; 2Co 5.21 ; Gal 3.13 ; Phil 2.6-7 ; Col 1.16-17."],
            [5, "Jésus-Christ, ressuscité d'entre les morts, est le seul médiateur entre Dieu et les hommes et intercède pour son Eglise.", "Mc 10.45 ; Jn 17 ; 1Tm 2.4 ; 1Pi 1.18-19 ; Rm 8.34."],
            [6, "Jésus-Christ reviendra visiblement pour établir son parfait royaume.", "Mt 16.27 ; 24.30, 37 ; Jn 14.1-3 ; Col 3.4 ; 1Th 4.1 ; 2Tm 4.11 ; 1Pi 5.7 ; Ap 19.7-16."],
            [7, "Le Saint-Esprit est Dieu et la troisième personne de la trinité. Il est un avec le Père et le Fils. Son œuvre est de convaincre les hommes de péché, de justice et de jugement pour les régénérer. Il habite chaque chrétien dès sa conversion, le sanctifie, l'enseigne, l'encourage, l'équipe et le garde en Jésus Christ.", "Jn 14.15-26 ; 15.26 ; 16.7-11 ; 1Co 1.11 ; 2.10 ; 3.17 ; Gn 1.2 ; Jb 26.13 ; 33.4 ; Ps 3.6 ; 104.30 ; Es 40.7."],
            [8, "Tous les hommes sont par nature et choix pécheurs.", "Gn 2.15-17 ; 3.6-13 ; Ps 14.1-3 ; Rm 5.12-21 ; 1Co 15.21-22."],
            [9, "Tout être humain est responsable devant Dieu en ce qui concerne les questions relatives à la foi. Ceux qui se repentent de leur péché et qui acceptent l'œuvre expiatoire de Jésus-Christ et qui s'unissent à lui par la foi sont sauvés. Cette union produit la justification. Celui qui rejette Jésus-Christ sera jugé et séparé éternellement de Dieu. Celui qui croit en Lui reçoit la vie et demeurera éternellement dans l'allégresse divine.", "Jn 1.12 ; 3.16-19 ; Rm 10.9-10 ; 1Tm 2.4 ; 2Pi 3.9 ; 1Jn 5.9-13."],
            [10, "La vraie foi se manifeste dans les hommes par des bonnes œuvres.", "Dt 6.24 ; Jo 1.7-9 ; Néh 10.29 ; Jc 1.21-27 ; 2.12-22."],
            [11, "L'Eglise est un corps spirituel et vivant dont Christ Lui-même est la tête.", "Mt 16.16-18 ; Rm 12.5 ; 1Co 12.13 ; Ep 1.22-23 ; 5.23,25 ; Col 1.18."],
            [12, "Une Eglise locale, selon la parole de Dieu, est une assemblée de croyants régénérés, baptisés et qui s'unissent pour l'adoration, le service et la communion fraternelle.", "Ac 8.1 ; 20.17 ; Rm 16.1 ; Col 4.16 ; Ap 1.4."],
            [13, "Jésus-Christ a recommandé à l'Eglise la pratique de deux ordonnances : le baptême et la sainte cène.", "Mt 28.19 ; Lc 22.10, 20 ; 1Co 11.22."],
            [14, "Tout chrétien doit promouvoir la paix avec tous les hommes sur les principes de la justice conformément à l'Evangile de notre Seigneur Jésus-Christ.", "Ps 85.10 ; 120.7 ; 122.7 ; Prov 12.20 ; Mt 5.9 ; Rm 12.18 ; 14.19 ; 1Co 14.33 ; Jc 3.18."],
            [15, "L'Eglise et l'Etat doivent être séparés. L'Etat doit à toute église la protection et la pleine liberté dans la poursuite de son but et ses objectifs. Le gouvernement civil étant ordonné de la part de Dieu, il est du devoir des chrétiens de lui obéir en toutes choses ne s'opposant pas à la volonté révélée de Dieu. Une église libre dans un état libre est l'idéal chrétien.", "Dan 3.15-21, 28-30 ; Lc 20.21-25 ; Ac 4.14-21 ; 1Tm 2.1-4."],
            [16, "Satan est un ange déchu dont le dessein est de contrecarrer le plan de Dieu et sa fin sera la condamnation ou châtiment éternel.", "Es 14.11-15 ; Ez 28.12-17 ; Mt 4.1-11 ; 13.25, 39 ; Rm 16.20 ; 1Pi 5.8 ; Ap 12.9 ; 20.2."],
        ];

        foreach ($points as [$order, $content, $references]) {
            ConfessionPoint::updateOrCreate(['order' => $order], [
                'content' => $content,
                'references' => $references,
            ]);
        }
    }
}
