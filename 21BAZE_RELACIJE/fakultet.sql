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

-- Za dato ime i prezime studenta, ispisati sve ispite koje je polagao dati student.
-- zad 3 - bolji nacin
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

-- beti, posle testa

--------------------------------------------------------------------
-- Za dat datum i nastavnika odrediti prosečnu ocenu svih ispita
-- koji su se polagali tog dana a koje je ocenio taj nastavnik.
SELECT AVG(ispiti.ocena) as prosecna_ocena FROM ispiti
LEFT JOIN nastavnici ON ispiti.nastavnik_id=nastavnici.id
WHERE ispiti.datum="2023-04-17"
AND nastavnici.ime="Stefan"
AND ispiti.ocena>5;

-- za dati datum ispisati imena i prezimena studenata koji nisu 
-- polagali ispit tog dana
-- probaj ovo sama
SELECT * FROM studenti 
WHERE studenti.indeks NOT IN (SELECT ispiti.student_indeks from ispiti where ispiti.datum="2023-05-18");

-- drugi nacin
SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student` FROM `studenti`
LEFT JOIN `ispiti` ON `ispiti`.`student_indeks`=`studenti`.`indeks` AND `ispiti`.`datum`='2023-05-18'
WHERE `ispiti`.`id` IS NULL;





