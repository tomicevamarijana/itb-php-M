-- kreiranje baze
CREATE DATABASE nova CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

USE `nova`;

CREATE TABLE `customers`(
    `id` INT,
    `name` VARCHAR(20) NOT NULL,
    `age` TINYINT NOT NULL,
    `address` CHAR(25),
    `salary` DECIMAL(18,2) DEFAULT 500 --DECIMAL(size,d)
)

-- dodavanje primarnog kljuca u postojecu tabelu
ALTER TABLE `customers` ADD PRIMARY KEY(`id`);

-- dodavanje kolone u postojecu tabelu 
ALTER TABLE `customers` ADD `title` VARCHAR(255) NOT NULL;

-- brisanje kolone
ALTER TABLE `customers` DROP `title`;

-- za menjanje kolone u tabeli
ALTER TABLE `customers` CHANGE COLUMN `age` `godine` TINYINT NOT NULL;




-- RELACIONE BAZE

CREATE DATABASE `drustvena_mreza` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

USE `drustvena_mreza`;

CREATE TABLE `korisnici`(
    `id` INT PRIMARY KEY,
    `korisnicko_ime` VARCHAR(45),
    `lozinka` VARCHAR(45)
);

CREATE TABLE `profili`(
    `id` INT PRIMARY KEY,
    `adresa` VARCHAR(45),
    `telefon` VARCHAR(45),
    `id_korisnik` INT
);

-- veza 1:1 
--korisnici i profili

-- podesavanje tabele da je UNIQUE
ALTER TABLE `profili` ADD UNIQUE(`id_korisnik`);

-- dodavanje PRIMARY KEY u postojecu tabelu 
-- ALTER TABLE `customers` ADD PRIMARY KEY(`id`); 

-- podesavanje ENGINE u tabeli
ALTER TABLE `profili` ENGINE=InnoDB;
ALTER TABLE `profili` ENGINE=InnoDB;

-- dodavanje stranog kljuca u PROFILI
ALTER TABLE `profili` ADD FOREIGN KEY(`id_korisnik`)
REFERENCES `korisnici`(`id`);

-- ako hocemo da obrisemo strani kljuc, treba da znamo kako se zove
ALTER TABLE `profili` DROP FOREIGN KEY `profili_ibfk_1`;

-- dodavanje redova prvo u tabelu BEZ stranog kljuca
INSERT INTO `korisnici` VALUES 
(1, "Mika_Mikic", 123),
(2, "Nikola_Nikolic",456),
(5, "Pera_Peric",789);

-- zatim dodavanje u tabelu sa stranim kljucem
INSERT INTO profili (`id`,`id_korisnik`,`adresa`) VALUES
(1,1,"adresa 1 Mike Mikic"),
(2,2, "adresa 2 Nikole Nikolic"),
(3,5,"adresa 5 Pere Peric");

-- promena iz RESTRICT u CASCADE (bolje u bazi)
ALTER TABLE `profili` DROP FOREIGN KEY `profili_ibfk_1`; 
ALTER TABLE `profili` ADD CONSTRAINT `profili_ibfk_1` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnici`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

-- veza 1:N 
-- objave i komentari

CREATE TABLE `objave`(
    `id` INT PRIMARY KEY,
    `naslov_objave` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `komentari`(
    `id` INT PRIMARY KEY,
    `tekst_komentara` VARCHAR(45),
    `id_objava` INT NOT NULL -- ne sme UNIQUE za 1:N
) ENGINE=InnoDB;

-- dodavanje FOREIGN KEY
ALTER TABLE `komentari` ADD CONSTRAINT `komentari_objava_fk` FOREIGN KEY(`id_objava`) REFERENCES `objave`(`id`) 
ON DELETE CASCADE ON UPDATE CASCADE;




-- veza N:M
-- objave i kategorije
CREATE TABLE kategorije(
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naslov_objave` VARCHAR(45)
) ENGINE=InnoDB;









