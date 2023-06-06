-- kreiranje baze
CREATE DATABASE `biblioteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- tabele
CREATE TABLE `clanovi`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `adresa` VARCHAR(45),
    `telefon` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `knjige`(
    `id` INT PRIMARY KEY, -- kad je auto_increment, ne mora primary key
    `naziv` VARCHAR(45) NOT NULL,
    `pisac` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `zanr`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `zaduzenje`(
    `id` INT PRIMARY KEY,
    `datum` DATE,
    `vratio` BOOLEAN -- moglo je default 0 (NE FALSE) not null
) ENGINE=InnoDB;

CREATE TABLE `pisac`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `bio` VARCHAR(255), -- bolje TEXT
    `god_rodj` YEAR
) ENGINE=InnoDB;

-- N:M
-- zanr i knjiga
CREATE TABLE `zanr_knjiga_veza`(
    `id_zanr` INT,
    `id_knjiga` INT
) ENGINE=InnoDB;

ALTER TABLE `zanr_knjiga_veza` ADD CONSTRAINT `zanr_knjige_veza_knjigeFK` FOREIGN KEY (`id_knjiga`)
REFERENCES `knjige`(`id`); -- treba ON DELETE CASCADE ON UPDATE CASCADE

ALTER TABLE `zanr_knjiga_veza` ADD CONSTRAINT `zanr_knjige_veza_zanrFK` FOREIGN KEY (`id_zanr`)
REFERENCES `zanr`(`id`); -- treba ON DELETE NO ACTION ON UPDATE CASCADE
--  NO ACTION BRANI BRISANJE UKOLIKO POSTOJI STRANI KLJUC NA TO POLJE

-- 1:N
-- zaduzenje, clan
-- zaduzenje, knjiga


--dodavanje kolona u zaduzenje 
ALTER TABLE `zaduzenje` ADD `id_clan` INT; -- MOZDA NOT NULL
ALTER TABLE `zaduzenje` ADD `id_knjiga` INT; -- MOZDA NOT NULL

--dodavanje FOREIGN KEY u zaduzenje
ALTER TABLE `zaduzenje` ADD FOREIGN KEY(`id_clan`) REFERENCES `clanovi`(`id`);
ALTER TABLE `zaduzenje` ADD FOREIGN KEY(`id_clan`) REFERENCES `knjige`(`id`);

-- N:M
-- knjige, pisac

CREATE TABLE `knjiga_pisac_veza`(
    `id_knjiga` INT,
    `id_pisac` INT
) ENGINE=InnoDB;

-- dodavanje FOREIGN KEY u knjiga_pisac_veza ka knjiga
ALTER TABLE `knjiga_pisac_veza` ADD CONSTRAINT `knjiga_pisac_veza_knjigaFK` FOREIGN KEY(`id_knjiga`) REFERENCES `knjige`(`id`);
-- dodavanje FOREIGN KEY u knjiga_pisac_veza ka pisac
ALTER TABLE `knjiga_pisac_veza` ADD CONSTRAINT `knjiga_pisac_veza_pisacFK` FOREIGN KEY (`id_pisac`) REFERENCES `pisac`(`id`);

-- dodavanje podataka u knjige
INSERT INTO `knjige` VALUES
(1, "Knjiga 1", "Pisac 1"),
(2, "Knjiga 2", "Pisac 2"),
(3, "Knjiga 3", "Pisac 3");

INSERT INTO `zanr` VALUES
(10,"zanr 10"),
(11,"zanr 11"),
(12,"zanr 12");

INSERT INTO `zanr_knjiga_veza` VALUES
(10,1),
(11,1),
(12,1),
(10,2);

INSERT INTO `clanovi` VALUES
(1,"IME 1","IME 1","ADRESA 1","TELEFON 1"),
(2,"IME 2","IME 2","ADRESA 2","TELEFON 2"),
(3,"IME 3","IME 3","ADRESA 3","TELEFON 3");

INSERT INTO `zaduzenje` VALUES
(101,"2023-06-06",0,1,1),
(102,"2023-05-06",0,2,1),
(103,"2023-05-06",1,3,2);

--
INSERT INTO `pisac` VALUES
(111,"ime pisca 1","prezime pisca 1","bio pisca 1","1960"), -- GODINA MORA BR, NE STR
(112,"ime pisca 2","prezime pisca 2","bio pisca 2","1970"),
(113,"ime pisca 3","prezime pisca 3","bio pisca 3","1980");
-- PROMENILA , BOLJE BI BILO INT(4) UNSIGNED
UPDATE `pisac` SET `god_rodj` = '1955' WHERE `pisac`.`id` = 111;

INSERT INTO `knjiga_pisac_veza` VALUES
(1,111),
(2,111),
(2,112);

ALTER TABLE `knjige` DROP `pisac`;












