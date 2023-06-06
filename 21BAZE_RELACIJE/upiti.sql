CREATE DATABASE `drustvena_mreza`;

-- pravljenje tabele korisnici
CREATE TABLE `korisnici`(
    `id` INT PRIMARY KEY,
    `korisnicko_ime` VARCHAR(45),
    `lozinka` VARCHAR(45)
);

CREATE TABLE `profili`(
    `id` INT PRIMARY KEY,
    `adresa` VARCHAR(45),
    `telefon` VARCHAR(45),
    `korisnik_id` INT -- ime je id_jednina tabele na koju se odnosi, zaboravili smo da stavimo UNIQUE da bude veza 1:1, u vezi 1:1 treba da je NOT NULL
);

-- dodavanje stranog kljuca u postojecu tabelu koja vec ima polje
ALTER TABLE `profili` 
ADD FOREIGN KEY (`korisnik_id`) -- polje iz iste tabele
REFERENCES `korisnici`(`id`); -- na sta se odnosi-druga tabela(ime njenog polja)

-- za naknadno menjanje ENGINE, kome je po default myISAM
ALTER TABLE `profili` ENGINE=InnoDB;
ALTER TABLE `korisnici` ENGINE=InnoDB;
-- ako je menjano, onda mora ponovo da se izvrsi dodavanje primarnog kljuca!

-- da bi bila 1:1 veza , mora strani kljuc da je unique
ALTER TABLE `profili` ADD UNIQUE(`korisnik_id`);

INSERT INTO `korisnici`(`id`,`korisnicko_ime`,`lozinka`) -- smem da izostavim ona koja mogu biti NULL
VALUES
(1,"Pera_peric",1234),
(2,"mika_mikic",12345),
(5,"nikola_nikolic",1212); 

INSERT INTO `profili` (`id`, `korisnik_id`, `adresa`) VALUES
(1,5,"adresa korisnika id=5"),
(10,2,"adresa korisnika id=2");

-- nemam korisnika 50, dakle nije moguce
INSERT INTO `profili` (`id`, `korisnik_id`, `adresa`) VALUES
(2,50,"adresa korisnika id=50");

-- promena iz RESTRICT u CASCADE
ALTER TABLE `profili` DROP FOREIGN KEY `profili_ibfk_1`; ALTER TABLE `profili` ADD CONSTRAINT `profili_ibfk_1` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnici`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

-- veza 1:N
CREATE TABLE `objave`(
    `id` INT PRIMARY KEY,
    `naslov_objave` VARCHAR(45) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `komentari`(
    `id` INT PRIMARY KEY,
    `komentar` VARCHAR(255) NOT NULL,
    `objava_id` INT NOT NULL
) ENGINE=InnoDB;

ALTER TABLE `komentari` 
ADD CONSTRAINT `komentari_objava_fk` -- ADD je obavezno, nastavak nije 
FOREIGN KEY (`objava_id`) 
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `objave` (`id`, `naslov_objave`) VALUES
(1, "moja prva objava"),
(2, "moja druga objava"),
(3, "moja treca objava");

INSERT INTO `komentari` (`id`, `objava_id`, `komentar`) VALUES
(1,1, 'Komentar 1 za objavu 1'),
(2,1, 'Komentar 2 za objavu 1'),
(3,3, 'Komentar 1 za objavu 3');

-- ne moze jer nemamo za sada objavu 100
INSERT INTO `komentari` (`id`, `objava_id`, `komentar`) VALUES
(104,100, 'Komentar 1 za objavu 100');

-- veza N:M
CREATE TABLE `kategorije`(
    `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
) ENGINE=InnoDB;

-- moze oba nacina, uz AUTO_INCREMENT
INSERT INTO `kategorije` (`id`,`naziv`) VALUES
(1, "ekonomija"),
(null,"crna hronika");

INSERT INTO `kategorije` (`naziv`) VALUES
("ljubav"),
("drustvo");
INSERT INTO `kategorije` (`naziv`) VALUES
("zdravlje");

CREATE TABLE `kategorije_has_objave` (
    `kategorija_id` INT(10) UNSIGNED NOT NULL, -- PROMENI
    `objava_id` INT NOT NULL
) ENGINE=InnoDB; 

ALTER TABLE `kategorije_has_objave`
ADD CONSTRAINT `kat_obj_kategorija_fk`
FOREIGN KEY (`kategorija_id`)
REFERENCES `kategorije`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE,

ADD CONSTRAINT `kat_obj_objava_fk`
FOREIGN KEY (`objava_id`)
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

-- ZA PROMENU TIPA KOLONE !!!
ALTER TABLE `kategorije_has_objave`
CHANGE `kategorija_id`
`kategorija_id` INT(10) UNSIGNED NOT NULL;

-- DODAVANJE REDOVA u medjutabelu
INSERT INTO `kategorije_has_objave` (`kategorija_id`, `objava_id`) VALUES
(1, 1),
(5, 1),
(2, 2),
(4, 2),
(1, 3);











