<?php
    echo"<hr> ELSEIF <hr>";
    $broj=15;

    if($broj<=10){
        echo"<p>Broj prve desetice.</p>";
    }
    elseif($broj<=20){
        echo"<p>Broj druge desetice.</p>";
    }
    else{
        echo"<p>Broj veci od 20.</p>";
    }

    //alternativno
    if($broj>20){
        echo"<p>Broj veci od 20.</p>";
    }
    elseif($broj>10){
        echo"<p>Broj druge desetice.</p>";
    }
    else{
        echo"<p>Broj prve desetice.</p>";
    }

    //neispravno jer nije jednoznacno   if($broj<=20){}

    echo"<hr> Zadatak 7";
    $poeni=73;
    if($poeni<=50){
        echo"<p>Student je pao ispit.</p>";
    }
    elseif($poeni<=60){
        echo"<p>Ocena 6.</p>";
    }
    elseif($poeni<=70){
        echo"<p>Ocena 7.</p>";
    }
    elseif($poeni<=80){
        echo"<p>Ocena 8.</p>";
    }
    elseif($poeni<=90){
        echo"<p>Ocena 9.</p>";
    }
    else{
        echo"<p>Ocena 10.</p>";
    }    

    //Zadatak 8
    echo"<hr> Zadatak 8<br><hr>";
    $d=date('w');

    if($d==0){
        echo"<p>Danas je vikend (nedelja).</p>";
    }
    elseif($d==6){
        echo"<p>Danas je vikend (subota).</p>";
    }
    else{
        echo"<p>Danas je radni dan.</p>";
    }


    //Zadatak 9
    echo"<hr> Zadatak 9<br><hr>";

    $s=date('G'); //moze i $s=date('H');
    $m=date('i');    

    if($s<12){
        echo"<p>Sada je $s i $m minuta, stoga DOBRO JUTRO.</p>";
    }
    elseif($s<18){
        echo"<p>Sada je $s i $m minuta, stoga DOBAR DAN.</p>";
    }
    else{
        echo"<p>Sada je $s i $m minuta, stoga DOBRO VECE.</p>";
    }

    //Zadatak 10
    echo"<hr> Zadatak 10<br><hr>";

    //datum 1
    $d1=9;
    $m1=10;
    $y1=2011;

    $d2=9;
    $m2=10;
    $y2=2021;

    $brDana1=$y1*365+($m1-1)*30.42+$d1;
    $brDana2=$y2*365+($m2-1)*30.42+$d2;

    if($brDana1<$brDana2){
        echo"<p>Prvi datum je raniji.</p>";          
    }
    else{
        echo"<p>Drugi datum je raniji.</p>";
    }

    //Stefan - 10 zadatak
    $d1=21;
    $m1=4;
    $g1=2023;

    $d2=18;
    $m2=7;
    $g2=1980;

    if($g1<$g2){
        echo"<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif($g2<$g1){
        echo"<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    elseif($m1<$m2){
        echo"<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif($m2<$m1){
        echo"<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    elseif($d1<$d2){
        echo"<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif($d2<$d1){
        echo"<p>Raniji datum je $d2.$m2.$g2.</p>";
    }
    else{
        echo"<p>Datumi su isti.</p>";
    }


    //Zadatak 11
    echo"<hr> Zadatak 11<br><hr>";
    $h=date('G');
    $m=date('i'); //ne treba mi
    /*$s=date();*/
    /*$date = date('m/d/Y h:i:s a', time());*/
    
    
    if($h<9){   
        echo"<p>Firma ne radi.</p>";
    }
    elseif($h>=17){
        echo"<p>Firma ne radi.</p>";
    } //ovde je moglo elseif($h<17)ili ($h<=16) i firma radi
    else{
        echo"<p>Firma radi.</p>";
    }

    //Zadatak 12
    echo"<hr> Zadatak 12<br><hr>";
    $p1=9;
    $k1=17;
    $p2=11;
    $k2=18;
    if($k1<$p2){
        echo"<p>Ne preklapaju se.</p>";
    }
    if($k2<$p1){
        echo"<p>Ne preklapaju se.</p>";
    }
    else{
        echo"<p>Preklapaju se.</p>";
    }

    //Zadatak 12
    echo"<hr> Zadatak 12<br><hr>";
    $n=13;
    if($n%2==0){
        echo"<p>$n je paran broj.</p>";
    }
    else{
        echo"<p>$n je neparan broj.</p>";
    }

    //Zadatak 15
    echo"<hr> Zadatak 15<br><hr>";
    $x=4;
    $y=10;
    if($x>$y){
        $raz=$x-$y;
        echo $raz;
    }    
    else{
        $raz=$y-$x;
        echo $raz;
    }

    //Zadatak 16
    echo"<hr> Zadatak 16<br><hr>";
    $z=-5;
    if($z<=0){
        $rez=$z-1;
        echo $rez;        
    }
    else{
        $rez=$z+1;
        echo $rez;   
    }

    
    




    







    









?>