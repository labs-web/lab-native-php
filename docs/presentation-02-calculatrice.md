---
marp: true
theme: default
paginate: true
---

# Présentation 2 : Architecture d'une Calculatrice Native

---

## 1. Contexte et Objectifs
Après avoir validé l'affichage du Hello World, l'**Atelier 2** consiste à réaliser une application interactive locale : une Calculatrice.
L'enjeu n'est pas seulement de faire des mathématiques, mais de comprendre comment gérer l'état (State) et la réactivité dans une application NativePHP en utilisant **Alpine.js**.

---

## 2. Le Choix de la Stack Frontend
Dans une application NativePHP, nous évitons les gros frameworks SPA (React/Vue) au profit d'un assemblage puissant et léger :
- **Blade** : Pour structurer le HTML (MVC classique).
- **Tailwind CSS** : Pour le design (Grid, Flexbox, typographie).
- **Alpine.js** : Pour la réactivité côté client sans avoir à écrire des requêtes serveur pour chaque frappe de touche.

---

## 3. Gestion de l'État avec Alpine.js
La calculatrice aura besoin d'un état (le nombre actuel, le nombre précédent, l'opérateur en cours).
Alpine.js permet d'embarquer cette logique directement dans le HTML avec `x-data`, `x-on:click` et `x-text`. Cela réduit considérablement la complexité par rapport à la création de contrôleurs Laravel pour des opérations mathématiques simples.

---

## 4. Interaction Native (Avancée Optionnelle)
Puisque nous sommes dans une application NativePHP, nous pourrions envisager des "Bridges" avec l'OS, tels que :
- Copier le résultat dans le presse-papiers (`Clipboard` Natif).
- Déclencher une notification locale lors d'une division par zéro.

---

## 5. Préparation pour l'Atelier 2
Vous allez :
1. Poursuivre dans le dossier `app`.
2. Créer une interface type "Calculatrice de bureau".
3. Câbler la grille de boutons avec Alpine.js.
4. Gérer les calculs en temps réel dans le navigateur (webview mobile).
