# Unify App

Unify App est une plateforme web collaborative développée avec Laravel, conçue pour faciliter la gestion de profils publics, la mise en relation et la présentation de liens, de compétences ou de projets. L'application tire parti de Laravel, Livewire et Tailwind CSS pour offrir une expérience utilisateur moderne, interactive et rapide.

---

## 🚀 Présentation

L'objectif de Unify App est de permettre à chaque utilisateur de :
- Créer et personnaliser un profil public (pseudo, bio, etc.).
- Consulter et rechercher les profils d'autres membres.
- Mettre en avant ses liens, reséaux, compétences, ses réalisations ou ses projets.
- Disposer d'un tableau de bord personnel et d'une interface intuitive pour la gestion de ses données.

La plateforme cible tout particulièrement les étudiants, freelances, professionnels ou toute communauté souhaitant centraliser ses profils en ligne, par exemple pour un réseau d'école, une association ou un incubateur.

---

## 🛠️ Stack technique

- **Backend** : Laravel 11+
- **Frontend** : Blade, Livewire (composants dynamiques)
- **CSS** : Tailwind CSS
- **Base de données** : MySQL ou PostgreSQL
- **Authentification** : système Laravel natif (inscription, connexion, gestion sessions)
- **Déploiement** : compatible avec Forge, Vapor, ou tout hébergeur PHP standard

---

## 📦 Structure du projet

```
unify-app/
├── app/
│   ├── Http/
│   ├── Livewire/         # Composants Livewire pour l'interactivité
│   └── Models/
├── bootstrap/
├── config/
├── database/
│   └── migrations/       # Migrations (utilisateurs, profils, etc.)
├── public/
├── resources/
│   ├── css/              # Styles Tailwind
│   ├── js/
│   └── views/            # Vues Blade/Laravel
├── routes/
│   └── web.php
├── tests/
├── .env.example
└── README.md
```

---

## ⚙️ Installation & Lancement

### Prérequis

- PHP >= 8.2
- Composer
- MySQL ou PostgreSQL
- Node.js, npm (pour les assets)

### Étapes

1. **Cloner le dépôt**
    ```bash
    git clone https://github.com/Ilan9903/unify-app.git
    cd unify-app
    ```

2. **Installer les dépendances**
    ```bash
    composer install
    npm install && npm run build
    ```

3. **Configurer l'environnement**
    ```bash
    cp .env.example .env
    # Modifier les variables (.env) : DB, APP_URL...
    php artisan key:generate
    ```

4. **Créer la base de données**
    ```bash
    php artisan migrate
    ```

5. **Lancer le serveur**
    ```bash
    php artisan serve
    ```

6. Accéder à l'application sur [http://localhost:8000](http://localhost:8000)

---

## 🧩 Fonctionnalités principales

- **Gestion de profil public**
    - Pseudo unique, photo, bio personnalisée, informations de contact (optionnelles)
- **Tableau de bord utilisateur**
    - Gestion de son profil, aperçu de ses données
- **Recherche et consultation**
    - Accès aux profils publics des autres membres (par pseudo ou recherche)
- **Sécurité & confidentialité**
    - Authentification, routes protégées, tokens CSRF natifs Laravel
- **Ergonomie moderne**
    - UI responsive avec Tailwind CSS et composants dynamiques Livewire

---

## 👨‍💻 Contribuer

Les contributions sont bienvenues !  
Merci de proposer une issue ou une pull request pour toute amélioration, bug ou suggestion.

---

## 📄 Licence

Ce projet est publié sous licence MIT.

---

**Auteur : [Ilan9903](https://github.com/Ilan9903)**
