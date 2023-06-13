<?php
    mysqli_report(MYSQLI_REPORT_OFF); //dodato
    $server="localhost";
    $database="network";
    $username="root";
    $password=""; //promeniti za domaci

    $conn=new mysqli($server,$username,$password,$database);
    if($conn->connect_error){
        //header("Location: error.php?m=". $conn->connect_error);
        die("Neuspela konekcija: " . $conn->connect_error); //neelegantno
    }
    $conn->set_charset("utf8");

?>