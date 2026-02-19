---
description: Garantir l'intégrité et l'évolution contrôlée de la structure de l'agent (Skills, Rules, Workflows) ET la cohérence des livrables projet.
---

# Workflow : Maintenance Agent (`/raffinement-agent`)

## 1. Contexte & Flux Global
**Objectif** : Garantir l'intégrité et l'évolution contrôlée de la structure de l'agent (Skills, Rules, Workflows) ET la cohérence des livrables projet.
**Flux Type** : `[Analyse]` → `[Exécution Action Agent]` → `[Alignement Livrable Requis]`

## 2. Exécution

### Étape 1 : Analyse de la Demande
**Analyser le message de l'utilisateur** pour détecter l'action appropriée.
- **Action A** : Gérer un Skill / Compétence
- **Action B** : Gérer une Rule / Règle
- **Action C** : Gérer un Workflow

### Étape 2 : Routage Conditionnel (Confirmation)
**Si action identifiée** : 
1. Afficher "Action Détectée : [Nom]".
2. Demander confirmation ("Voulez-vous procéder ?").
**Si ambigu** : Afficher Menu A/B/C.

### Étape 3 : Exécution de l'Action Choisie (La Loi)
**Principe** : On modifie D'ABORD les règles (Skills/Rules), JAMAIS les livrables directement pour une question de méthode.

**⚠️ Règle de Sécurité**
1. **Générer** le contenu (Fichier ou Diff).
2. **Afficher** le bloc de code.
3. **Demander** validation.
4. **Appliquer** la modification sur le fichier `.agent/...`.

---

### Étape 4 : Alignement des Livrables (L'Exécution)
**Condition** : Si l'Action A (Skill) a été exécutée et qu'elle impacte la structure d'un livrable existant.

1.  **Identifier** les livrables du projet qui violent la nouvelle règle.
2.  **Proposer** une mise à jour immédiate de ces livrables pour respecter le nouveau Skill.
3.  **Appliquer** les corrections sur les fichiers projet (ex: `projet-technique.md`, `fil-rouge.md`).

> **Règle d'Or : "Skill First"**
> Il est INTERDIT de modifier un livrable pour changer une méthode sans avoir modifié le Skill correspondant au préalable.

---

## 3. Détail des Actions Techniques

#### Si Action A sélectionnée (Gérer Skill)
- **Cible** : `.agent/skills/`
- **Inputs** : Nom, Mode (Create/Update), Description.
- **Validation** : Vérifier conformité avec `capacités-skill.md`.

#### Si Action B sélectionnée (Gérer Rule)
- **Cible** : `.agent/rules/`
- **Inputs** : Nom, Mode, Contenu.
- **Validation** : Vérifier conformité avec `capacités-rule.md`.

#### Si Action C sélectionnée (Gérer Workflow)
- **Cible** : `.agent/workflows/`
- **Inputs** : Nom, Mode, Étapes.
- **Validation** : Vérifier conformité avec `capacités-workflow.md`.
