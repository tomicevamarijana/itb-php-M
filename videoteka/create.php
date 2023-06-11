<?php
    
    //KONEKCIJA SA BAZOM
    $host="localhost";
    $user="filmofil";
    $pass="film123";
    $db="videoteka";

    $conn=new mysqli($host,$user,$pass,$db);

    //PROVERA KONEKCIJE
    if($conn->connect_error){
        die("Nije uspela konekcija: " . $conn->connect_error);
    }
    else{
        //echo "Uspesno ste se konektovali.";
    }

    // UPITI ZA KREIRANJE TABELA
    //tabela REZISERI
    $upit1="CREATE TABLE IF NOT EXISTS `reziseri`(
        `id` INT UNSIGNED PRIMARY KEY,
        `ime` VARCHAR(50) NOT NULL,
        `prezime` VARCHAR(50) NOT NULL,
        `pol` CHAR(1)
    ) ENGINE=InnoDB;";
    //tabela FILMOVI
    $upit2="CREATE TABLE IF NOT EXISTS `filmovi`(
        `id` INT UNSIGNED PRIMARY KEY,
        `naslov` VARCHAR(50) NOT NULL,
        `godina` SMALLINT UNSIGNED,
        `ocena` DECIMAL(6,2),
        `reziser_id` INT UNSIGNED,
        FOREIGN KEY(`reziser_id`) REFERENCES `reziseri`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE
    ) ENGINE=InnoDB;";
    //tabela ZANROVI
    $upit3="CREATE TABLE IF NOT EXISTS `zanrovi`(
        `id` INT UNSIGNED PRIMARY KEY,
        `naziv` VARCHAR(50) NOT NULL
    ) ENGINE=InnoDB;";
    //tabela FILM_ZANR
    $upit4="CREATE TABLE IF NOT EXISTS `film_zanr`(
        `film_id` INT UNSIGNED,
        `zanr_id` INT UNSIGNED,
        PRIMARY KEY(`film_id`,`zanr_id`),
        FOREIGN KEY(`film_id`) REFERENCES `filmovi`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
        FOREIGN KEY(`zanr_id`) REFERENCES `zanrovi`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE
    ) ENGINE=InnoDB;";

    //promena polja u NOT NULL
    $upit5="ALTER TABLE `filmovi` MODIFY COLUMN `reziser_id` INT UNSIGNED NOT NULL;";




    //proveravam da li je izvrsen
    /*
    if($conn->query($upit4)){
        echo "<p>Uspesno napravljena tabela 4.</p>";
        echo "<p>Uspesno modifikovana tabela filmovi.</p>";
    }
    else{
        echo "Doslo je do greske: " . $conn->error;
    }
    */





?>