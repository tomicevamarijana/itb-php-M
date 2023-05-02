<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahovska tabla</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <?php

    for($i=1;$i<=8;$i++){
        if($i%2!=0){
            for($j=1;$j<=8;$j++){
                if($j%2!=0){
                    echo"<span class='bela'>BELA</span>";
                }
                else{
                    echo"<span>CRNA</span>";
                }
            }
        }
        else{
            for($j=1;$j<=8;$j++){
                if($j%2!=0){
                    echo"<span>CRNA</span>";
                }
                else{
                    echo"<span class='bela'>BELA</span>";
                }
            }
        }
        echo"<br>";
    }

    ?>
    
</body>
</html>