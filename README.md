# Convention Baptiste du Togo — Site web

Site institutionnel de la Convention Baptiste du Togo (CBT), développé avec Laravel 12, Blade et Tailwind CSS v4. Comprend un site public (actualités, événements, galerie, carte interactive des églises, annuaire, etc.) et un back-office d'administration complet.

## Prérequis

- PHP 8.2 ou supérieur
- Composer
- Node.js et npm
- Extension PHP `sqlite3` activée (base de données SQLite par défaut)

## Installation

1. **Cloner le dépôt et installer les dépendances**

   ```bash
   git clone https://github.com/Emmanuel-Bil/cbtweb.git
   cd cbtweb
   composer install
   npm install
   ```

2. **Configurer l'environnement**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Créer la base de données SQLite**

   ```bash
   touch database/database.sqlite
   ```

   Sous Windows (PowerShell) :

   ```powershell
   New-Item -ItemType File -Path database/database.sqlite
   ```

4. **Lancer les migrations et peupler la base avec le contenu de départ**

   ```bash
   php artisan migrate --seed
   ```

   Cette commande crée toutes les tables et insère le contenu réel de la CBT (mot du président, historique, confession de foi, zones, bureau exécutif, réglages du site...), ainsi qu'un compte administrateur. **Le mot de passe généré est affiché dans le terminal à la fin du seed** — notez-le, il n'est pas rejoué automatiquement.

5. **Lier le stockage public** (nécessaire pour afficher les images uploadées et celles du contenu de départ)

   ```bash
   php artisan storage:link
   ```

6. **Compiler les assets front-end**

   ```bash
   npm run build
   ```

   Ou, en développement, avec rechargement à chaud :

   ```bash
   npm run dev
   ```

7. **Démarrer le serveur**

   ```bash
   php artisan serve
   ```

   Le site est alors accessible sur `http://127.0.0.1:8000`.

## Administration

Le back-office est accessible sur `/admin` (ex: `http://127.0.0.1:8000/admin`). Il permet de gérer sans toucher au code :

- Pages statiques (accueil, mot du président, mission & valeurs, don...)
- Confession de foi, historique, départements, activités de la page d'accueil
- Bureau exécutif, directeurs de départements, modérateurs de zones, zones, églises
- Actualités, événements, dates utiles, galerie photos, vidéos, newsletters
- Œuvres sociales, bibliothèque, téléchargements
- Messages de contact et abonnés à la newsletter
- Réglages généraux du site (coordonnées, statistiques de la page d'accueil, informations de don)

Si le mot de passe administrateur a été perdu, il peut être réinitialisé via Tinker :

```bash
php artisan tinker --execute="\$u = App\Models\User::first(); \$u->password = Hash::make('nouveau-mot-de-passe'); \$u->save();"
```

## Développement

- **Lancer serveur + build des assets en une commande** (nécessite `concurrently`, déjà en dépendance) :

  ```bash
  composer run dev
  ```

- **Lancer les tests** :

  ```bash
  php artisan test
  ```

## Stack technique

- **Backend** : Laravel 12, PHP 8.2+
- **Frontend** : Blade, Tailwind CSS v4, Vite
- **Carte interactive** : Leaflet.js + OpenStreetMap
- **Base de données** : SQLite (par défaut, configurable en MySQL via `.env`)
