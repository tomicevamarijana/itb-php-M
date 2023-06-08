-- Napraviti bazu podataka biblioteka, i sledeće tabele u njoj:
-- clanovi (id, ime, prezime, adresa, telefon)
-- knjige(id, naziv, pisac)
-- zanr (id, naziv)
-- zaduzenje (id, datum, vratio)
-- pisac (id, ime, prezime, bio, god_rodj)

CREATE DATABASE `biblioteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
USE `biblioteka`;

CREATE TABLE `clanovi`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `adresa` VARCHAR(45),
    `telefon` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `knjige`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45),
    `pisac` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `zanr`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `zaduzenje`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `datum` DATE,
    `vratio` BOOLEAN DEFAULT 0
) ENGINE=InnoDB;

CREATE TABLE `pisac`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `bio` TEXT,
    `god_rodj` YEAR
) ENGINE=InnoDB;

-----------------------------------------------------------------------------------------------------------------------------
-- Jedan žanr može biti odrednica za više knjiga i jedna knjiga može pripadati u više žanrova.
-- N:M
-- knjiga i zanr

CREATE TABLE `knjige_veza_zanr`(
    `id_knjiga` INT NOT NULL,
    `id_zanr` INT NOT NULL
    -- nazivaju se id_jednina tabele na koju se odnosi
) ENGINE=InnoDB;

-- dodavanje stranih kljuceva u trecu tabelu
ALTER TABLE `knjige_veza_zanr` ADD FOREIGN KEY (`id_knjiga`) REFERENCES `knjige`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE `knjige_veza_zanr` ADD FOREIGN KEY(`id_zanr`) REFERENCES `zanr`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;
---------------------------------------

-- jedan pisac može napisati više knjiga, a takođe jedna knjiga može biti napisana od strane jednog ili više pisaca.
-- N:M
-- pisac,knjiga

-- brisanje kolone `pisac` u `knjige`
ALTER TABLE `knjige` DROP `pisac`;

-- istovremeno pravljenje trece tabele, dodavanje stranih kljuceva:
CREATE TABLE `pisac_veza_knjiga`(
    `id_pisac` INT NOT NULL,
    `id_knjiga` INT NOT NULL,
    CONSTRAINT `pisac_veza_knjiga_Pisac_Fk` FOREIGN KEY(`id_pisac`) REFERENCES `pisac`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
    CONSTRAINT `pisac_veza_knjiga_Knjiga_Fk` FOREIGN KEY(`id_knjiga`) REFERENCES `knjige`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `pisac_veza_knjiga`(
    `id_pisac` INT NOT NULL,
    `id_knjiga` INT NOT NULL,
    FOREIGN KEY(`id_pisac`) REFERENCES `pisac`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
    FOREIGN KEY(`id_knjiga`) REFERENCES `knjige`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB;


------------------------------------------------------------------------------------------------------------------------------
-- Jedna osoba može više puta zaduživati knjige i jedna knjiga može biti zadužena od strane više osoba.
-- 1:N ,dva puta
-- zaduzenje, knjige
-- zaduzenje, clanovi

-- dodavanje kolona, 
ALTER TABLE `zaduzenje` ADD `id_clan` INT NOT NULL;
ALTER TABLE `zaduzenje` ADD `id_knjiga` INT NOT NULL;

-- zatim pretvaranje kolona u strani kljuc 
ALTER TABLE `zaduzenje` ADD FOREIGN KEY (`id_clan`) REFERENCES `clanovi`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE `zaduzenje` ADD FOREIGN KEY (`id_knjiga`) REFERENCES `knjige`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;

-- a moze i sve odjednom:
ALTER TABLE `zaduzenje`
ADD `id_knjiga` INT NOT NULL,
ADD FOREIGN KEY (`id_knjiga`) REFERENCES `knjige`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;







-- insertovanje redova
INSERT INTO `zanr` VALUES
(NULL,"klasik"),
(NULL,"psihologija"),
(NULL,"istorija"),
(NULL,"naucna fantastika");

INSERT INTO `knjige` VALUES
(NULL,"Na Drini Cuprija","Andric"),
(NULL,"Besnilo","Pekic"),
(NULL,"Enciklopedija mrtvih","Kis");
-- UPDATE `knjige` SET `naziv` = 'Na Drini Cuprija' WHERE `knjige`.`id` = 1;
INSERT INTO `knjige_veza_zanr` VALUES
(1,1),
(2,1),
(2,2);

INSERT INTO `clanovi` VALUES
(NULL,"Marijana","Tomic","Marijanina adresa","Marijanin br tel"),
(NULL,"Ana","Tomic","Anina adresa","Anin br tel"),
(NULL,"Natasa","Lukic","Natasina adresa","Natasin br tel");

INSERT INTO `zaduzenje` VALUES
(NULL,"2023-06-07",0,3,3),
(NULL,"2023-06-06",1,3,2),
(NULL,"2023-06-05",1,2,2);

INSERT INTO `pisac` VALUES
(NULL,"Ivo","Andric","biografija ive andrica",1901),
(NULL,"Borislav","Pekic","biografija borislava pekica",1940),
(NULL,"Danilo","Kis","biografija danila kisa",1945);

INSERT INTO `pisac_veza_knjiga` VALUES
(1,1),
(2,2),
(1,3);

SELECT * FROM product_categories 
LEFT JOIN products ON product_categories.id_product=products.id
LEFT JOIN categories ON product_categories.id_category=categories.id;
--
SELECT MAX(products.price) FROM product_categories 
LEFT JOIN products ON product_categories.id_product=products.id
LEFT JOIN categories ON product_categories.id_category=categories.id
WHERE categories.category_name="Garden";

SELECT products.product_name AS najskuplji_proizvod, products.price AS cena FROM product_categories 
LEFT JOIN products ON product_categories.id_product=products.id
LEFT JOIN categories ON product_categories.id_category=categories.id
WHERE categories.category_name="Garden"
ORDER BY products.price DESC
LIMIT 1;



