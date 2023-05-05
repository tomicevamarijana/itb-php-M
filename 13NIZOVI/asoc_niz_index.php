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

    //zadaci ASOCIJATIVNI NIZ
    echo"<p><b>ASOCIJATIVNI NIZ</b></p>";

    //zadatak 1
    echo"<p><b>ZADATAK 1</b></p>";    
    echo"<p>Dat je niz elemenata u obliku MarkaAuta/Godište.</p>";

    $automobili=["Audi A3"=>2004,"Opel Corsa"=>1998,"Opel Astra"=>2016,"Reno Senic"=>2002,"Peugeot 307"=>2004];

    echo"<p><b>Ispisati sve automobile, kao i njihova godišta.</b></p>";
    foreach($automobili as $auto=>$godiste){
        echo"<p>Automobil $auto je $godiste godište.</p>";
    }
    echo"<p><b>Ispisati samo godista.</b></p>"; 
    foreach($automobili as $godiste){ //ovde prolazi samo kroz KLJUCEVE
        echo $godiste . ", ";
    }

    echo"<p><b>Ispisati automobile koji su stariji od 10 godina.</b></p>";
    $trenutna=date("Y");
    foreach($automobili as $auto=>$godiste){
        if($trenutna-$godiste>10){
            echo"<p>Automobil $auto je stariji od 10 godina.</p>";
        }
    }

    echo"<p><b>Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.</b></p>";
    foreach($automobili as $auto=>$godiste){
        if(strpos($auto,"Opel")!==false && $godiste>2000){
            echo"<p>Automobil $auto sadrzi string “Opel”, a proizveden je posle 2000. godine.</p>";
        }
    }

    //zadatak 2
    echo"<p><b>ZADATAK 2</b></p>";    
    echo"<p>Dat je niz elemenata u obliku MarkaAuta/Godište.</p>";

    //zadatak 3
    echo"<p><b>ZADATAK 3</b></p>";    
    echo"<p>Dat je niz elemenata u obliku NazivPredmeta/Ocena koju student ima.</p>";    

    $predmeti=["matematika"=>10,"filozofija"=>9,"engleski"=>10,"muzicko"=>6,"fizicko"=>7];

    echo"<p><b>Ispisati sve predmete i ocene studenta.</b></p>";
    foreach($predmeti as $predmet=>$ocena){
        echo"<p>Iz predmeta $predmet student ima ocenu $ocena.</p>";
    }

    echo"<p><b>Odrediti najveću ocenu studenta koju ima, i ispisati predmete na kojima je dobio najveću ocenu.</b></p>";
    $maksOcena=0;
    foreach($predmeti as $predmet){
        if($predmet>$maksOcena){
            $maksOcena=$predmet;
        }
    }
    echo"<p>Maksimalna ocena je $maksOcena.</p>";
    foreach($predmeti as $predmet=>$ocena){
        if($ocena==$maksOcena){
            echo"<p>Iz predmeta $predmet student ima najvisu ocenu $maksOcena.</p>";
        }
    }

    echo"<p><b>Odrediti prosečnu ocenu studenta i ispisati predmete na kojima je dobio ocenu veću od prosečne.</b></p>";

    $s=0;
    foreach($predmeti as $predmet=>$ocena){
        $s=$s+$ocena;
    }
    $sr=$s/count($predmeti);
    echo"<p><b>Prosecna ocena je $sr.</b></p>";

    foreach($predmeti as $predmet=>$ocena){
        if($ocena>$sr){
            echo"<p>Iz predmeta $predmet student ima ocenu $ocena visu od proseka $sr.</p>";
        }
    }






























?>