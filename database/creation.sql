-- Création de la base
CREATE DATABASE IF NOT EXISTS takalo;
USE takalo;

-- Table users (pour que Objet puisse référencer utilisateur_id)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    mdp_hash VARCHAR(255) NOT NULL
);

-- Table Categorie
CREATE TABLE IF NOT EXISTS Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

-- Table Objet
CREATE TABLE IF NOT EXISTS Objet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    description VARCHAR(255),
    utilisateur_id INT,       -- lien vers l'utilisateur qui possède l'objet
    categorie_id INT,         -- lien vers la catégorie de l'objet
    FOREIGN KEY (utilisateur_id) REFERENCES users(id),
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id)
);

-- Table Echange
CREATE TABLE IF NOT EXISTS Echange (
    id INT AUTO_INCREMENT PRIMARY KEY,
    objet1_id INT,   -- objet proposé par le premier utilisateur
    objet2_id INT,   -- objet proposé par le second utilisateur
    statut VARCHAR(20) DEFAULT 'Proposé', -- Proposé / Accepté / Refusé
    FOREIGN KEY (objet1_id) REFERENCES Objet(id),
    FOREIGN KEY (objet2_id) REFERENCES Objet(id)
);
