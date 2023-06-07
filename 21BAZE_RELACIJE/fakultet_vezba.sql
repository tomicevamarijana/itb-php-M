-- Napraviti bazu podataka fakultet i sledeće tabele u njoj:
-- predmeti (id, naziv, smer)
-- studenti (indeks, ime, prezime)
-- ispiti (id, datum, ocena)
-- nastavnici (id, ime, prezime)

CREATE DATABASE `fakultet` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

USE `fakultet`;

CREATE TABLE `predmeti`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45),
    `smer` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `studenti`(
    `indeks` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `ispiti`(
    `id` INT PRIMARY KEY,
    `datum` DATE,
    `ocena` TINYINT(2)
) ENGINE=InnoDB;

CREATE TABLE `nastavnici`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL
) ENGINE=InnoDB;

---------------------------------------------------------
-- veza 1:N
-- student, ispit
-- student, predmet
-- student, nastavnik

ALTER TABLE `ispiti` 
ADD `student_indeks` VARCHAR(20) NOT NULL,
ADD FOREIGN KEY(`student_indeks`) REFERENCES `studenti`(`indeks`) ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE `ispiti` 
ADD `predmet_id` INT NOT NULL,
ADD `nastavnik_id` INT NOT NULL,
ADD FOREIGN KEY(`predmet_id`) REFERENCES `predmeti`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD FOREIGN KEY(`nastavnik_id`) REFERENCES `nastavnici`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
---------------------------------------------------------------------------------------------------------
-- prosirivanje baze 
-- Proširiti prethodnu bazu podataka sledećim tabelama:
-- zvanje (id, naziv_zvanja)
-- smer (id, naziv_smera)
-- katedra (id, naziv_katedre)

CREATE TABLE `zvanje`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `naziv_zvanja` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `smer`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `naziv_smera` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `katedra`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `naziv_katedre` VARCHAR(45)
) ENGINE=InnoDB;
---------------------------------------------------------
-- Jedan predavač može da ima samo jedno zvanje. Jedno zvanje može da ima više predavača.
-- 1:N 
-- nastavnik, zvanje
ALTER TABLE `nastavnici` ADD `zvanje_id` INT NOT NULL,
ADD FOREIGN KEY (`zvanje_id`) REFERENCES `zvanje`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

-- Jedan smer može da ima više studenata koji ga pohađaju, ali jedan student može pohađati samo jedan smer.
-- 1:N 
-- smer, student
ALTER TABLE `studenti` ADD `smer_id` INT NOT NULL,
ADD FOREIGN KEY(`smer_id`) REFERENCES `smer`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
----------------------------------------------------------------------------------------------
-- Jedna katedra može imati više predavača, a takođe i jedan predavač može predavati na više katedri.
-- N:M
-- katedra, predavaci

CREATE TABLE `katedra_veza_nastavnici`(
    `katedra_id` INT NOT NULL,
    `nastavnik_id` INT NOT NULL
) ENGINE=InnoDB;

ALTER TABLE `katedra_veza_nastavnici` 
ADD FOREIGN KEY(`katedra_id`) REFERENCES `katedra`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD FOREIGN KEY(`nastavnik_id`) REFERENCES `nastavnici`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;



















-- insertovanje redova

INSERT INTO `nastavnici` (`id`, `ime`, `prezime`) VALUES
(1, 'Stefan ', 'Stanimirović'),
(2, 'Elizabeta', 'Markuš Mitrinović'),
(3, 'Milena', 'Đoređević');

INSERT INTO `predmeti` (`id`, `naziv`) VALUES
(1, 'Css'),
(2, 'Html'),
(3, 'PHP'),
(4, 'MySql'),
(5, 'HR');

INSERT INTO `ispiti` (`id`, `datum`, `ocena`, `student_indeks`, `predmet_id`, `nastavnik_id`)
VALUES
(1, '2023-04-17', 5, 'WEB 1/2023', 1, 2),
(2, '2023-04-17', 8, 'WEB 10/2023', 1, 2),
(3, '2023-04-17', 6, 'WEB 11/2023', 1, 2),
(4, '2023-04-17', 9, 'WEB 12/2023', 1, 2),
(5, '2023-04-17', 7, 'WEB 13/2023', 1, 2);





