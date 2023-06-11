<?php
    require_once "create.php";

    //U BAZI PRAVIM TABELU db_update:
    /*
    CREATE TABLE db_update(
        id INT(10) UNSIGNED PRIMARY KEY,
        opis VARCHAR(255)
    );
    */

    $upiti=[];

    $upiti[]=[
        'id'=>1,
        'upit'=>"CREATE TABLE IF NOT EXISTS `reziseri`(
            `id` INT UNSIGNED PRIMARY KEY,
            `ime` VARCHAR(50) NOT NULL,
            `prezime` VARCHAR(50) NOT NULL,
            `pol` CHAR(1)
        ) ENGINE=InnoDB;",
        'opis'=>'Dodavanje tabele REZISERI.'
    ];
    $upiti[]=[
        'id'=>2,
        'upit'=>"CREATE TABLE IF NOT EXISTS `filmovi`(
            `id` INT UNSIGNED PRIMARY KEY,
            `naslov` VARCHAR(50) NOT NULL,
            `godina` SMALLINT UNSIGNED,
            `ocena` DECIMAL(6,2),
            `reziser_id` INT UNSIGNED,
            FOREIGN KEY(`reziser_id`) REFERENCES `reziseri`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE
        ) ENGINE=InnoDB;",
        'opis'=>'Dodavanje tabele FILMOVI.'
    ];
    $upiti[]=[
        'id'=>3,
        'upit'=>"CREATE TABLE IF NOT EXISTS `zanrovi`(
            `id` INT UNSIGNED PRIMARY KEY,
            `naziv` VARCHAR(50) NOT NULL
        ) ENGINE=InnoDB;",
        'opis'=>'Dodavanje tabele ZANROVI.'
    ];
    $upiti[]=[
        'id'=>4,
        'upit'=>"ALTER TABLE `filmovi` MODIFY COLUMN `reziser_id` INT UNSIGNED NOT NULL;",
        'opis'=>'Izmena tabele FILMOVI.'
    ];
    $upiti[]=[
        'id'=>5,
        'upit'=>"CREATE TABLE IF NOT EXISTS `film_zanr`(
            `film_id` INT UNSIGNED,
            `zanr_id` INT UNSIGNED,
            PRIMARY KEY(`film_id`,`zanr_id`),
            FOREIGN KEY(`film_id`) REFERENCES `filmovi`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
            FOREIGN KEY(`zanr_id`) REFERENCES `zanrovi`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE
        ) ENGINE=InnoDB;",
        'opis'=>'Dodavanje tabele FILM_ZANR.'
    ];
    //UPITI ZA INSERT:
    //insert u REZISERI
    $upiti[]=[
        'id'=>6,
        'upit'=>"INSERT INTO `reziseri` VALUES(1,'Brayan','Singer','M')",
        'opis'=>'Insertovanje u tabelu REZISERI.'
    ];
    $upiti[]=[
        'id'=>7,
        'upit'=>"INSERT INTO `reziseri` VALUES(2,'Roberto','Benigni','M')",
        'opis'=>'Insertovanje u tabelu REZISERI.'
    ];
    $upiti[]=[
        'id'=>8,
        'upit'=>"INSERT INTO `reziseri` VALUES(3,'Alan','Parker','M')",
        'opis'=>'Insertovanje u tabelu REZISERI.'
    ];
    $upiti[]=[
        'id'=>9,
        'upit'=>"INSERT INTO `reziseri` VALUES(4,'Iain','Softley','M')",
        'opis'=>'Insertovanje u tabelu REZISERI.'
    ];
    //insert u FILMOVI
    $upiti[]=[
        'id'=>10,
        'upit'=>"INSERT INTO `filmovi` VALUES(1,'Usual Suspects',2005,8.5,1)",
        'opis'=>'Insertovanje u tabelu FILMOVI.'
    ];
    $upiti[]=[
        'id'=>11,
        'upit'=>"INSERT INTO `filmovi` VALUES(2,'La vita e bella',1997,8.6,2)",
        'opis'=>'Insertovanje u tabelu FILMOVI.'
    ];
    $upiti[]=[
        'id'=>12,
        'upit'=>"INSERT INTO `filmovi` VALUES(3,'The Life of David Gale',2003,7.5,3)",
        'opis'=>'Insertovanje u tabelu FILMOVI.'
    ];
    $upiti[]=[
        'id'=>13,
        'upit'=>"INSERT INTO `filmovi` VALUES(4,'K-PAX',2001,7.4,4)",
        'opis'=>'Insertovanje u tabelu FILMOVI.'
    ];
    //insert u ZANROVI
    $upiti[]=[
        'id'=>14,
        'upit'=>"INSERT INTO `zanrovi` VALUES(1,'Thriler')",
        'opis'=>'Insertovanje u tabelu ZANROVI.'
    ];
    $upiti[]=[
        'id'=>15,
        'upit'=>"INSERT INTO `zanrovi` VALUES(2,'War')",
        'opis'=>'Insertovanje u tabelu ZANROVI.'
    ];
    $upiti[]=[
        'id'=>16,
        'upit'=>"INSERT INTO `zanrovi` VALUES(3,'Drama')",
        'opis'=>'Insertovanje u tabelu ZANROVI.'
    ];
    $upiti[]=[
        'id'=>17,
        'upit'=>"INSERT INTO `zanrovi` VALUES(4,'Science Fiction')",
        'opis'=>'Insertovanje u tabelu ZANROVI.'
    ];
    //insert u FILM_ZANR
    $upiti[]=[
        'id'=>18,
        'upit'=>"INSERT INTO `film_zanr` VALUES(1,1)",
        'opis'=>'Insertovanje u tabelu FILM_ZANR.'
    ];
    $upiti[]=[
        'id'=>19,
        'upit'=>"INSERT INTO `film_zanr` VALUES(2,2)",
        'opis'=>'Insertovanje u tabelu FILM_ZANR.'
    ];
    $upiti[]=[
        'id'=>20,
        'upit'=>"INSERT INTO `film_zanr` VALUES(3,3)",
        'opis'=>'Insertovanje u tabelu FILM_ZANR.'
    ];
    $upiti[]=[
        'id'=>21,
        'upit'=>"INSERT INTO `film_zanr` VALUES(4,4)",
        'opis'=>'Insertovanje u tabelu FILM_ZANR.'
    ];
    //insert novog filma
    $upiti[]=[
        'id'=>22,
        'upit'=>"INSERT INTO `reziseri` VALUES(5,'Dušan','Kovačević','M')",
        'opis'=>'Insertovanje u tabelu REZISERI.'
    ];
    $upiti[]=[
        'id'=>23,
        'upit'=>"INSERT INTO `filmovi` VALUES(5,'Profesionalac',2003,8.4,5)",
        'opis'=>'Insertovanje u tabelu FILMOVI.'
    ];
    $upiti[]=[
        'id'=>24,
        'upit'=>"INSERT INTO `zanrovi` VALUES(5,'Comedy')",
        'opis'=>'Insertovanje u tabelu ZANROVI.'
    ];
    $upiti[]=[
        'id'=>25,
        'upit'=>"INSERT INTO `film_zanr` VALUES(5,5)",
        'opis'=>'Insertovanje u tabelu FILM_ZANR.'
    ];


    //CELA PROCEDURA SA CASA, OKO PROVERE DA LI JE UPIT VEC IZVRSEN:
    
    $izvrseni=$conn->query("SELECT `id` FROM `db_update`;");
    $arr=$izvrseni->fetch_all(MYSQLI_ASSOC); //pravi asoc niz od id-ja iz tabele db_update
    // $arr mi je asoc niz oblika: ['id'=>1,'id'=>2,...]
    // a hocu da mi bude indeksirani [1,2,...]
    $ids=[]; 
    foreach($arr as $value){
        $ids[]=$value['id'];
    }
    //ako su svi upiti izvrseni a ja refreshujem, treba uporediti duzine niza $ids i $upiti
    if(count($upiti)==count($ids)){
        echo "SVI UPITI SU VEC IZVRSENI.";
    }
    else{
        //sve ostalo...
        //prolazak kroz $upiti niz:
        foreach($upiti as $u){
            if(!in_array($u['id'],$ids)){ //ovaj IF je dodat, tu proveravam da l je upit vec bio
                $r=$conn->query($u['upit']);
                if($r){
                    //uspesno izvrsen
                    $r2=$conn->query("INSERT INTO `db_update` VALUES(".$u['id'].", '" . $u['opis']."');");
                    //proverimo da li je insert u db_update prosao
                    if(!$r2){
                        echo "Doslo je do greske pri insert u db_update: " . $conn->error;
                        break;
                    }
                    else{
                        echo "<p style='color:green'>upit sa id=" . $u['id'] . "je uspesno izvrsen</p>";
                    }
                }
                else{
                    echo "<p style='color:red'>doslo je do greske:" . $conn->error . "</p>";
                    break; //BITNO
                }
            }
        }
    }

    



?>