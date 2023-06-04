-- Citanje podataka iz baze
SELECT * FROM `tasks`;
SELECT `title`, `start_date`, `due_date` FROM `tasks`;
SELECT `name`, `age`, `address` FROM `customers`;

--dohvati sva razlicita imena koja imaju nasi potrosaci
SELECT  DISTINCT `name` FROM `customers`;
SELECT DISTINCT `name`, `age`, `address` FROM `customers`;
SELECT DISTINCT `name`, `id`, FROM `customers`;
SELECT DISTINCT `salary` FROM `customers`;

--Iz tabele customers, pročitati sve klijente:
--Koji dolaze iz Srbije,
--Koji imaju platu jednaku (manju, veću) od 500.

SELECT * FROM `customers` WHERE `state`='Srbija ';
SELECT * FROM `customers` WHERE `salary`>=500;

--Iz tabele tasks, pročitati sve zadatke:
--Čiji je status aktivan (1),
--Čiji je prioritet nizak (0)
SELECT `task_id`,`title`,`description`
FROM `tasks`
WHERE `priority`=1;

--iz tabele tasks, procitaj sve zadatke koji su prioritetni, a koji su zavrseni
SELECT `task_id`,`title`,`description`
FROM `tasks`
WHERE `priority`=1 
AND `due_date` IS NOT NULL;

--z tabele customers, pročitati sve klijente:
--Čija je plata između 300 i 800,
--Koji su iz Srbije, Rumunije ili Bugarske,


SELECT `name`,`address`,`state`,`salary`
FROM `customers`
WHERE `salary` BETEWEEN 300 AND 800;

-- Čija je plata između 500,600 ILI 700
SELECT `name`,`address`,`state`,`salary`
FROM `customers`
WHERE `salary`=500 or `salary`=600 OR `salary`=700; 

-- bolji nacin
SELECT `name`,`address`,`state`,`salary`
FROM `customers`
WHERE `salary` IN (500,600,700);

-- cije je ime ana, bojana ili vuk
SELECT `name`,`address`,`state`,`salary`
FROM `customers`
WHERE `name` IN ("Ana","Bojana","Vuk");

-- cije ime pocinje na slovo B
SELECT `name`,`address`,`state`,`salary`
FROM `customers`
WHERE `name` LIKE 'B%';

-- cije ime sadrzi slovo 'j'
SELECT `name`,`address`,`state`,`salary`
FROM `customers`
WHERE `name` LIKE '%j%';

-- Koji su iz Srbije, Rumunije ili Bugarske,
SELECT `name`,`address`,`state`,`salary`
FROM `customers`
WHERE `state` IN ("Srbija","Rumunija","Bugarska");

--Koju potiču iz zemlje koja počinje na slovo “S”.
SELECT `name`,`address`,`state`,`salary`
FROM `customers`
WHERE `state` LIKE 'S%';

-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji id pripada skupu {1, 4, 8, 12},
-- Čiji je početak veći od 2019-01-01,
-- Čiji je status različit od neaktivan.

SELECT `task_id`,`title`,`description`
FROM `tasks`
WHERE `task_id` IN (1,4,8,12);

SELECT `task_id`,`title`,`description`
FROM `tasks`
WHERE `start_date` > "2019-01-01";

SELECT `task_id`,`title`,`description`,`status`
FROM `tasks`
WHERE `status` != 0;

INSERT INTO `tasks`
VALUES
(4,"Polozi test", "2023-06-03","2023-07-07",1,"vazno",1);

-- limitiranje broja rezultata
SELECT * FROM `customers`
LIMIT 2;

SELECT * FROM `customers`
WHERE `name` LIKE 'B%'
LIMIT 1;

-- prikazi prva dva korisnika koji imaju dvocifren broj poseta
SELECT * FROM `customers` 
WHERE `number_of_visits` BETWEEN 10 AND 99
LIMIT 2;

--sortiranje
SELECT * FROM `customers` 
ORDER BY `name`;

--sortiranje od starijih ka mladjim
SELECT * FROM `customers` 
ORDER BY `age` DESC;

