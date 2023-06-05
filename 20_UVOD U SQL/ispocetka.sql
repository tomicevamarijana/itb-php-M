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



