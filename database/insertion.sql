-- Insertion des utilisateurs
INSERT INTO users (nom, email, mdp_hash) VALUES
('Alice Dupont', 'alice.dupont@example.com', '$2y$10$CwTycUXWue0Thq9StjUM0uJ8rJ9CkR7FQzN0sYF1Z1c3GqZ0s1a9K'),
('Bob Martin', 'bob.martin@example.com', '$2y$10$u1HkL0Z2vF9Qx7Z7Yy8F9e7Pp9y7bXKxYQZqYz3mV4kKQ1zJrXQe'),
('Claire Leroy', 'claire.leroy@example.com', '$2y$10$wH9YxR6zZ3Vx5D4LqNn0jOQeE2H5bQFzM6yXnXk0b0YzN1VZ5G8m');

-- Insertion des catégories
INSERT INTO Categorie (nom) VALUES ('Livres');
INSERT INTO Categorie (nom) VALUES ('DVD');
INSERT INTO Categorie (nom) VALUES ('Vêtements');
INSERT INTO Categorie (nom) VALUES ('Jeux');
INSERT INTO Categorie (nom) VALUES ('Électronique');

-- Insertion des objets (corrigé : utilisateur_id au lieu de users_id)
INSERT INTO Objet (nom, description, utilisateur_id, categorie_id) 
VALUES ('Harry Potter', 'Livre fantasy', 1, 1);

INSERT INTO Objet (nom, description, utilisateur_id, categorie_id) 
VALUES ('Avengers DVD', 'Film Marvel', 2, 2);

INSERT INTO Objet (nom, description, utilisateur_id, categorie_id) 
VALUES ('T-shirt rouge', 'Taille M', 1, 3);

INSERT INTO Objet (nom, description, utilisateur_id, categorie_id) 
VALUES ('Jeu de société', 'Monopoly', 3, 4);

INSERT INTO Objet (nom, description, utilisateur_id, categorie_id) 
VALUES ('Casque audio', 'Bluetooth', 2, 5);

-- Insertion des échanges proposés
INSERT INTO Echange (objet1_id, objet2_id, statut) VALUES (1, 2, 'Proposé');
INSERT INTO Echange (objet1_id, objet2_id, statut) VALUES (3, 4, 'Proposé');
