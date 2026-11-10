
INSERT INTO `producteurs` (`id`, `nom`, `prenom`, `email`, `mdp`, `telephone`) VALUES 
(1, 'Nolan', 'Christopher', 'christopher@christopher.com', 'motdepasse123', '0601020304'),
(2, 'Spielberg', 'Steven', 'steven@steven.com', 'motdepasse123', '0698765432'),
(3, 'Sciamma', 'Céline', 'celine@celine.com', 'motdepasse123', '0611223344'),
(4, 'Villeneuve', 'Denis', 'denis@denis.com', 'motdepasse123', '0789456123'),
(5, 'Coogler', 'Ryan', 'ryan@ryan.com', 'motdepasse123', '0655443322'),
(6, 'Gerwig', 'Greta', 'greta@greta.com', 'motdepasse123', '0644332211'),
(7, 'Scorsese', 'Martin', 'martin@martin.com', 'motdepasse123', '0612345678'),
(8, 'Tarantino', 'Quentin', 'quentin@quentin.com', 'motdepasse123', '0623456789'),
(9, 'Cameron', 'James', 'james@james.com', 'motdepasse123', '0634567890'),
(10, 'Fincher', 'David', 'david@david.com', 'motdepasse123', '0645678901'),
(11, 'Coppola', 'Sofia', 'sofia@sofia.com', 'motdepasse123', '0656789012'),
(12, 'Boon', 'Dany', 'dany@dany.com', 'motdepasse123', '0667890123'),
(13, 'Chazelle', 'Damien', 'damien@damien.com', 'motdepasse123', '0678901234'),
(14, 'Ducournau', 'Julia', 'julia@julia.com', 'motdepasse123', '0689012345'),
(15, 'Peele', 'Jordan', 'jordan@jordan.com', 'motdepasse123', '0690123456'),
(16, 'Aster', 'Ari', 'ari@ari.com', 'motdepasse123', '0712345678'),
(17, 'Dupieux', 'Quentin', 'quentin2@quentin.com', 'motdepasse123', '0723456789'),
(18, 'Hazanavicius', 'Michel', 'michel@michel.com', 'motdepasse123', '0734567890'),
(19, 'Lynch', 'David', 'david2@david.com', 'motdepasse123', '0745678901');



INSERT INTO `films` (`id`, `distribution`, `nom_film`, `producteur_id`, `affiche`) VALUES
(1, 'Warner Bros', 'Inception', 1, 'https://image.tmdb.org/t/p/original/xlaY2zyzMfkhk0HSC5VUwzoZPU1.jpg'),
(2, 'Universal Pictures', 'Oppenheimer', 1, 'https://image.tmdb.org/t/p/original/8Gxv8gSFCU0XGDykEGv7zR1n2ua.jpg'),
(3, 'Paramount Pictures', 'Interstellar', 1, 'https://image.tmdb.org/t/p/original/iawqQdFKI7yTUoSkDNP8gyV3J3r.jpg'),
(4, 'Marvel Studios', 'Avengers: Endgame', 5, 'https://image.tmdb.org/t/p/original/ulzhLuWrPK07P1YkdWQLZnQh1JL.jpg'),
(5, 'Lucasfilm', 'Star Wars: A New Hope', 2, 'https://image.tmdb.org/t/p/original/6FfCtAuVAW8XJjZ7eWeLibRLWTw.jpg'),
(6, 'Universal Pictures', 'Jurassic Park', 2, 'https://image.tmdb.org/t/p/original/maFjKnJ62hDQ9E66dKqDZgbUy0H.jpg'),
(7, 'Warner Bros', 'Dune: Part Two', 4, 'https://image.tmdb.org/t/p/original/1pdfLvkbY9ohJlCjQH2CZjjYVvJ.jpg'),
(8, 'Pyramide Distribution', 'Portrait de la jeune fille en feu', 3, 'https://image.tmdb.org/t/p/original/80w8L8UNddBzzSmJNkWhzz2sCmv.jpg'),
(9, 'Warner Bros', 'Barbie', 6, 'https://image.tmdb.org/t/p/original/uUbdc9TMwbazp1zCNzGtXoBHhUa.jpg'),
(10, 'Miramax', 'Pulp Fiction', 8, 'https://image.tmdb.org/t/p/original/vQWk5YBFWF4bZaofAbv0tShwBvQ.jpg'),
(11, 'Paramount Pictures', 'The Wolf of Wall Street', 7, 'https://image.tmdb.org/t/p/original/kW9LmvYHAaS9iA0tHmZVq8hQYoq.jpg'),
(12, '20th Century Studios', 'Avatar', 9, 'https://image.tmdb.org/t/p/original/6EiRUJpuoeQPghrs3YNktfnqOVh.jpg'),
(13, '20th Century Studios', 'Fight Club', 10, 'https://image.tmdb.org/t/p/original/jSziioSwPVrOy9Yow3XhWIBDjq1.jpg');