--svi korisnici po godinama od mladjih ka starijim,
-- pa od broju poseta od vise ka manje
SELECT * FROM `customers` 
ORDER BY `age` ASC, `number_of_visits` DESC;

--prikazi prva dva korisnika sa najvecim brojem poseta 
-- a ciji je br poseta dvocifren
SELECT * FROM `customers` WHERE `number_of_visits` BETWEEN 10 AND 99
ORDER BY `number_of_visits` DESC
LIMIT 2;

--prikazi korisnika koji ima najmanju platu koja je u opsegu 300 i 500
-- ako ih ima vise, omnog cije je ime prvo u leksikografskom
SELECT * FROM `customers` WHERE `salary` BETWEEN 300 AND 500
ORDER BY `salary`, `name`
LIMIT 1;

-- Iz tabele customers, pročitati sve klijente:
-- Koji su iz Srbije a plata je 600,
SELECT * FROM `customers`
WHERE `salary`=600 AND `state`="Srbija";

-- Čije ime počinje na S ili imaju manje od 30god.
SELECT * FROM `customers`
WHERE `name` LIKE 'S%' OR `age` < 30;

-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji je status različit od aktivan i prioritet visok,

SELECT * FROM `tasks`
WHERE `status`!=1 AND `priority`>1;

-- uz pomoc not:
SELECT * FROM `tasks`
WHERE NOT `status`=1 AND `priority`>1;

-- Čiji datum nije veći od 2019-01-01.
SELECT * FROM `tasks`
WHERE NOT `start_date`>"2019-01-01";
--drugi nacin 
SELECT * FROM `tasks`
WHERE `start_date`<="2019-01-01";

-- funkcije kod SELECT

-- prebrojati koliko ima kupaca koji imaju izmedju 30 i 40 godina
SELECT COUNT(`age`)
FROM `customers`
WHERE `age` BETWEEN 30 AND 40;
--isto
SELECT COUNT(*)
FROM `customers`
WHERE `age` BETWEEN 30 AND 40;

-- isto, samo sa preimenovanjem rezultujuceg polja
SELECT COUNT(`age`) AS "broj_kupaca"
FROM `customers`
WHERE `age` BETWEEN 30 AND 40;

-- odredi prosecan broj posete kupaca
SELECT AVG(`number_of_visits`) AS "prosecan_broj_poseta"
from `customers`;

-- prosecna plata kupaca iz srbije
SELECT AVG(`salary`) AS "prosecna_plata_srbija" FROM `customers`
WHERE `state`="Srbija";

-- odrediti broj razlicitih imena kupaca 
SELECT COUNT(DISTINCT `name`) AS "broj_razlicitih_imena"
FROM `customers`;

--ODREDI RAZLICIT BROJ DRZAVA KUPACA
SELECT COUNT(DISTINCT `state`) AS "broj_razlicitih_drzava"
FROM `customers`;

-- odrediti ime osobe koja ima najmanju platu
-- ako ih je vise, vrati bilo koju
SELECT `name`, MIN(`salary`) AS "min_plata"
FROM `customers`;
-- ovo se trazi
SELECT `name` AS "min_plata"
FROM `customers`
WHERE `salary`=(SELECT MIN(`salary`) FROM `customers`)
LIMIT 1;

-- jos lakse resenje
SELECT name FROM `customers`
ORDER BY `salary`
LIMIT 1;

--ispisati imena svih natprosecno starih osoba u leksikografskom poretku
SELECT `name` FROM `customers`
WHERE `age` > (SELECT AVG(`age`) FROM `customers`)
ORDER BY name;

--ispisati imena svih osoba iz srbije sa natprosecnom platom
SELECT `name` FROM `customers`
WHERE `salary` > (SELECT AVG(`salary`) FROM `customers` WHERE `state`="Srbija")
AND `state`="Srbija";
--mora da se doda i uslov van ugnjezdenog upita, jer nije realno da izbacuje engleze sa platom vecom od srpske prosecne 


















