<?php
    $host="localhost";
    $user="admin";
    $pass="admin123";
    $db="itbootcamp"; 
    //moze da se proba 
    //$user= "root";
    // $pass="";

    $conn=new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
        die("Nije uspela konekcija.". $conn->connect_error);
    }
    




?>