INSERT INTO `offres` (`libelle_offre`, `nom_film`, `description_offre`) VALUES
('Architecte des rêves', 1, 'Recherche un profil énigmatique capable de construire des mondes imaginaires complexes. Une excellente mémoire spatiale et une résistance aux vertiges sont requises.'),
('Génie de la physique quantique', 2, 'Nous cherchons un acteur pour incarner un scientifique torturé par ses propres créations. Charisme intellectuel et regard habité par le doute indispensables.'),
('Pilote d''expédition spatiale', 3, 'Casting ouvert pour le rôle d''un astronaute prêt à traverser un trou de ver. Bonne résistance à l''isolement, esprit de sacrifice et regard mélancolique souhaités.'),
('Héros galactique pour combat final', 4, 'Recherche profil très athlétique pour un affrontement dantesque. Maîtrise absolue des chorégraphies de combat et aisance totale avec les environnements sur fond vert exigées.'),
('Contrebandier spatial au grand cœur', 5, 'Cherchons un acteur avec une attitude rebelle, un sarcasme naturel et un charme ravageur pour piloter un vaisseau mythique. Tolérance aux boules de poils géantes requise.'),
('Expert en paléontologie fuyant vite', 6, 'Rôle très physique nécessitant de courir extrêmement vite dans la jungle et sous la pluie. La capacité à feindre la terreur absolue face à un animatronique géant est primordiale.'),
('Guerrier du désert prophétique', 7, 'Recherche un jeune talent capable de mener une révolution sur une planète aride. Regard perçant, charisme de leader et maîtrise du combat au corps-à-corps dans le sable.'),
('Modèle aristocratique rebelle', 8, 'Recherche une actrice au tempérament de feu caché sous une froideur apparente, pour une romance d''époque poignante. Capacité à transmettre des émotions intenses par de simples regards.'),
('Danseur(se) pour chorégraphie pastel', 9, 'Nous cherchons des talents à l''énergie inépuisable et au sourire ultra-brite. Capacité à chanter en chœur et à porter du rose fluo toute la journée avec un enthousiasme non dissimulé.'),
('Homme de main philosophe', 10, 'Recherche un profil au verbe haut, capable de débattre avec passion de la culture fast-food européenne juste avant de passer à l''action. Costume noir et répartie cinglante de rigueur.'),
('Courtier en bourse survolté', 11, 'Profil hyperactif, capable d''improviser des discours galvanisants. Vous devez pouvoir hurler dans un micro, danser frénétiquement et jouer une absence totale d''inhibition morale.'),
('Habitant de Pandora en motion capture', 12, 'Cherchons des acteurs extrêmement expressifs et agiles. L''intégralité du rôle sera tournée en combinaison moulante avec des capteurs sur le visage. Souplesse féline exigée.'),
('Insomniaque nihiliste', 13, 'Recherche un profil émacié, au regard cerné et désabusé. Vous devrez maîtriser la narration en voix off. Première règle de ce casting : ne pas poser de questions sur la fin du script.');


