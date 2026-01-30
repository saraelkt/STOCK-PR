# STOCK-PR - Système de Gestion du Personnel LEONI

Application web de gestion du personnel pour LEONI, permettant la gestion complète des opérateurs, absences, entretiens et départs.

## ��� Vue d'ensemble

STOCK-PR est une application de gestion des ressources humaines développée pour LEONI, offrant une interface complète pour administrer le personnel opérationnel. Le système permet de suivre les employés, gérer leurs absences, planifier des entretiens et traiter les départs.

## ✨ Fonctionnalités

### ��� Gestion du Personnel
- **Ajout d'opérateurs** - Enregistrement de nouveaux employés avec informations complètes
- **Gestion des profils** - Mise à jour et consultation des données des opérateurs
- **Liste du personnel** - Vue d'ensemble de tous les employés

### ��� Gestion des Absences
- **Enregistrement des absences** - Suivi des congés et absences
- **Historique** - Consultation de l'historique des absences par employé
- **Rapports** - Extraction de données et statistiques

### ��� Gestion des Entretiens
- **Planification** - Création de nouveaux entretiens
- **Suivi** - Gestion des entretiens programmés et réalisés
- **Historique** - Consultation des entretiens passés

### ��� Gestion des Départs
- **Signalement de départ** - Enregistrement des départs d'employés
- **Procédures** - Gestion du processus de départ

### ��� Extractions
- **Rapports personnalisés** - Génération de listes et extractions
- **Export de données** - Extraction des informations pour analyse

## ���️ Technologies

- **Frontend**
  - HTML5
  - CSS3 avec TailwindCSS
  - JavaScript
  
- **Backend**
  - PHP
  - MySQL (Base de données)
  - PDO (PHP Data Objects)

- **Build Tools**
  - Node.js & npm
  - TailwindCSS CLI

## ��� Structure du Projet

```
STOCK-PR/
├── index.php                    # Page de connexion
├── main.php                     # Dashboard principal
├── ajoutdesoperateurs.php       # Formulaire d'ajout d'opérateurs
├── GestionPers.php              # Gestion du personnel
├── GererAbsc.php                # Gestion des absences
├── NewEntretien.php             # Création d'entretiens
├── nextentretien.php            # Entretiens à venir
├── intership.php                # Gestion des stages/intérim
├── Signalerdépart.php           # Signalement des départs
├── listextraction.php           # Extraction de données
├── style.css                    # Styles personnalisés
├── script.js                    # Scripts JavaScript
├── package.json                 # Configuration npm
├── imgstock/                    # Images et logos
│   ├── leoni logo.jpg
│   ├── opex logo.jpg
│   └── leoloGO1.jpg
└── dist/                        # Fichiers compilés
    └── output.css               # TailwindCSS compilé
```

## ��� Installation

### Prérequis

- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- Node.js 14+ et npm
- Serveur web (Apache/Nginx) ou XAMPP/WAMP

### Configuration de la base de données

1. Créez une base de données MySQL nommée `leoni`
2. Importez le schéma de la base de données (si fourni)
3. Configurez les identifiants dans `index.php` et autres fichiers PHP :

```php
$dsn = 'mysql:host=localhost;dbname=leoni';
$user = 'root';
$psswd = '';
```

### Installation des dépendances

```bash
# Cloner le repository
git clone https://github.com/saraelkt/STOCK-PR.git
cd STOCK-PR

# Installer les dépendances Node.js
npm install
```

### Compilation de TailwindCSS

```bash
# Compilation en mode watch (développement)
npm run build

# Ou compilation manuelle
npx tailwindcss -i ./style.css -o ./dist/output.css --watch
```

### Déploiement

1. Copiez tous les fichiers dans le répertoire de votre serveur web (htdocs, www, etc.)
2. Assurez-vous que PHP et MySQL sont configurés correctement
3. Accédez à l'application via `http://localhost/STOCK-PR/index.php`

## ��� Connexion

Pour vous connecter à l'application :

- **Email** : Configuration dans `index.php`
- **Mot de passe** : Configuration dans `index.php`

> ⚠️ **Important** : Modifiez les identifiants de connexion par défaut pour des raisons de sécurité.

## ��� Personnalisation TailwindCSS

Le projet utilise TailwindCSS avec des couleurs personnalisées :

```css
/* Couleurs personnalisées LEONI */
.bg-customBlue
.text-customBlue
.bg-Sky
```

Les classes personnalisées sont définies dans `style.css` et compilées via TailwindCSS.

## ��� Base de données

L'application utilise une base de données MySQL nommée `leoni` avec les tables principales :

- **Opérateurs/Personnel** - Informations des employés
- **Absences** - Suivi des absences
- **Entretiens** - Gestion des entretiens
- **Départs** - Enregistrement des départs

## ��� Configuration

### Configuration PHP

Assurez-vous que votre `php.ini` a les extensions suivantes activées :
- `extension=pdo_mysql`
- `extension=mysqli`

### Configuration de la base de données

Mettez à jour les paramètres de connexion dans chaque fichier PHP selon votre environnement :

```php
$dsn = 'mysql:host=VOTRE_HOST;dbname=VOTRE_DB';
$user = 'VOTRE_USER';
$psswd = 'VOTRE_PASSWORD';
```

## ��� Navigateurs supportés

- Google Chrome (recommandé)
- Mozilla Firefox
- Microsoft Edge
- Safari

## ��� Fonctionnalités principales par page

### index.php
- Authentification des utilisateurs
- Redirection vers le dashboard

### main.php
- Dashboard principal avec accès à toutes les fonctionnalités
- Navigation vers les différents modules

### ajoutdesoperateurs.php
- Formulaire d'ajout d'opérateurs
- Champs : Nom, Prénom, Matricule, Matricule SAP, Segment, Date d'embauche, Type de contrat, Équipe

### GestionPers.php
- Liste et gestion du personnel existant
- Modification et consultation des profils

### GererAbsc.php
- Enregistrement des absences
- Consultation de l'historique

### NewEntretien.php
- Création de nouveaux entretiens
- Planification et suivi

## ��� Sécurité

> ⚠️ **Recommandations importantes** :
> - Changez les identifiants de connexion codés en dur
> - Utilisez des variables d'environnement pour les informations sensibles
> - Implémentez le hashage des mots de passe (password_hash())
> - Ajoutez une protection CSRF
> - Validez et sanitisez toutes les entrées utilisateur

## ��� Contribution

Les contributions sont les bienvenues ! N'hésitez pas à :
1. Fork le projet
2. Créer une branche pour votre fonctionnalité
3. Commiter vos changements
4. Pousser vers la branche
5. Ouvrir une Pull Request

## ��� Auteur

**saraelkt**
- GitHub: [@saraelkt](https://github.com/saraelkt)

## ��� Licence

Ce projet est sous licence MIT - voir le fichier LICENSE pour plus de détails.

## ��� À propos de LEONI

Application développée pour la gestion du personnel de LEONI, leader mondial dans la fabrication de systèmes de câblage et de faisceaux pour l'industrie automobile.

## ��� Support

Pour toute question ou problème, n'hésitez pas à ouvrir une issue sur GitHub.

---

**Note** : Ce projet est destiné à un usage interne pour LEONI. Assurez-vous de respecter les politiques de confidentialité et de sécurité de l'entreprise.
