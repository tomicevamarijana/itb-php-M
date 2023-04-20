<?php
//Zadatak 1     echo "<p></p>";
    $a=19.35;
    $b=-3.14;

    if($a>$b){
        echo "<p>Veci je broj $a</p>";
    }
    else{
        echo "<p>Veci je broj $b</p>";
    }
    //Alternativno
    echo"<br>juhu<br>";
    echo"<br><p>Alternativno, veci je broj ".(($a>$b) ? $a : $b)."</p>"; //moralo je granjanje u zagradu

    //zadatak 4
    $dobaDana=date("a"); //$dobaDana="pm"; je vratila fja

    if($dobaDana=="am"){
        echo"<p>Pre podne</p>";
    }
    else{
        echo"<p>Posle podne</p>";
    }
    //Alternativno
    if($dobaDana=="pm"){
        echo"<p>Posle podne</p>";
    }
    else{
        echo"<p>Pre podne</p><hr>";
    }

    //Zadatak3

    $pol="Z";
    if($pol=="M"){
        echo "<p><img src='images/m.png' alt='muski pol'></p>";
    }
    else{
        echo "<p><img src='images/f.png' alt='zenski pol'></p>";
    }
    echo date("Y");

    //    echo "<p></p>";

    //Zadatak 2  //resenja ili 3 if-a, ili if-else

    $t=0;
    if($t<0){
        echo "<p>Temperatura $t je negativna.</p>";
    }
    else{
        echo "<p>Temperatura $t je pozitivna ili iznosi 0.</p><hr>";
    }

    //Zadatak 5
    $trenutna=date("Y");
    $licna=1995;
    $a=$trenutna-$licna;
    if($a<18){
        echo "<p>Osoba starosti $a je maloletna.</p>";
    }
    else{
        echo "<p>Osoba starosti $a je punoletna.</p><hr>";
    }

    //Zadatak 6
    $br1=1;
    $br2=2;
    $br3=3;

    /*
    if($br1<$br2){
        if($br1<$br3){
            echo"<p>za sada je $br1 najmanji</p>";
            if($br2<$br3){
                echo "<p>$br1, $br2, $br3</p>";                                
            }
            else{
                echo "<p>$br1, $br3, $br2</p>"; 
            }
        }
        else{
            
        }            

    }
    */

    $a=9;
    $b=-6;
    $c=6;

    if($a>$b){
        $pom=$a;
        $a=$b; 
        $b=$pom;
    }
    //Nakon ovog if-a u $a je sigurno manja vrednost nego $b
    //if se mozda nije ni izvrsio ako je uslov bio zadovoljen
    if($a>$c){
        $pom=$a;
        $a=$c;
        $c=$pom;
    }
    //Nakon ovog if-a u $a je sigurno najmanja vrednost
    if($b>$c){
        $pom=$b;
        $b=$c;
        $c=$pom;
    }
    //nakon ovog ifa vazi a<=b<=c
    echo "<p> $a <= $b <=$c </p>";

    //elseif
    echo"<hr> ELSEIF <hr>";

?>