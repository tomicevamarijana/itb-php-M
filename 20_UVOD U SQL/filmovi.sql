--komanda za kreiranje baze
CREATE DATABASE `videoteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
USE `videoteka`;

-- komanda za kreiranje tabele
CREATE TABLE `filmovi`(
    `id` INT,
    `naslov` VARCHAR(255) NOT NULL,
    `reziser` VARCHAR(255) NOT NULL,
    `god_izdavanja` YEAR NOT NULL,
    `žanr` VARCHAR(255) NOT NULL,
    `ocena` DECIMAL(4,2),
    PRIMARY KEY (id)
);
-- izmena naziva tabele
ALTER TABLE `filmovi`
CHANGE COLUMN `reziser` `režiser` VARCHAR(255) NOT NULL;

-- dodavanje podataka u tabelu
INSERT INTO `filmovi` VALUES
(1, "La vita e bella", "Roberto Benigni", 1997, "Ratni", 8.6);

INSERT INTO `filmovi` VALUES
(2, "Forrest Gump", "Robert Zemeckis", 1994, "Drama", 8.8),
(3, "Into the Wild", "Sean Penn", 2007, "Avantura", 8.1),
(4, "K-PAX", "Iain Softley", 2001, "Naučna fantastika", 7.4),
(5, "The Life of David Gale", "Alan Parker", 2003, "Drama", 7.5),
(6, "Usual Suspcts", "Bryan Singer", 2005, "Triler", 8.5),
(7, "Silence of the Lambs", "Jonathan Demme", 1991, "Triler", 8.6),
(8, "Već viđeno", "Goran Marković", 1987, "Horor", 7.7),
(9, "Ubistvo s predumišljajem", "Goran Stojanović", 1995, "Ljubavni", 8.1),
(10, "Točkovi", "Đorđe Milosavljević", 1998, "Komedija", 7.5);

INSERT INTO `filmovi` VALUES
(11, "Majstori, majstori", "Goran Marković", 1980, "Drama", 8.1);

INSERT INTO `filmovi` VALUES
(12, "Oldboy", "Park Chan-wook", 2003, "Triler", 8.4),
(13, "Profesionalac", "Dušan Kovačević", 2003, "Komedija", 8.4);

-- upiti

-- Selektovati sve filmove gde je žanr tragedija, komedija ili drama.
SELECT * FROM `filmovi`
WHERE `žanr` IN ("Tragedija", "Komedija", "Drama");

-- Selektovati sve filmove kojima je ocena između 5 i 10.
SELECT * FROM `filmovi`
WHERE `ocena` BETWEEN 5 AND 10;

-- Selektovati režisere (bez ponavljanja) koji su režirali filmove izdate 2003. godine i poređati ih abecednim redom. 
SELECT DISTINCT `režiser` FROM `filmovi`
WHERE `god_izdavanja`=2003
ORDER BY `režiser`;

-- Selektovati sve filmove tako da im zanr nije komedija.
SELECT * FROM `filmovi`
WHERE NOT `žanr`="Komedija";

-- Prikazati sve informacije o najbojle rangiranom filmu
SELECT * FROM `filmovi`
ORDER BY `ocena` DESC
LIMIT 1;

-- ili
SELECT * FROM `filmovi`
WHERE `ocena`=(SELECT MAX(`ocena`) FROM `filmovi`)
LIMIT 1;

-- Prikazati sve informacije o najbolje rangiranoj drami.
SELECT * FROM `filmovi` 
WHERE `žanr`="Drama"
ORDER BY `ocena` DESC
LIMIT 1;

-- Selektovati trojicu rezisera ciji filmovi imaju najbolje ocene.
SELECT `režiser` FROM `filmovi` 
ORDER BY `ocena` DESC
LIMIT 3;

-- Selektovati sve žanrove filmova, bez ponavljanja.
SELECT DISTINCT `žanr` FROM `filmovi`;
-- Broj razlicitih zanrova
SELECT COUNT(DISTINCT `žanr`) AS "Broj žanrova" FROM `filmovi`;

-- Selektovati sve filmove u obliku naslov (režiser) na primer Plane (Jean-François Richet)
SELECT CONCAT(`naslov`, " (", `režiser`, ")") AS "Film (režiser)" FROM `filmovi`;

-- Selektovati sve filmove u obliku naslov (režiser) – godina izdanja na primer Plane (Jean-François Richet) - 2023 . 
-- Selektovane filmove sortirati rastuće prema godini izdanja.
SELECT CONCAT(`naslov`, " (", `režiser`, ")", " - ", `god_izdavanja`) AS "Film (režiser) - godina izdanja" FROM `filmovi`
ORDER BY `god_izdavanja`;

-- Odrediti prosečnu ocenu fimova koji su izdati nakon 2000 godine
SELECT AVG(`ocena`) AS "Prosečna ocena" FROM `filmovi`
WHERE `god_izdavanja`>2000;










