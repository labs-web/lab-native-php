---
name: expert-lab-init
description: Expert de l'initialisation et de la structuration pédagogique de projets de type Lab.
---

# Skill : Expert Lab

## 🎯 Objectif & Périmètre
**Mission** : Générer une structure de projet standardisée pour les Labs pédagogiques et guider la création du contenu didactique.

### ✅ Actions Autorisées
- **Scaffolder** la structure globale du projet (`docs/`, `atelier/`, `mini-projet/`).
- **Créer et formater** des présentations pédagogiques utilisant le format **Marp** (Markdown).
- **Structurer** le cheminement pédagogique du Lab en étapes progressives.

### ❌ Limites (Ce qu'il ne fait PAS)
- Ne remplace pas l'expertise technique du métier, mais en structure la transmission.

## 🧠 Capacités (Capacities)

### Capacité 1 : Création de Présentations Marp
L'agent est capable de concevoir des diaporamas au format Markdown pour Marp :
- Ajout systématique du frontmatter YAML (`marp: true`, `theme`, `paginate: true`).
- Séparation des diapositives par `---`.
- Structuration aérée : 1 idée claire par slide.

### Capacité 2 : Ingénierie Pédagogique du Lab (Les 3 Étapes)
L'agent applique une progression pédagogique stricte pour chaque Lab :
- **Étape 1 : Fondations**
  - **Présentation 1** : Théorie, concepts de base et préparation de l'environnement.
  - **Atelier 1** : "Hello World" (Validation de l'environnement de travail et stack technique).
- **Étape 2 : Opérations Simples**
  - **Présentation 2** : Concepts techniques intermédiaires (ex: Gestion d'état, interactions basiques).
  - **Atelier 2** : Exercice ciblé sur une opération métier simple (ex: Calculatrice locale).
- **Étape 3 : Scénario Complet**
  - **Mini-projet** : Application d'un cas d'usage complet dans le dossier imposé `app` (ex: Todo List avec persistance).

## 📥 Entrées / 📤 Sorties
| Direction  | Nom         | Description / Format                            |
| :--------- | :---------- | :---------------------------------------------- |
| **Entrée** | `Sujet`     | Thème principal du lab (ex: NativePHP mobile)   |
| **Entrée** | `Contexte`  | Niveau technique visé et prérequis attendus     |
| **Sortie** | `Structure` | Arborescence de dossiers                        |
| **Sortie** | `Docs`      | Présentations Marp (.md) et Tutoriels d'atelier |

## 🔄 Algorithme d'Exécution
1. **Initialiser** les répertoires standards (`docs/`, `atelier/`).
2. **Définir** les objectifs de passage de l'Étape 1 à l'Étape 3.
3. **Produire** la Présentation 1 (Marp) puis le Tutoriel Atelier 1 (Hello World).
4. **Produire** la Présentation 2 (Marp) puis le Tutoriel Atelier 2 (Opération simple).
5. **Définir** le cahier des charges de l'Étape 3 (Mini-projet dans dossier `/app`).

## ⚠️ Règles d'Or
1. **Pédagogie Active** : Toujours coupler une théorie (Présentation) avec une pratique immédiate (Atelier).
2. **Standardisation Marp** : Toute présentation doit inclure les directives Marp.
3. **Dossier Cible** : Le rendu complet de l'étape 3 doit impérativement se situer dans le dossier nommé `app`.
