CREATE DATABASE `skola` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- CREATE TABLE CUSTOMERS(
--   ID   INT              NOT NULL,
--   NAME VARCHAR (20)     NOT NULL,
--   AGE  INT              NOT NULL,
--   ADDRESS  CHAR (25) ,
--   SALARY   DECIMAL (18, 2) DEFAULT 500
--);

CREATE TABLE customers(
    `id` INT PRIMARY KEY,
    `name` VARCHAR(20) NOT NULL,
    `age` INT NOT NULL,
    `address` CHAR(25),
    `salary` DECIMAL(18,2) DEFAULT 500
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `tasks` (
    `task_id` INT UNIQUE,
    `title` VARCHAR(255) NOT NULL,
    `start_date` DATE,
    `due_date` DATE,
    `status` TINYINT NOT NULL,
    `description` TEXT
)  ENGINE=INNODB;

-- U tabeli CUSTOMERS dodati kolonu active tipa BOOLEAN.
-- U tabeli CUSTOMERS dodati kolonu state tipa VARCHAR(90).
-- U tabeli CUSTOMERS dodati kolonu number_of_visits tipa TINYINT.
-- U tabeli TASKS dodati kolonu priority TINYINT NOT NULL.
ALTER TABLE `customers` ADD `active` BOOLEAN,
ADD `state` VARCHAR(90),
ADD `number_of_visits` TINYINT;

ALTER TABLE `tasks` ADD `priority` TINYINT NOT NULL;
ALTER TABLE `tasks` ADD PRIMARY KEY(`task_id`);

-- UBACIVANJE REDOVA 
INSERT INTO `customers` VALUES
(1,"Ana",25,"Bubanjskih heroja 48",600,1,"Srbija",37);

INSERT INTO `customers`(`name`,`id`,`age`,`active`,`state`,`number_of_visits`) VALUES 
("Bojana",2,39,0,"Srbija",16),
("Dejan",3,31,0,"Crna Gora",3);

INSERT INTO `tasks`
(`task_id`, `title`, `start_date`, `due_date`, `status`, `description`, `priority`)
VALUES
(1,"Čas iz ITBootcampa","2023-06-02","2023-06-02",1,"Čas iy baza",1),
(3,"Uradi domaći zadatak","2023-06-02",NULL,1,"Uradi domaći zadatak",1);

INSERT INTO `tasks`
(`task_id`, `title`, `start_date`, `due_date`, `status`, `description`, `priority`)
VALUES
(2,"Šetnja","2023-06-02","2023-06-02",1,"Lagana Šetnja",0);
--------------------------------------------------------------------
--UPITI
--Iz tabele customers, pročitati:
--Sve različite države,
-- Sve različite plate.
-- Iz tabele tasks, pročitati:
-- Sve različite statuse,
-- Sve različite prioritete.
SELECT DISTINCT `state` FROM `customers`;
SELECT DISTINCT `salary` FROM `customers`;
SELECT DISTINCT `status` AS `nesto` FROM `tasks`;
SELECT DISTINCT `priority` AS `prioritet` FROM `tasks`;

-- Iz tabele customers, pročitati sve klijente:
-- Koji dolaze iz Srbije,
SELECT * FROM `customers` WHERE state="Srbija";
-- Koji imaju platu jednaku (manju, veću) od 500.
SELECT * FROM `customers` WHERE `salary`=500;
-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji je status aktivan (1),
SELECT * FROM `tasks` WHERE `status`=1;
-- Čiji je prioritet nizak (0)
SELECT * FROM `tasks` WHERE `priority`=0;

-- Iz tabele customers, pročitati sve klijente:
-- Čija je plata između 300 i 800,
SELECT * FROM `customers` WHERE `salary` BETWEEN 300 AND 800;
-- Koji su iz Srbije, Rumunije ili Bugarske,
SELECT * FROM `customers` WHERE state IN ("Srbija","Rumunija","Bugarska");
-- Koju potiču iz zemlje koja počinje na slovo “S”.
SELECT * FROM `customers` WHERE state LIKE ("S%");
-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji id pripada skupu {1, 4, 8, 12},
SELECT * FROM `tasks` WHERE `task_id` IN (1,4,8,12);
-- Čiji je početak veći od 2019-01-01,
SELECT * FROM `tasks` WHERE `start_date`>"2019-01-01";
-- Čiji je status različit od neaktivan.
SELECT * FROM `tasks` WHERE `status` !=0;
SELECT * FROM `tasks` WHERE NOT `status`=0;

-- iz tabele customers, pročitati sve klijente:
-- Koji su iz Srbije a plata je 600,
SELECT * FROM `customers` WHERE `state`="Srbija" AND `salary`=600;
-- Čije ime počinje na S ili imaju manje od 30god.
SELECT * FROM `customers` WHERE `name` LIKE "S%" OR `age`<30;
-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji je status različit od aktivan i prioritet visok,
-- Čiji datum nije veći od 2019-01-01.

-- U tabeli customers odrediti:
-- Broj radnika
SELECT COUNT(*) FROM `customers`;
-- Minimalnu platu
SELECT MIN(`salary`) FROM `customers`;
-- Maksimalnu platu
SELECT MAX(`salary`) FROM `customers`;
-- Ukupnu platu
SELECT SUM(`salary`) FROM `customers`;
-- Prosečnu platu
SELECT AVG(`salary`) FROM `customers`;

-----------------------------------------------------------------
-- ISPOCETKA FAKULTET

-- Napraviti bazu podataka fakultet i sledeće tabele u njoj:
-- predmeti (id, naziv, smer)
-- studenti (indeks, ime, prezime)
-- ispiti (id, datum, ocena)
-- nastavnici (id, ime, prezime)

CREATE TABLE `ispiti`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `datum` DATE,
    `ocena` TINYINT
) ENGINE=InnoDB;