INSERT INTO `acteurs` (`genre`, `nom`, `prenom`, `experience`, `email`, `mdp`, `telephone`, `disponible`) VALUES
(1, 'DiCaprio', 'Leonardo', 30, 'leonardo@leonardo.com', 'motdepasse123', '0612345601', 'non disponible'),
(1, 'Pitt', 'Brad', 35, 'brad@brad.com', 'motdepasse123', '0612345602', 'disponible'),
(0, 'Robbie', 'Margot', 15, 'margot@margot.com', 'motdepasse123', '0612345603', 'non disponible'),
(0, 'Stone', 'Emma', 15, 'emma@emma.com', 'motdepasse123', '0612345604', 'disponible'),
(1, 'Murphy', 'Cillian', 25, 'cillian@cillian.com', 'motdepasse123', '0612345605', 'disponible'),
(1, 'Chalamet', 'Timothée', 10, 'timothee@timothee.com', 'motdepasse123', '0612345606', 'non disponible'),
(0, 'Johansson', 'Scarlett', 25, 'scarlett@scarlett.com', 'motdepasse123', '0612345607', 'disponible'),
(1, 'Bale', 'Christian', 30, 'christian@christian.com', 'motdepasse123', '0612345608', 'non disponible'),
(0, 'Cotillard', 'Marion', 25, 'marion@marion.com', 'motdepasse123', '0612345609', 'disponible'),
(1, 'Sy', 'Omar', 20, 'omar@omar.com', 'motdepasse123', '0612345610', 'non disponible'),
(0, 'Portman', 'Natalie', 25, 'natalie@natalie.com', 'motdepasse123', '0612345611', 'disponible'),
(1, 'Gosling', 'Ryan', 25, 'ryan@ryan.com', 'motdepasse123', '0612345612', 'non disponible'),
(0, 'Blanchett', 'Cate', 30, 'cate@cate.com', 'motdepasse123', '0612345613', 'disponible'),
(1, 'Jackson', 'Samuel', 45, 'samuel@samuel.com', 'motdepasse123', '0612345614', 'non disponible'),
(0, 'Streep', 'Meryl', 45, 'meryl@meryl.com', 'motdepasse123', '0612345615', 'disponible'),
(1, 'Cruise', 'Tom', 40, 'tom@tom.com', 'motdepasse123', '0612345616', 'non disponible'),
(0, 'Pugh', 'Florence', 10, 'florence@florence.com', 'motdepasse123', '0612345617', 'disponible'),
(1, 'Pattinson', 'Robert', 20, 'robert@robert.com', 'motdepasse123', '0612345618', 'non disponible'),
(0, 'Lawrence', 'Jennifer', 15, 'jennifer@jennifer.com', 'motdepasse123', '0612345619', 'disponible');



INSERT INTO `inscriptions` (`acteur`, `offre`, `statut`) VALUES
(1, 1, 'accepté'),
(1, 11, 'accepté'),
(2, 13, 'accepté'),
(3, 9, 'accepté'),
(3, 11, 'refusé'),
(4, 9, 'refusé'),
(5, 2, 'accepté'),
(6, 7, 'accepté'),
(6, 3, 'refusé'),
(7, 4, 'accepté'),
(8, 2, 'refusé'),
(9, 1, 'en attente'),
(10, 6, 'accepté'),
(11, 12, 'en attente'),
(12, 9, 'accepté'),
(14, 10, 'accepté'),
(16, 3, 'en attente'),
(17, 7, 'en attente'),
(18, 13, 'refusé');

logins :

voir db

admin@admin.com
admin

https://image.tmdb.org/t/p/original/oD8WSVqz84ZRfelkr7JPeJwR9Iv.jpg