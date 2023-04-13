<?php 
    $a="Zdravo svete";
    echo $a; //ovo prikazuje string
    echo "<br>";
    $a=28;
    echo $a;
    echo "<br>";
    $a=28+2;
    echo $a;
    echo "<br>";
    $b=2.5+2.8;
    echo $b;
    echo "<br> vrednost promenljive b je ".$b;
    $d=3;
    $d=$d+2;
    $d+=2;     
    echo "<br>";
    echo "zdravo ".$d;
    echo "<br>";
    echo $d;
    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo "<hr>";

    echo "Prvi zadatak";
    
    $h=20;
    $m=35;
    $rez=$h*60+$m;
    echo "rezultat zadatka je ".$rez ." minuta";
    echo "<hr>";

    echo "Drugi zadatak";
    echo "<br>";
    $sati=date('G');
    $minuti=date('i');
    echo "Trenutno vreme je ". $sati . " sati i minuta " . $minuti;
    date_default_timezone_set('Europe/Belgrade');
    echo "<br>";
    echo "Trenutno vreme je ". $sati . " sati i minuta " . $minuti;

    $rez=$sati*60+$minuti;
    echo "<br> rezultat zadatka je ". number_format($rez,0) ." minuta";



?>


