<?php
    require_once "connection.php";

    //upit za kreiranje tabele
    $upit="CREATE TABLE IF NOT EXISTS `studenti`(
        `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `ime` VARCHAR(50) NOT NULL,
        `prezime` VARCHAR(100) NOT NULL,
        `email` VARCHAR(100),
        `broj_telefona` VARCHAR(20)
    );";
    //upit za insert
    $upit2="INSERT INTO `studenti` VALUES
    (null,'Marijana','Tomic','tomiceva.marijana@gmail.com','0606919950')";

    //upit za select
    $upit3="SELECT * FROM `studenti`;";

    // 1 nacin prikaza rezultata fetch_assoc
    $r=$conn->query($upit3);
    if($r->num_rows>0){
        //ima rez, sada prikazati:
        while($row=$r->fetch_assoc()){
            echo "<p>Id=" . $row['id'] . ' Ime=' . $row['ime'] ."</p>";
        }
    }
    else{
        echo "Nema rezultata za upit " . $upit3;
    }
    echo "<hr>";

    //2 nacin prikaza rezultata fetch_all
    $r2=$conn->query($upit3);
    $arr=$r2->fetch_all(MYSQLI_ASSOC); //pravi asoc.niz od rezultata SELECTa
    foreach($arr as $row){
        echo "<p>Id=" . $row['id'] . ' Ime=' . $row['ime'] ."</p>";
    }
    ////////////////////////////////////////////////
    //pravimo niz upita, gde se upit vodi kao [id,upit,opis]
    //dakle niz asocijativnih nizova, koji smestamo u tabelu db_update
    //SA CILJEM DA PAMTIMO KOJI UPITI SU SE IZVRSILI, DA SE NE PONAVLJAJU
    /*
    CREATE TABLE db_update(
        id INT(10) UNSIGNED PRIMARY KEY,
        opis VARCHAR(255)
    );
    */
    $upiti=[];
    $upiti[]=[
        'id'=>1,
        'upit'=>"CREATE TABLE IF NOT EXISTS `studenti`(
            `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `ime` VARCHAR(50) NOT NULL,
            `prezime` VARCHAR(100) NOT NULL,
            `email` VARCHAR(100),
            `broj_telefona` VARCHAR(20)
            );",
        'opis'=>'Dodavanje tabele studenti.'
    ];

    $upiti[]=[
        'id'=>2,
        'upit'=>"INSERT INTO `studenti` VALUES
            (null,'Marijana','Tomic','tomiceva.marijana@gmail.com','0606919950')",
        'opis'=>'Insert u tabelu studenti' 
    ];

    $upiti[]=[
        'id'=>3,
        'upit'=>"INSERT INTO `studenti` VALUES
            (null,'Stefan','Stanimirovic',null,null)",
        'opis'=>'Insert u tabelu studenti' 
    ];
    $upiti[]=[
        'id'=>4,
        'upit'=>"INSERT INTO `studenti` VALUES
            (null,'Ana','Tomic Po',null,null)",
        'opis'=>'Insert u tabelu studenti' 
    ];
    $upiti[]=[
        'id'=>5,
        'upit'=>"INSERT INTO `studenti` VALUES
            (null,'Natasa','Lukic',null,null)",
        'opis'=>'Insert u tabelu studenti' 
    ];
    $upiti[]=[
        'id'=>6,
        'upit'=>"INSERT INTO `studenti` VALUES
            (null,'Nina','Cugalj',null,null)",
        'opis'=>'Insert u tabelu studenti' 
    ];

    // treba da preskocimo upite koji su izvrseni
    $izvrseni=$conn->query("SELECT `id` FROM `db_update`;");
    $arr=$izvrseni->fetch_all(MYSQLI_ASSOC); //pravi asoc niz od id-ja iz tabele db_update
    // $arr mi je asoc niz oblika: ['id'=>1,'id'=>2,...]
    // a hocu da mi bude indeksirani [1,2,...]
    $ids=[]; //valjda treba
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
    






    //$conn->query($upit2);

    //provera da li je izvrsen, ali vraca eror jer dva puta pozivam u ifu
    // zato more IF NOT EXISTS
    // OVO JE PRVO URADJENO 
    /* 
    if($conn->query($upit2)){
        echo "Uspesno napravljena tabela.";
    }
    else{
        echo "Doslo je do greske: " . $conn->error;
    }
    */





?>