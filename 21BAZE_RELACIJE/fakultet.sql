-- kreiranje baze
CREATE DATABASE `fakultet` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `predmeti`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(45),
    `SMER` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `studenti`(
    `indeks` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(45),
    `prezime` VARCHAR(45)
) ENGINE=InnoDB;

CREATE TABLE `ispiti`(
    `id` INT PRIMARY KEY,
    `datum` DATE,
    `ocena` TINYINT
) ENGINE=InnoDB;

CREATE TABLE nastavnici(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45),
    `prezime` VARCHAR(45)
) ENGINE=InnoDB;

-- veze

-- N:M 
-- student, ispit 

-- dodavanje kolone u postojecu tabelu 
ALTER TABLE `ispiti` ADD `student_indeks` VARCHAR(20);
ALTER TABLE `ispiti` ADD FOREIGN KEY (`student_indeks`) REFERENCES `studenti`(`indeks`);

ALTER TABLE `ispiti` ADD `predmet_id` INT;
ALTER TABLE `ispiti` ADD FOREIGN KEY (`predmet_id`) REFERENCES `predmeti`(`id`);

ALTER TABLE `ispiti` ADD `nastavnik_id` INT;
ALTER TABLE `ispiti` ADD FOREIGN KEY (`nastavnik_id`) REFERENCES `nastavnici`(`id`);

-- ubacivanje redova

-- upiti 
SELECT * FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;

-- prvi zad
SELECT CONCAT(studenti.ime, " ", studenti.prezime) AS `student`, 
`predmeti`.`naziv`,
CONCAT(nastavnici.ime, " ", nastavnici.prezime) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks` AND studenti.ime LIKE "M%"
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;

-- drugi zad
SELECT CONCAT(studenti.ime, " ", studenti.prezime) AS `student`, 
`predmeti`.`naziv`,
CONCAT(nastavnici.ime, " ", nastavnici.prezime) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE ispiti.datum="2023-05-15";
-- uslov u where, da bi uslovi bili puni redovi

-- zad 3
SELECT CONCAT(studenti.ime, " ", studenti.prezime) AS `student`, 
`predmeti`.`naziv`,
CONCAT(nastavnici.ime, " ", nastavnici.prezime) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE studenti.ime='Marijana' AND studenti.prezime="Tomic";

-- zad 4
SELECT CONCAT(studenti.ime, " ", studenti.prezime) AS `student`, 
`predmeti`.`naziv`,
CONCAT(nastavnici.ime, " ", nastavnici.prezime) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE studenti.ime='Marijana' AND studenti.prezime="Tomic" AND ispiti.ocena>=6;








