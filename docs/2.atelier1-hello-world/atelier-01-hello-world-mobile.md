# Atelier 1 : Hello World dans mobile (NativePHP v3)

## Objectif
Créer et exécuter une application mobile Android native affichant "Hello World" en utilisant NativePHP v3 sur un environnement Windows.

## Prérequis
- PHP 8.2+
- Composer & NPM
- Android Studio 2024.2.1 ou plus récent (avec SDK Android API 33+ et Émulateur configurés)
- 7zip installé (requis sous Windows)
- Variables d'environnement Windows correctement définies pour Android (JAVA_HOME, ANDROID_HOME).
- Dossiers exclus de Windows Defender (C:\temp et le dossier du projet) pour accélérer la compilation.

## Étapes de réalisation

### 1. Création de l'application Laravel (v12)
```bash
composer create-project laravel/laravel app
cd app
```

### 2. Préparation de la vue principale
Modifiez le fichier `resources/views/welcome.blade.php` :
```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hello World Mobile</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center p-8 bg-white shadow-lg rounded-xl">
        <h1 class="text-4xl font-bold text-blue-600 mb-2">Hello World !</h1>
        <p class="text-gray-600">Application mobile motorisée par NativePHP (v3)</p>
    </div>
</body>
</html>
```

### 3. Installation et configuration de NativePHP
Installez le package NativePHP Mobile (v3) :
```bash
composer require nativephp/mobile
```

Avant d'initialiser, ajoutez ces variables à votre fichier `.env` :
```env
NATIVEPHP_APP_ID=com.votreentreprise.votreapp
NATIVEPHP_APP_VERSION="DEBUG"
NATIVEPHP_APP_VERSION_CODE="1"
```

Initialisez la configuration (crée le dossier `nativephp` et configure le projet) :
```bash
php artisan native:install
```

### 4. Compilation et Déploiement
Compilez les assets Vite pour que la vue s'affiche correctement dans la webview mobile :
```bash
npm install
npm run build
```

Lancez le développement mobile :
```bash
php artisan native:run
```
*(Le processus vous guide pour compiler et lancer l'application directement dans l'émulateur ou sur un appareil réel).*

## Vérification
L'application doit s'afficher sur l'émulateur Android, respectant les contraintes de l'OS mobile, et un dossier `nativephp` (à ajouter via un `.gitignore`) aura été généré pour stocker de façon éphémère les fichiers de build du projet.
