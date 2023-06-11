<?php
    $host="localhost"; //servername
    $user="admindva";
    $pass="admindva123";
    $db="itbootcampnova";

    $conn=new mysqli($host,$user,$pass,$db);

    //provera konekcije
    if($conn->connect_error){
        die("Nije uspela konekcija." . $conn->connect_error);
    }
    else{
        //echo "Uspesno sam se konektovao.";
    }

?>