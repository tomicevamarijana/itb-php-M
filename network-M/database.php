<?php
    require_once "connection.php";

    $sql="CREATE TABLE IF NOT EXISTS `users`(
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(255) NOT NULL UNIQUE,
        `password` VARCHAR(255) NOT NULL,
        PRIMARY KEY(`id`)
    ) ENGINE=INNODB;
    ";

    //izvrsavanje upita
    if($conn->multi_query($sql)){
        echo "<p> Tables created succeessfully!</p>";
    }
    else{
        //echo "<p> Error creating </p>";
        header("Location: error.php?m=". $conn->error);
        //header("Location: error.php?errorInQuery);
        //die("Error occured!" .  $conn->error);
    }

    

?>