--komanda za kreiranje baze
CREATE DATABASE test_druga CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

--komanda za brisanje podataka:
DROP DATABASE test_druga;

--komanda za odabir baze podataka, tj.navigaciju
USE test_baza;

--kreiranje tabele studenti
CREATE TABLE studenti(
    ime VARCHAR(50),
    prezime VARCHAR(50)
);

--kreiranje tabele customers
CREATE TABLE customers(
    id INT NOT NULL, --ok za primarni
    name VARCHAR(20) NOT NULL,
    age TINYINT NOT NULL,
    address CHAR(25),
    salary DECIMAL(18,20) DEFAULT 500
);

--proverava da li postoji isto ime, i kreira. ako postoji, ignorise
--u opstem slucaju, kad kreiramo tabelu cije ime vec postoji, javlja se greska
CREATE TABLE IF NOT EXISTS

--kreiranje tabele tasks
CREATE TABLE tasks(
    task_id INT UNIQUE, --ok za primarni
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    due_date DATE,
    status TINYINT NOT NULL,
    description TEXT
);

--kreiranje tabele customers SA PRIMARNIM KLJUCEM
CREATE TABLE customers(
    id INT NOT NULL, --PRIMARY KEY , samo se doda kao constraint, ako se sastoji od jedne kolone
    name VARCHAR(20) NOT NULL,
    age TINYINT NOT NULL,
    address CHAR(25),
    salary DECIMAL(18,20) DEFAULT 500,
    PRIMARY KEY(id)
    --PRIMARY KEY(id,age) --primer kljuca sa dve kolone
);

--dodavanje primarnog kljuca u postojecu tabelu customers:
ALTER TABLE `customers` ADD PRIMARY KEY(`id`); 
--moze bez bek tipova(navodnika) ako u imenu tabele nema space
ALTER TABLE tasks ADD PRIMARY KEY(task_id);

--isto kao CREATE TABLE
ALTER TABLE tasks ADD title VARCHAR(255) NOT NULL; 

--zadatak sa 20.slajda
ALTER TABLE customers ADD active BOOLEAN;
ALTER TABLE customers ADD state VARCHAR(90);
ALTER TABLE customers ADD number_of_visits TINYINT;
ALTER TABLE tasks ADD priority TINYINT NOT NULL;

--brisanje citave kolone
ALTER TABLE table_name DROP COLUMN column_name;

--brisanje tabele
DROP TABLE studenti;

--za menjanje kolone u tabeli
ALTER TABLE table_name MODIFY COLUMN column_name datatype;
-- u sql DBMS, posle komentara tj.crtica mora razmak

-- dodavanje novih redova u tabelu
INSERT INTO customers
VALUES(1,"Ana",25,"Bubanjskih heroja 48",600,1,"Srbija",37);

--dodavanje reda bez plate i adrese
INSERT INTO customers(name,id,age,active,state,number_of_visits)
VALUES 
("Bojana",2,39,0,"Srbija",16),
("Dejan",3,31,0,"Crna Gora",3);

-- promena vrednosti polja number_of_visits
UPDATE `customers` SET `number_of_visits` = '6' WHERE `customers`.`id` = 4;


