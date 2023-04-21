<?php

    $pol="z";
    $godine=24;

    if($pol=="m"){
        if($godine>=18){
            echo"<p>Musko, punoletno</p>";
        }
        else{
            echo"<p>Musko, maloletno</p>";
        }
    }
    else{
        if($godine>=18){
            echo"<p>Zensko, punoletno</p>";
        }
        else{
            echo"<p>Zensko, maloletno</p>";
        }
    }
    
    //nacin koriscenjem logickih operatora

    if($pol=="m" && $godine>=18){
        echo"<p>Musko, punoletno</p>";
    }
    elseif($pol=="m" && $godine<18){
        echo"<p>Musko, maloletno</p>";
    }
    elseif($pol=="z" && $godine>=18){
        echo"<p>Zensko, punoletno</p>";
    }
    else{
        echo"<p>Zensko, maloletno</p>";
    }

    //zadatak 17
    echo"<hr> Zadatak 17 <hr>";
    $a=5;
    $b=9;
    $c=-3;
    $max=$a;
    if($b>$max){
        $max=$b;
    }
    if($c>$max){
        $max=$c;
    }
    $min=$a;
    if($b<$min){
        $min=$b;
    }
    if($c<$min){
        $min=$c;
    }
    $sr=$a+$b+$c-($min+$max);
    echo"<p>Rastuci redosled: $min, $sr, $max.</p>";
    
    







    //firma radi od 9 do 17h
    $s=date("H");
    if($s<9 || $s>=17){
        echo"<p>Firma ne radi</p>";
    }
    else{
        echo"<p>Firma radi</p>";
    }

    //alternativno

    if($s>=9 && $s<17){
        echo"<p>Firma radi</p>";
    }
    else{
        echo"<p>Firma ne radi</p>";
    }

    //ZADATAK 13 - broj deljiv sa dva

    $n=13;
    if(!($n%2==0)){
        echo"<p>$n je neparan.</p>";
    }
    else{
        echo"<p>$n je paran.</p>";
    }






?>
