<?php
require_once "connection.php";

/* 
CREATE TABLE db_update(
    id INT(10) UNSIGNED PRIMARY KEY,
    opis VARCHAR(255) NOT NULL
);
*/
$upiti=[];
$upiti[]=[
    'id'=>1,
    'upit'=>"CREATE TABLE IF NOT EXISTS `studenti`(
        `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `ime` VARCHAR(50) NOT NULL,
        `prezime` VARCHAR(100) NOT NULL,
        `email` VARCHAR(100) NOT NULL,
        `broj_telefona` VARCHAR(100) NOT NULL
    ); ",
    'opis'=>'dodavanje tabele studenti'
]; //email i br tel treba da nisu not null
//dodaj dva 
$upiti[] = [
    'id' => 2,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Elizabeta', 'Markus', 'elizabeta.markus@gmail.com','0649191125')",
    'opis' => 'Insert u tabelu studenti'
];
$upiti[] = [
    'id' => 3,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Stefan', 'Stanimirovic', 'email@gmail.com', '123')",
    'opis' => 'Insert u tabelu studenti'
];

$izvrseni=$conn->query("SELECT `id` FROM `db_update`;");
$arr=$izvrseni->fetch_all(MYSQLI_ASSOC);
$ids=[];
foreach($arr as $value){
    $ids[]=$value['id'];
}

if(count($upiti)==count($ids)){
    echo "SVI UPITI SU VEC IZVRSENI";
}

foreach($upiti as $u){
    if(!in_array($u['id'],$ids)){        
    
        $r=$conn->query($u['upit']);
        if($r){
            //uspesno izvrsen
            $r2=$conn->query("INSERT INTO db_update VALUES (".$u['id'].",'".$u['opis']."')");
            if(!$r2){
                echo "<p>Doslo je do greske: " . $conn->connect_error. "</p>";
                break;
            }
            echo "upit sa id=" . $u['id']. " je uspesno izvrsen.";
        }
        else{
            echo "<p>Doslo je do greske: " . $conn->connect_error. "</p>";
            break;
        }
    }
}

////////////////////



$upit = "CREATE TABLE IF NOT EXISTS `studenti`(
    `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `ime` VARCHAR(50) NOT NULL,
    `prezime` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `broj_telefona` VARCHAR(100) NOT NULL
); ";

$upit2="INSERT INTO `studenti` VALUES
(null,'Marijana','Tomic','tomiceva.marijana@gmail.com','060')";

$upit3="SELECT * FROM `studenti`;";

//unutar while petlje hvatamo red po red rezultata koji daje select upit (red po red iz tabele)
$r=$conn->query($upit3);
if($r->num_rows>0){
    while($row=$r->fetch_assoc()){
        echo "<p> id=".$row['id']." ime=".$row['ime']."</p>";
    }
}
else{
    echo "nema rezultata";
}
echo "<hr>";
// drugi nacin hvatanja, svi redovi odjednom, jasniji nacin
$r2=$conn->query($upit3);
$arr=$r2->fetch_all(MYSQLI_ASSOC); //biram asocijativni,lakse je
foreach($arr as $row){
    echo "<p> id=".$row['id']." ime=".$row['ime']."</p>";
}






/*
$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "id: " . $row["id"]. 
" - Name: " . $row["firstname"]. 
" " . $row["lastname"]. "<br>";
}
} else {
echo "0 results";
}


*/








if ($conn->query($upit2)){
    echo "uspesno napravljena tabela";
}
else{
    echo "doslo je do greske: " . $conn->error;
}




?>