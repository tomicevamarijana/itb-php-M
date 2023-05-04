<?php
    echo"<p><b>ASOCIJATIVNI NIZOVI</b></p>";
    
    $godine=array("Pera"=>28,"Lazar"=>26,"Violeta"=>35);
    echo $godine["Pera"];
    echo"<br>";
    $godine["x"]=48;//dodaje na kraj
    echo $godine["x"]; 
    echo"<br>";
    var_dump($godine);
    echo"<br>";

    foreach($godine as $i=>$g){//i,g mogu proizvoljno da se zovu, key,value
        echo"<p>Osoba $i ima $g godina. </p>";
    }
    foreach($godine as $g){ //ovde prolazi samo kroz vrednosti, ne kljuceve
        echo"<p>Osoba ima $g godina. </p>";
    }

    //primer FOREACH za indeksne nizove
    $brojevi=[5,-6,3.3,17.8,0];
    foreach($brojevi as $broj){
        echo $broj . ", ";
    }
    $brojevi[100]=50; //napravljen niz sa rupom
    $brojevi[2]=4;

    foreach($brojevi as $indeks=>$broj){
        echo"<p>El. sa indeksom $indeks ima vrednost $broj.</p>";
    }

    //zadatak 1
    echo"<p><b>ZADATAK 1</b></p>";    
    echo"<p>Dat je niz elemenata u obliku MarkaAuta/Godište.
    Ispisati sve automobile, kao i njihova godišta.
    Ispisati automobile koji su stariji od 10 godina.
    Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.</p>";

    $automobili=["Audi A3"=>2004,"Opel Corsa"=>1998,"Opel Astra"=>2016];

    foreach($automobili as $marka=>$godiste){
        echo"<p>Auto marke $marka je godiste $godiste.</p>";
    }

    //stariji od 10 god
    $trenutnaGod=date('Y');
    foreach($automobili as $marka=>$godiste){
        if($trenutnaGod-$godiste>10){

            echo"<p>Auto marke $marka je stariji od 10 god.</p>";
        }
    }

    //opeli stariji od 10 godina
    foreach($automobili as $marka=>$godiste){
        if(strpos($marka, "Opel")!==false &&  $godiste>=2000){
            echo"<p>Auto marke $marka je proizveden posle 2000.</p>";
        }
    }

    //zadatak 2
    echo"<p><b>ZADATAK 2</b></p>";    
    echo"<p>Dat je niz elemenata u obliku ImeOsobe/Visina.
    Ispisati sve osobe sa njihovim visinama.
    Ispisati sve natprosečno visoke osobe.
    Ispisati sve osobe koje imaju maksimalnu visinu.
    Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.</p>";

    $ljudi=["Marijana"=>175,"Ana"=>160,"Vanja"=>150,"Vekoslav"=>160,"Dragan"=>175];

    foreach($ljudi as $ime=>$visina){
        echo"<p>Osoba $ime je visoka $visina centimetara.</p>";
    }

    //osobe natprosecne visine -OK
    echo"<p><b>Natprosecno visoke osobe</b></p>"; 
    $s=0;
    $br=0;
    foreach($ljudi as $ime=>$visina){
        $br++;
        $s=$s+$ljudi[$ime];
    }
    $sr=$s/$br; //moze i $s/count($ljudi)
    echo $sr;
    echo"<p>Prosecna visina je $sr.</p>";

    foreach($ljudi as $ime=>$visina){
        if($ljudi[$ime]>$sr){ //moze $visina>$sr
            echo"<p>Osoba $ime je natprosecno visoka. </p>";
        }
    }

    //sve osobe natprosecne visine
    echo"<p><b>Sve osobe maksimalne visine</b></p>"; 

    $maks=0; //$maks=PHP_INIT 
    foreach($ljudi as $visina){
        if($visina>$maks){
            $maks=$visina;
        }
    }
    echo"<p>Maksimalna visina je $maks.</p>";

    foreach($ljudi as $ime=>$visina){
        if($visina==$maks){
            echo"<p>Osoba $ime ima maksimalnu visinu. </p>";
        }
    }
    
    /*
    $visokiLjudi=[];
    $maxVisina=$ljudi["Marijana"];    
    $maxVisinaOsoba="Marijana";

    foreach($ljudi as $ime=>$visina){
        if($ljudi[$ime]>$maxVisina){
            $maxVisina=$ljudi[$ime];
            $maxVisinaOsoba=$ime;
            //$visokiLjudi=$ljudi[$ime];
            //$visokiLjudi=$ime;
            $visokiLjudi[$ime]=$ljudi[$ime];
        }
        //elseif($brojevi[$i]==$max){
            //$sviIndeksiMaks[]=$i; //ovde ne pravi novi niz, samo dopunjuje
        //}
        elseif($ljudi[$ime]==$maxVisina){
            $visokiLjudi[]=$ime;
        }
    }
    //var_dump($visokiLjudi);
    foreach($visokiLjudi as $ime2=>$visina2){
        echo"<p>Osoba $ime2 je visine $visina2. </p>";
    }
    */
    
    ///sve osobe ispod porseka visine na slovo V: OK
    echo"<p><b>sve osobe ispod porseka visine na slovo V:</b></p>";
    foreach($ljudi as $ime=>$visina){
        if($ljudi[$ime]<$sr && strpos($ime, "V")===0){ //$ime[0]=="V"
            echo"<p>Osoba $ime je visine $visina i ispod proseka je. </p>";
        }
    }
















?>