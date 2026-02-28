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

### Action A : Initialisation de Lab
> **Description** : Créer seulement la structure de fichiers et dossiers du Lab sans les contenus.
- **Capacités Utilisées** :
  - `capacités/capacité-initialisation-lab.md`
- **Entrées** : `Sujet`, `Contexte`
- **Sorties** : Arborescence de dossiers (`docs/`, `atelier/`, `app/`)
- **❌ Interdictions Spécifiques** : Ne générer aucun contenu pédagogique lors de cette phase.
- **📝 Instructions d'Orchestration** :
  1. Instancier l'arborescence définie selon `capacité-initialisation-lab.md`.

### Action B : Créer un Atelier
> **Description** : Rédiger un tutoriel d'atelier guidant la pratique de l'apprenant.
- **Capacités Utilisées** :
  - `capacités/capacité-creation-atelier.md`
- **Entrées** : `Objectif technique`, `Sujet`
- **Sorties** : Fichier markdown de tutoriel dans le dossier `atelier/`
- **📝 Instructions d'Orchestration** :
  1. Générer le contenu du tutoriel structuré par étapes via `capacité-creation-atelier.md`.

### Action C : Créer une Présentation
> **Description** : Générer un diaporama théorique formaté en Markdown avec Marp.
- **Capacités Utilisées** :
  - `capacités/capacité-creation-presentations-marp.md`
- **Entrées** : `Concepts théoriques`
- **Sorties** : Fichier markdown Marp dans le dossier `docs/`
- **📝 Instructions d'Orchestration** :
  1. Utiliser `capacité-creation-presentations-marp.md` pour concevoir les slides.

### Action D : Planifier le Lab
> **Description** : Structurer le cheminement pédagogique du Lab en 3 étapes.
- **Capacités Utilisées** :
  - `capacités/capacité-planification-lab.md`
- **Entrées** : `Sujet global`
- **Sorties** : Plan détaillé de l'architecture pédagogique (Fondations, Opérations, Scénario)
- **📝 Instructions d'Orchestration** :
  1. Appliquer les 3 étapes de progression selon `capacité-planification-lab.md`.

---

## 🛠️ Capacités (Savoir-Faire Technique)
*Documentation des fichiers situés dans le dossier `capacités/`*

### 1. `capacité-initialisation-lab.md`
- **Rôle** : Création de l'ossature de dossiers brute.

### 2. `capacité-creation-atelier.md`
- **Rôle** : Conception de tutoriels de pratique structurés.

### 3. `capacité-creation-presentations-marp.md`
- **Rôle** : Conception de diaporamas au format Markdown pour Marp.

### 4. `capacité-planification-lab.md`
- **Rôle** : Application de la progression pédagogique en 3 étapes.
