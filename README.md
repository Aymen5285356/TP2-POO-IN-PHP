# 📚 Exercices POO en PHP

Ce projet contient plusieurs exercices réalisés en **programmation orientée objet (POO) avec PHP**.
L’objectif est de maîtriser les concepts fondamentaux comme les classes, les objets, les constructeurs, l’héritage et les méthodes.

---

## 🟢 Exercice 1 : Gestion d’une bibliothèque

### Objectif

Créer un système simple pour gérer des livres dans une bibliothèque.

### Instructions

* Créer une classe **Livre** avec :

  * `titre`
  * `auteur`
  * `prix`
* Ajouter un **constructeur**.
* Ajouter une méthode `afficherLivre()` pour afficher les informations du livre.
* Créer une classe **Bibliotheque** contenant plusieurs livres.
* Ajouter une méthode `afficherTousLesLivres()`.

---

## 🟡 Exercice 2 : Gestion d’un panier

### Objectif

Simuler un panier d’achat avec calcul du total.

### Instructions

* Créer une classe **Produit** avec :

  * `nom`
  * `prix`
  * `quantite`
* Utiliser un **constructeur**.
* Ajouter une méthode `sousTotal()` (prix × quantité).
* Créer une classe **Panier** contenant plusieurs produits.
* Ajouter une méthode `totalPanier()` pour calculer le total.

---

## 🔵 Exercice 3 : Gestion des étudiants

### Objectif

Gérer les notes et décisions d’un étudiant.

### Instructions

* Créer une classe **Etudiant** avec :

  * `nom`
  * `notes` (tableau)
* Ajouter une méthode `ajouterNote()`.
* Ajouter une méthode `moyenne()`.
* Ajouter une méthode `decision()` :

  * Retourne **"Admis"** si moyenne ≥ 10
  * Sinon **"Refusé"**
* Utiliser `__toString()` pour afficher les informations de l’étudiant.

---

## 🔴 Exercice 4 : Héritage avec employés

### Objectif

Comprendre l’héritage et la redéfinition de méthodes en PHP.

### Instructions

* Créer une classe **Employe** avec :

  * `nom`
  * `salaire`
* Ajouter une méthode `calculerSalaire()`.
* Créer une classe **Manager** qui hérite de **Employe**.
* Ajouter une **prime** au manager.
* Redéfinir la méthode `calculerSalaire()` pour inclure la prime.

---

## 🛠️ Technologies utilisées

* PHP (POO)
* CLI ou serveur local (XAMPP)

---

## 🚀 Objectifs pédagogiques

* Comprendre les bases de la POO en PHP :

  * Classes et objets
  * Constructeurs (`__construct`)
  * Méthodes
  * Encapsulation
  * Héritage
* Manipuler des tableaux en PHP
* Structurer un projet proprement

---

## ▶️ Exécution

1. Installer un serveur local (XAMPP)
2. Placer les fichiers dans le dossier `htdocs` ou `www`
3. Exécuter le projet via le navigateur ou en ligne de commande :

   ```bash
   php index.php
   ```

---

## 👨‍💻 Auteur

Projet réalisé pour pratiquer la **programmation orientée objet en PHP**.

---
