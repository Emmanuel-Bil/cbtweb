<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::updateOrCreate(['slug' => 'accueil'], [
            'title' => 'Notre Mission',
            'subtitle' => null,
            'body' => "La CBT œuvre pour l'édification spirituelle, le soutien social et le développement communautaire. Nous croyons qu'une foi vivante transforme les individus et les nations.\n\nÀ travers nos programmes, formations et événements, nous accompagnons chaque membre dans sa croissance personnelle et spirituelle.",
        ]);

        Page::updateOrCreate(['slug' => 'mot-president'], [
            'title' => 'Rev Kokou AYADOME',
            'subtitle' => 'Président de la CBT',
            'image' => 'seed/president.jpeg',
            'body' => <<<'TEXT'
Chers visiteurs,

C'est avec un immense plaisir et profond amour fraternel que je vous souhaite la bienvenue sur notre site.

Notre organisation, la Convention Baptiste du Togo, est le fruit de la prière fervente et multiples sacrifices de grands hommes et femmes de foi ayant pour seule préoccupation l'obéissance au Seigneur Jésus, laquelle obéissance consiste à assumer le grand mandat, la grande commission et le grand commandement, pour le salut des peuples du Togo. En 1964, la International Mission Board de la Southern Baptists arrivait au Togo sur invitation de quelques chrétiens baptistes nigérians qui y vivaient déjà depuis plusieurs années.

Les églises implantées se sont d'abord regroupées en « Association des Eglises Baptistes du Togo » (AEBT), qui était officiellement reconnue le 12 Novembre 1964, conformément à la loi associative 040-484 du 1er juillet 1901, sous le N°2002/INT. Le 26 Octobre 1989, l'AEBT devenait la Convention Baptiste du Togo (CBT), une association religieuse, à but non lucratif et apolitique avec son siège à Lomé.

Par d'intenses activités des églises locales et des missionnaires, la CBT compte aujourd'hui 629 églises locales, avec des tailles disproportionnelles, lorsqu'on va des milieux urbains à ceux ruraux. Ces églises sont réparties en 17 régions ecclésiastiques appelées Zones. La CBT est dirigée par un Bureau Exécutif composé de sept (07) membres. Elle a huit départements nationaux actuellement opérationnels, administrés par des femmes et hommes qualifiés et entièrement dévoués au service du Seigneur Jésus.

La CBT reste attachée à son engagement de départ : « Gagner les peuples pour Christ et perfectionner les saints », Ephésiens 4.12. Ainsi, notre vision est d'étendre le royaume de Dieu sur terre et procurer l'encadrement nécessaire à l'épanouissement à tous égards de nos membres pour amener à la plénitude de la vie totale, l'homme accompli dans l'amour, la paix et la pratique des valeurs chrétiennes, par notre façon d'être et de faire, pour être une église missionnaire de Jésus. Pour résumer notre mission, nous réaffirmons que la CBT a pour mandat d'atteindre tout l'être humain par la proclamation de tout l'Évangile de Jésus-Christ. La CBT se veut l'agent du Grand Mandat (Gen 2.15), de la Grande Commission (Mat 28.18-20 ; Eph 4.11-16) et du Grand Commandement (Mat 22.37-40). La CBT existe pour glorifier Jésus, l'adorer et le servir jusqu'à son retour.

Pour ce faire, les églises de la CBT et leurs partenaires articulent leur plan d'action sur quatre axes principaux : le développement institutionnel, la mission et l'évangélisation, les œuvres sociales, puis la défense et la promotion des droits humains (justice et paix).

Nous nous engageons au renforcement des capacités institutionnelles, organisationnelles et opérationnelles pour une institution forte avec une administration efficace et durable. Notre ADN est la Mission et l'Evangélisation. C'est pourquoi nous sommes déterminés à redynamiser notre département de Mission-Evangélisation, à mobiliser des ressources et ouvrir plus de champs missionnaires, à défier les églises locales à plus d'implantation d'églises, à se préparer pour la mission extérieure et efficace. Cela est possible par le témoignage de la parole, par la prière et par le culte, et le témoignage de l'amour de Dieu pour sa création. La promotion des études bibliques, les formations des ministres de l'Evangile, la redynamisation des programmes de groupes d'action, et la mobilisation des ressources sont nécessaires. Comme le dit la déclaration de Lausanne, « L'évangélisation et l'action sociale sont des frères [jumeaux] et l'amour est leur mère », notre axe social se résume dans l'éducation et la formation professionnelle, la promotion de la santé communautaire, l'agriculture durable et la protection de l'environnement ; c'est tout ce que nous désignons par la mission intégrale. Dieu veut que nous prenions soin de l'âme pour Son royaume et aussi du corps pour le bien-être ici-bas. Le dernier objectif de la CBT se focalise sur le modèle de Jésus comme de la Loi et des Prophètes : « la paix est l'œuvre de la justice » (Es 32.17).

En conséquence, j'invite tous les frères et sœurs baptistes dans la foi, les partenaires de la CBT à l'amour inébranlable pour le Seigneur et son œuvre. La moisson est toujours grande, et nous devons nous réveiller pour planifier, prier, mobiliser les ressources humaines et financières partout où elles se trouvent afin d'accomplir la tâche avec beaucoup plus de célérité et de dynamisme missionnaire. Prions aussi que Dieu ouvre notre esprit pour faire son œuvre.

Ensemble, nous pouvons aller plus vite et plus loin.

Rev Kokou AYADOME
Président de la CBT
TEXT,
        ]);

        Page::updateOrCreate(['slug' => 'mission-valeurs'], [
            'title' => 'Mission et Valeurs',
            'subtitle' => null,
            'body' => "Notre mission : gagner les peuples pour Christ et perfectionner les saints (Éphésiens 4.12).\n\nNotre vision est d'étendre le royaume de Dieu sur terre et de procurer l'encadrement nécessaire à l'épanouissement de nos membres, dans l'amour, la paix et la pratique des valeurs chrétiennes.\n\nNos valeurs s'articulent autour de quatre axes : le développement institutionnel, la mission et l'évangélisation, les œuvres sociales, ainsi que la défense et la promotion des droits humains (justice et paix).",
        ]);

        Page::updateOrCreate(['slug' => 'don'], [
            'title' => 'Soutenez notre mission',
            'subtitle' => null,
            'image' => 'seed/missions.jpeg',
            'body' => "Vos dons nous aident à soutenir les églises, les programmes sociaux et les activités de la CBT.",
        ]);

        Page::updateOrCreate(['slug' => 'oeuvres-missions'], [
            'title' => 'Œuvres sociales et missions',
            'subtitle' => null,
            'body' => "Notre axe social se résume dans l'éducation et la formation professionnelle, la promotion de la santé communautaire, l'agriculture durable et la protection de l'environnement — ce que nous désignons par la mission intégrale.",
        ]);
    }
}
