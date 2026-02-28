---
name: expert-lab-init
description: Expert de l'initialisation et de la structuration pédagogique de projets de type Lab.
---

# Skill : Expert Lab

## 🎯 Périmètre Global
**Mission** : Générer une structure de projet standardisée pour les Labs pédagogiques et guider la création du contenu didactique.

### 🚫 Interdictions Globales (Règles d'Or)
1. **Pédagogie Active** : Ne jamais présenter une théorie sans l'accompagner d'une pratique (Atelier).
2. **Standardisation Marp** : Toute présentation doit inclure les directives Marp (`marp: true`, `theme`, `paginate: true`).
3. **Remplacement de l'Expertise** : Ce skill ne remplace pas l'expertise technique métier, il en structure la transmission.

---

## ⚡ Actions (Orchestration)

### Action A : Gérer l'Initialisation et la Structuration Pédagogique (Le Lab)
> **Description** : Scaffolder la structure globale et planifier les étapes (Fondations, Opérations, Scénario).
- **Capacités Utilisées** :
  - `capacités/capacité-ingenierie-pedagogique.md`
  - `capacités/capacité-creation-presentations-marp.md`
- **Entrées** : `Sujet`, `Contexte`
- **Sorties** : Arborescence de dossiers (`docs/`, `atelier/`, `app/`), Présentations Marp (.md), et Tutoriels d'atelier.
- **❌ Interdictions Spécifiques** :
  - Le rendu complet de l'étape 3 doit impérativement se situer dans le dossier nommé `app` (interdiction de le mettre ailleurs).
- **✅ Points de Contrôle** :
  - La progression respecte strictement les 3 étapes pédagogiques.
- **📝 Instructions d'Orchestration** :
  1. **[Étape 1] Initialiser** les répertoires standards (`docs/`, `atelier/`).
  2. **[Étape 2] Définir** les objectifs de passage de l'Étape 1 à l'Étape 3 via `capacité-ingenierie-pedagogique.md`.
  3. **[Étape 3] Produire** les Présentations 1 et 2 avec `capacité-creation-presentations-marp.md`, et leurs ateliers associés.
  4. **[Étape 4] Définir** le cahier des charges de l'Étape 3 (app structuré dans le dossier `/app`).

---

## 🛠️ Capacités (Savoir-Faire Technique)
*Documentation des fichiers situés dans le dossier `capacités/`*

### 1. `capacité-creation-presentations-marp.md`
- **Rôle** : Conception de diaporamas au format Markdown pour Marp.
- **Règles Clés** : Frontmatter yaml systématique, 1 idée par slide.

### 2. `capacité-ingenierie-pedagogique.md`
- **Rôle** : Application de la progression pédagogique en 3 étapes.
- **Règles Clés** : Progression (Fondations → Opérations Simples → Scénario Complet).