CREATE TABLE `studenti`(
    `indeks` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `nastavnici`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `predmeti`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45),
    `smer` VARCHAR(45)
) ENGINE=InnoDB;

ALTER TABLE `ispiti` ADD `student_indeks` VARCHAR(20) NOT NULL;
ALTER TABLE `ispiti` ADD FOREIGN KEY(`student_indeks`) REFERENCES `studenti`(`indeks`) ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE `ispiti` ADD `id_nastavnik` INT NOT NULL,
ADD FOREIGN KEY(`id_nastavnik`) REFERENCES `nastavnici`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `ispiti` ADD `id_predmet` INT NOT NULL,
ADD FOREIGN KEY(`id_predmet`) REFERENCES `predmeti`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

-- Jedna katedra može imati više predavača, a takođe i jedan predavač može predavati na više katedri.
-- id, naziv_katedre

CREATE TABLE `katedra`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `katedra_veza_nastavnik`(
    `id_nastavnik` INT NOT NULL,
    `id_katedra` INT NOT NULL
) ENGINE=InnoDB;

ALTER TABLE `katedra_veza_nastavnik`
ADD FOREIGN KEY(`id_nastavnik`) REFERENCES `nastavnici`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD FOREIGN KEY(`id_katedra`) REFERENCES `katedra`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

------------------------------------------------------------------------------
-- upiti
SELECT * FROM ispiti 
LEFT JOIN studenti ON ispiti.student_indeks=studenti.indeks
LEFT JOIN predmeti ON ispiti.id_predmet=predmeti.id
LEFT JOIN nastavnici ON ispiti.id_nastavnik=nastavnici.id;

--2
SELECT * FROM ispiti 
LEFT JOIN studenti ON ispiti.student_indeks=studenti.indeks
LEFT JOIN predmeti ON ispiti.id_predmet=predmeti.id
LEFT JOIN nastavnici ON ispiti.id_nastavnik=nastavnici.id
WHERE ispiti.datum="2023-04-17";

-- Za dato ime i prezime studenta, odrediti njegovu prosečnu ocenu.
SELECT AVG(ispiti.ocena) FROM ispiti 
LEFT JOIN studenti ON ispiti.student_indeks=studenti.indeks
LEFT JOIN predmeti ON ispiti.id_predmet=predmeti.id
LEFT JOIN nastavnici ON ispiti.id_nastavnik=nastavnici.id
WHERE studenti.ime="Marijana" and studenti.prezime="Tomic";

-- Za dat datum odrediti prosečnu ocenu svih ispita koji su se polagali u toj godini.
SELECT AVG(ispiti.ocena) FROM ispiti 
LEFT JOIN studenti ON ispiti.student_indeks=studenti.indeks
LEFT JOIN predmeti ON ispiti.id_predmet=predmeti.id
LEFT JOIN nastavnici ON ispiti.id_nastavnik=nastavnici.id
WHERE year(ispiti.datum)=year("2023-04-17");
























