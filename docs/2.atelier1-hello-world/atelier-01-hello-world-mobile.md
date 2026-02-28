# Atelier 1 : Hello World dans mobile (Capacitor)

## Objectif
Créer et exécuter une application mobile Android native affichant "Hello World" en utilisant NativePHP (Capacitor) sur un environnement Windows.

## Prérequis
- PHP 8.2+
- Composer & NPM
- Android Studio installé (avec SDK Android et Émulateur configurés)
- Variables d'environnement Windows correctement définies pour Android (JAVA_HOME, ANDROID_HOME).

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
        <p class="text-gray-600">Application mobile motorisée par NativePHP (Capacitor)</p>
    </div>
</body>
</html>
```

### 3. Installation et configuration de NativePHP
Installez l'implémentation Capacitor de NativePHP :
```bash
composer require nativephp/capacitor
```

Initialisez la configuration (AppServiceProvider, layout natif de base) :
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
php artisan native:dev
```
*(Le processus synchronise les fichiers Laravel via Capacitor et ouvre Android Studio ou lance l'application directement dans l'émulateur).*

## Vérification
L'application doit s'afficher sur l'émulateur Android sans recourir à un navigateur web, respectant les contraintes de l'OS mobile.
