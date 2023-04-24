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

    //ZADATAK 21 
    echo"<hr><p>Zadatak 21</p>";
    echo"<p>Naći koji je najveći od tri uneta broja a, b i c.</p>";
    $a=25;
    $b=100;
    $c=20;
    $max=$a;
    if($b>$max){
        $max=$b;
    }
    if($c>$max){
        $max=$c;
    }
    echo"<p>Najveci broj od unetih $a, $b i $c je $max.</p>";
    
    //ZADATAK 22 
    echo"<hr><p>Zadatak 22</p>";
    echo"<p>Ispisati na ekranu „ekstremna temperatura“ ukoliko je temperatura manja od -15 stepeni Celzijusovih  i veća od 40 stepeni Celzijusovih.</p>";
    $t=-16;
    if($t<-15 || $t>40){
        echo"<p>Temperatura $t je EKSTREMNA.</p>";
    }

    //ZADATAK 23 
    echo"<hr><p>Zadatak 23</p>";
    echo"<p>Ispitati da li je godina prestupna. (Godinu preuzeti sa vremena na Vašem računaru).
    Prestupna je ona godina koja je deljiva sa 4, ako nije deljiva sa 100, mada ipak jeste deljiva sa 400.(сем у случају да је дељива са 100 а није са 400)
    </p>";
    //$y=date('Y');
    $y=1800;
    if($y%400==0){
        echo"<p>Godina $y je prestupna.</p>";
    }
    elseif($y%100!=0 && $y%4==0){
        echo"<p>Godina $y je prestupna.</p>";
    }
    else{
        echo"<p>Godina $y je prosta.</p>";
    }

    //ZADATAK 24
    echo"<hr><p>Zadatak 24</p>";
    echo"<p>Za uneto početno i krajnje radno vreme dva lekara, ispitati koliko sati i minuta se njihove smene preklapaju.</p>";
    $p1=12;
    $k1=16;
    $p2=8;
    $k2=18;
    if($k1<$p2 || $k2<$p1){
        echo"<p>Smene se ne preklapaju.</p>";
    }
    elseif($p1<$p2 && $k1<$k2){
        $p=$k1-$p2;
        echo"<p>Smene se preklapaju za $p sati.</p>";
    }
    elseif($p2<$p1 && $k2<$k1){
        $p=$k2-$p1;
        echo"<p>Smene se preklapaju za $p sati.</p>";
    }
    elseif($p1>$p2 && $k1<$k2){
        $p=$k1-$p1;
        echo"<p>Smene se preklapaju za $p sati.</p>";
    }
    elseif($p1<$p2 && $k1>$k2){
        $p=$k2-$p2;
        echo"<p>Smene se preklapaju za $p sati.</p>";
    }









?>
