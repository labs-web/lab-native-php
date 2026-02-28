---
marp: true
theme: default
paginate: true
---

# Présentation 1 : Introduction à NativePHP & Hello World

---

## 1. Qu'est-ce que NativePHP ?
NativePHP est une technologie qui permet aux développeurs PHP d'utiliser leurs compétences Laravel pour construire des applications bureau (Windows, Mac, Linux) et mobiles (iOS, Android). 
Il ne s'agit pas d'un nouveau framework UI, mais d'un "Bridge" (pont) qui enveloppe une application Laravel dans une coquille native (Electron pour le Bureau, Capacitor pour le Mobile).

---

## 2. L'Architecture
- **Backend** : Le moteur complet de PHP 8.2+ et Laravel tournent localement au sein de l'application. Pas besoin de serveur externe pour la logique.
- **Frontend** : Vous utilisez vos outils web habituels (Blade, Tailwind, Alpine.js).
- **Stockage** : SQLite est embarqué pour la persistance locale des données.
- **Bridge OS** : Une API NativePHP permet à Laravel de communiquer avec l'OS (Notifications, Gestion de fenêtres, Menus système, etc.).

---

## 3. L'Écosystème Mobile (Capacitor)
Sur mobile, NativePHP utilise Capacitor. Ce dernier convertit votre application web en application native.
Le "Bridge" permet d'accéder aux fonctionnalités du téléphone (Caméra, Géolocalisation, etc.) tout en ayant Laravel comme moteur d'API en arrière-plan.

---

## 4. Objectif de l'Atelier 1 : Hello World
L'objectif initial est de s'assurer que notre environnement est prêt :
- Créer une application Laravel nommée `app` (selon nos conventions).
- Installer Tailwind CSS.
- Mettre en place NativPHP/Capacitor.
- Afficher notre tout premier écran sur un émulateur ou appareil Android.
