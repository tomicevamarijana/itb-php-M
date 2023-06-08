-- kreiranje baze
CREATE DATABASE `store` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
USE `store`;

-- kreiranje tabela
CREATE TABLE `categories`(
    `id` INT PRIMARY KEY,
    `category_name` VARCHAR(170) NOT NULL,
    `description` CHAR(200)
) ENGINE=InnoDB;

CREATE TABLE `products`(
    `id` INT PRIMARY KEY,
    `product_name` VARCHAR(200) NOT NULL,
    `price` DECIMAL(10,2) DEFAULT 0
) ENGINE=InnoDB;

CREATE TABLE `product_categories`(
    `id` INT PRIMARY KEY,
    `id_product` INT NOT NULL,
    `id_category` INT NOT NULL,
    FOREIGN KEY(`id_product`) REFERENCES `products`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
    FOREIGN KEY(`id_category`) REFERENCES `categories`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB;

-- insertovanje redova
INSERT INTO `categories` VALUES
(1,"Garden","Description 1...."),
(2,"Beauty","Description 2...."),
(3,"Kitchen","Description 3...."),
(4,"Car","Description 4....");

INSERT INTO `products` VALUES
(1,"garden product 1",1000),
(2,"garden product 2",2000),
(3,"beauty product 1",2500),
(4,"beauty product 2",500),
(5,"kitchen product 1",800),
(6,"car product 1",1000);

INSERT INTO `product_categories` VALUES
(1,1,1),
(2,2,1),
(3,3,2),
(4,4,2),
(5,5,3),
(6,6,4);
INSERT INTO `product_categories` VALUES
(7,6,4);
---------------------------
-- UPITI

-- Odrediti sve različite kategorije proizvoda sortirane po nazivu kategorije.
-- Odrediti sve proizvode čija je cena veća od prosečne cene svih proizvoda.
-- Odrediti najskuplji proizvod iz kategorije 'Garden'.

SELECT DISTINCT * FROM `categories`
ORDER BY `category_name`;
--
--
SELECT * FROM `products` 
WHERE `price` > (SELECT AVG(`price`) FROM `products`);
--
SELECT `products`.`product_name` AS `najskuplji_proizvod`, `products`.`price` AS `cena` FROM `product_categories` 
LEFT JOIN `products` ON `product_categories`.`id_product`=`products`.`id`
LEFT JOIN `categories` ON `product_categories`.`id_category`=`categories`.`id`
WHERE `categories`.`category_name`="Garden"
ORDER BY `products`.`price` DESC
LIMIT 1;










