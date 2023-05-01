<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmovi</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <?php
    
    $filmovi=["Life is beautiful", "Forest Gump", "Butterfly Effect", "Good Will Hunting", "Into the wild", "Usual Suspects", "The Life of David Gale", "K-PAX"];
    $reziseri=["Roberto Benigni","Robert Zemeckis","Eric Bress,J. Mackye Gruber","Gus Van Sant","Sean Penn","Bryan Singer","Alan Parker","Iain Softley"];
    $slicice=["slike/1Life.jpg","slike/2Forest.jpg","slike/3Butterfly.jpg","slike/4Good.jpg","slike/5Into.jpg","slike/6Usual.jpg","slike/7Life.jpg","slike/8K.jpg"];
    /*

    for($i=0;$i<count($filmovi);$i++){
        echo "$filmovi[$i], ";
    }
    echo"<br>";
    for($i=0;$i<count($reziseri);$i++){
        echo "$reziseri[$i], ";
    }
    echo"<br>";
    for($i=0;$i<count($slicice);$i++){
        echo"<img src=$slicice[$i]>";
    }
    echo"<br>";
    */

    echo"<table>";
    for($i=0;$i<count($filmovi);$i++){
        echo "<tr>";
        echo "<td> <b>$filmovi[$i]</b> <br><br> $reziseri[$i]  </td>"; 
        echo "<td> <img src=$slicice[$i]> </td>";         
        echo "</tr>";  
    }
    echo"</table>";
    






    ?>
    
</body>
</html>