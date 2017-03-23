CREATE DATABASE idologis;
USE idologis;


CREATE TABLE admin(
	id int(10) PRIMARY KEY AUTO_INCREMENT,
	username varchar(255),
	password varchar(255)
);

CREATE TABLE type(
	id int(10) PRIMARY KEY AUTO_INCREMENT,
	libelle varchar(255)
);

CREATE TABLE secteur (
	id int(10) PRIMARY KEY AUTO_INCREMENT,
	libelle varchar(255)
);

CREATE TABLE vente(
	reference int(10) PRIMARY KEY AUTO_INCREMENT,
	id_type int(10),
	id_secteur int(10),
	surface int(10),
	chambres int(2),
	surface_terrain int(5),
	classe_energetique varchar(2),
	les_plus text,
	prix int(9),
	img varchar(255)
);

CREATE TABLE location(
	reference int(10) PRIMARY KEY AUTO_INCREMENT,
	id_type int(10),
	id_secteur int(10),
	surface int(10),
	chambres int(2),
	surface_terrain int(5),
	classe_energetique varchar(2),
	les_plus text,
	loyer int(9),
	img varchar(255)
);

ALTER TABLE vente
ADD CONSTRAINT FK_TypeVente
FOREIGN KEY (id_type) REFERENCES type(id);

ALTER TABLE vente
ADD CONSTRAINT FK_SecteurVente
FOREIGN KEY (id_secteur) REFERENCES secteur(id);

ALTER TABLE location
ADD CONSTRAINT FK_TypeLocation
FOREIGN KEY (id_type) REFERENCES type(id);

ALTER TABLE location
ADD CONSTRAINT FK_SecteurLocation
FOREIGN KEY (id_secteur) REFERENCES secteur(id);


INSERT INTO type VALUE (NULL, "Appartement");
INSERT INTO type VALUE (NULL, "Maison");
INSERT INTO type VALUE (NULL, "Pavillon");

INSERT INTO secteur VALUE (NULL, "Calais");
INSERT INTO secteur VALUE (NULL, "Dunkerque");
INSERT INTO secteur VALUE (NULL, "Lille");

INSERT INTO vente (id_type, id_secteur, surface, chambres, surface_terrain, classe_energetique, les_plus, prix, img)
VALUES (1, 1, 150, 3, 500, "B", "Piscine", 125900, "vente1");

INSERT INTO vente (id_type, id_secteur, surface, chambres, surface_terrain, classe_energetique, les_plus, prix, img)
VALUES (2, 2 , 72, 2, 130, "C", "", 53000, "vente2");

INSERT INTO location (id_type, id_secteur, surface, chambres, surface_terrain, classe_energetique, les_plus, loyer, img)
VALUES (3, 3, 150, 3, 500, "B", "Piscine", 125900, "location1");

INSERT INTO location (id_type, id_secteur, surface, chambres, surface_terrain, classe_energetique, les_plus, loyer, img)
VALUES (2, 2, 72, 2, 130, "C", "", 53000, "location2");

INSERT INTO admin VALUES (null, "root", "63a9f0ea7bb98050796b649e85481845");