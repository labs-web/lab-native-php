# Atelier 1 : Hello World dans mobile (NativePHP v3)

## Objectif
Créer et exécuter une application mobile Android native affichant "Hello World" en utilisant NativePHP v3 sur un environnement Windows.

## Prérequis
Assurez-vous de vérifier ces prérequis avant de commencer :

- **PHP 8.2+** : Vérifiez avec la commande `php -v`.
- **Composer & NPM** : Vérifiez avec `composer -v` et `npm -v`.
- **Android Studio 2024.2.1+** : Ouvrez Android Studio pour vérifier que le SDK Android (API 33+) et un émulateur sont installés.
- **7-Zip installé** (requis sous Windows) : Vérifiez avec `7z` dans le terminal ou la présence de `C:\Program Files\7-Zip\7z.exe`.
- **Variables d'environnement Windows** (JAVA_HOME, ANDROID_HOME) :
  - **ANDROID_HOME** : Dans Android Studio > *Settings > Languages & Frameworks > Android SDK*, copiez "Android SDK Location" (ex: `C:\Users\Nom\AppData\Local\Android\Sdk`). 
  - **JAVA_HOME** : Dans Android Studio > *Settings > Build, Execution, Deployment > Build Tools > Gradle*, copiez le chemin "Gradle JDK" (ex: `C:\Program Files\Android\Android Studio\jbr`).
  - **Configuration Windows** : Dans la recherche Windows, tapez "Variables d'environnement". Ajoutez les deux variables système `ANDROID_HOME` et `JAVA_HOME` avec les chemins copiés.
  - **Path** : Modifiez la variable système `Path` et ajoutez `%ANDROID_HOME%\platform-tools` et `%JAVA_HOME%\bin`. Redémarrez votre terminal.
- **Dossiers exclus de Windows Defender** : (Recommandé) Excluez `C:\temp` et le dossier du projet via Sécurité Windows pour accélérer la compilation.

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

> **Note :** Lors de l'installation, si on vous demande `Include ICU-enabled PHP binary for Filament/intl support?`, répondez `no` (ou appuyez sur Entrée). Ce composant n'est pas nécessaire pour notre stack (Blade/Alpine).

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
> **Temps d'exécution** : 
> - **Première exécution (Cold Build)** : 5 à 15 minutes (téléchargement de Gradle, dépendances Android, binaires PHP et compilation complète).
> - **Exécutions suivantes (Warm Build)** : 10 à 30 secondes.

> **Mises à jour** : À chaque modification de vos vues, CSS ou JS, n'oubliez pas de relancer la compilation des assets (`npm run build`) avant de relancer `php artisan native:run` pour voir les changements dans l'application mobile.

*(Le processus vous guide pour compiler et lancer l'application directement dans l'émulateur ou sur un appareil réel).*

## Vérification
L'application doit s'afficher sur l'émulateur Android, respectant les contraintes de l'OS mobile, et un dossier `nativephp` (à ajouter via un `.gitignore`) aura été généré pour stocker de façon éphémère les fichiers de build du projet.

## Troubleshooting

### Erreur "Failed to download PHP binaries" lors de l'installation
Si vous obtenez le message `Failed to download PHP binaries.` pendant l'exécution de `php artisan native:install` mais que l'installation indique ensuite `NativePHP for Mobile installed successfully!`, cela est souvent dû à un problème réseau temporaire ou à un blocage de pare-feu/antivirus.
Vérifiez votre connexion internet et relancez la commande, ou ignorez l'erreur si la commande `php artisan native:run` fonctionne correctement par la suite (les binaires peuvent parfois être téléchargés ultérieurement lors du build).

### Erreur "7-Zip not found" lors de l'installation (Windows)
Si lors de `php artisan native:install` vous avez l'erreur `7-Zip not found at: C:\Program Files\7-Zip\7z.exe`, cela signifie que l'outil d'extraction n'est pas installé ou n'est pas dans le chemin par défaut.
- Installez [7-Zip](https://www.7-zip.org/download.html).
- Si vous l'avez installé ailleurs, ajoutez une variable d'environnement `NATIVEPHP_7ZIP_LOCATION` pointant vers l'exécutable (ex: `C:\chemin\vers\7z.exe`).
