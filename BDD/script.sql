CREATE DATABASE Castyfy;
USE Castyfy;


CREATE TABLE acteurs (
    id INT NOT NULL AUTO_INCREMENT,
    genre BOOLEAN,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    experience INT NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    telephone VARCHAR(255) NOT NULL UNIQUE,
    disponible ENUM('disponible', 'non disponible','en attente'),
    PRIMARY KEY (id)
);

CREATE TABLE producteurs (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    telephone VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY (id)
);


CREATE TABLE films (
    id INT AUTO_INCREMENT,
    distribution VARCHAR(255) NOT NULL,
    nom_film VARCHAR(255) NOT NULL UNIQUE,
    producteur_id INT NOT NULL,
    affiche VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (producteur_id) REFERENCES producteurs(id)
);


CREATE TABLE offres (
    id INT AUTO_INCREMENT,
    libelle_offre VARCHAR(255) NOT NULL UNIQUE,
    nom_film INT NOT NULL,
    description_offre VARCHAR(255) NOT NULL,
    date_expiration DATE NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (nom_film) REFERENCES films(id)
);


CREATE TABLE inscriptions (
    id INT AUTO_INCREMENT,
    acteur INT NOT NULL,
    offre INT NOT NULL,
    statut ENUM('accepté', 'refusé', 'en attente'),
    PRIMARY KEY (id),
    FOREIGN KEY (acteur) REFERENCES acteurs(id),
    FOREIGN KEY (offre) REFERENCES offres(id)
);


producteurs test sample :
INSERT INTO `producteurs` (`id`, `nom`, `prenom`,`email`, `mdp`, `telephone`) VALUES 
(1, 'Nolan', 'Christopher','contact@nolan-prod.com', 'motdepasse123', '0601020304'),
(2, 'Spielberg', 'Steven', 'steven@amblin-ent.com', 'motdepasse123', '0698765432');

films test sample :
INSERT INTO `films` (`id`, `distribution`, `nom_film`, `producteur_id`, `affiche`) VALUES
(1, 'Warner Bros', 'Inception', 1, 'https://image.tmdb.org/t/p/original/xlaY2zyzMfkhk0HSC5VUwzoZPU1.jpg'),
(2, 'Universal Pictures', 'Oppenheimer', 2, 'https://image.tmdb.org/t/p/original/ptpr0kGAckfQkJeJIt8st5dglvd.jpg'),
(3, 'Paramount Pictures', 'Interstellar', 1, 'https://image.tmdb.org/t/p/original/yQvGrMoipbRoddT0ZR8tPoR7NfX.jpg'),
(4, 'Marvel Studios', 'Avengers: Endgame', 2, 'https://image.tmdb.org/t/p/original/1bChCE5tvqIPzvOav72gbXH9dlC.jpg'),
(5, 'Lucasfilm', 'Star Wars: A New Hope', 1, 'https://image.tmdb.org/t/p/original/nEYxzFUHnoNi0VwUd9xNj8wRssh.jpg');

offres test sample :
INSERT INTO `offres` (`libelle_offre`, `nom_film`, `description_offre`) VALUES 
('Doublure cascade pour Joseph Gordon-Levitt', 1, "TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST"),
('Figurant scientifique (physique nucléaire)', 2, "TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST"),
('Rôle de l''astronaute secondaire (homme 30-40 ans)', 3, "TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST"),
('Acteur de performance capture pour créature alien', 4, "TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST"),
('Pilote de chasse rebelle (profil jeune engagé)', 5, "TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST"),
('Expert en effets spéciaux de plateau', 1, "TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST"),
('Doublure lumières pour Cillian Murphy', 2, "TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST");


acteurs test sample :
INSERT INTO `acteurs` (`genre`, `nom`, `prenom`, `experience`, `email`, `mdp`, `telephone`, `disponible`) VALUES 
(1, 'Lefebvre', 'Thomas', 5, 'thomas.le@email.com', 'hash_mdp_1', '0611223344', 'disponible'),
(0, 'Moreau', 'Clara', 2, 'clara.mo@email.com', 'hash_mdp_2', '0622334455', 'en attente'),
(1, 'Durand', 'Kevin', 10, 'kevin.du@email.com', 'hash_mdp_3', '0633445566', 'non disponible'),
(0, 'Petit', 'Amélie', 0, 'amelie.pe@email.com', 'hash_mdp_4', '0644556677', 'disponible'),
(1, 'Rousseau', 'Julien', 15, 'julien.ro@email.com', 'hash_mdp_5', '0655667788', 'en attente'),
(0, 'Marchand', 'Sophie', 7, 'sophie.ma@email.com', 'hash_mdp_6', '0666778899', 'disponible'),
(1, 'Garcia', 'Lucas', 3, 'lucas.ga@email.com', 'hash_mdp_7', '0677889900', 'non disponible');


inscriptions test sample :
INSERT INTO `inscriptions` (`acteur`, `offre`, `statut`) VALUES
(1, 1, 'en attente'),
(7, 1, 'refusé'),
(4, 2, 'accepté'),
(6, 2, 'en attente'),
(3, 3, 'accepté'),
(7, 4, 'en attente'),
(1, 5, 'en attente');

logins :

contact@nolan-prod.com
motdepasse123

thomas.le@email.com
motdepasse123

admin@admin.com
admin
