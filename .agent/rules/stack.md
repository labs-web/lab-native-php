---
trigger: always_on
---

# Stack Technique : NativePHP Lab

## Core (Laravel)
- **PHP** : 8.2+
- **Framework** : Laravel 12
- **Architecture** : MVC, Service Pattern
- **Engine** : NativePHP (Electron pour Desktop, Capacitor pour Android)

## Front-end & Réactivité
- **Templating** : Laravel Blade (Components, Layouts)
- **CSS** : Tailwind CSS (v3+) + Preline UI
- **JS** : Alpine.js + AJAX Vanilla (Fetch API)
- **Principe** : Expériences SPA-like dans une architecture MPA (Multi-Page Application)

## Stockage & OS API
- **Database** : SQLite (persistance locale embarquée) 
- **ORM** : Eloquent (Relations, Scopes, Accessors)
- **Bridge** : NativePHP API (Notifications, Shell, Window management)

## Auth & Sécurité
- **Web** : Laravel UI (Tailwind Scaffolding)
- **API** : Laravel Sanctum (Tokens Mobile)
- **Permissions** : Laravel Gates/Policies + Spatie Permissions (ACL)

## Outillage
- **Manager** : Composer / NPM
- **Bundler** : Vite
- **API Test** : Postman / Insomnia

## Interdictions Techniques
- ❌ Pas de frameworks SPA purs (React, Vue.js, Angular).
- ❌ Pas d'autre framework CSS que Tailwind.
- ❌ Pas d'autre ORM qu'Eloquent.