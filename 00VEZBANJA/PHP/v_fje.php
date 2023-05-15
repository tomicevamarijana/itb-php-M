<?php
    echo"<p><b>Vezbanje funkcija</b></p>";

    //zadatak 1
    echo"<p><b>ZADATAK 1</b></p>";    
    echo"<p>Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.Pozvati funkciju i testirati njen rad.</p>";

    function neparan($n){
        if($n%2!=0){
            return true;            
        }
        else{ 
            return false;
        }
    }
    //testiranje
    $a=10;
    if(neparan($a)){
        echo"<p>Broj $a je neparan</p>";
    }
    else{
        echo"<p>Broj $a je paran</p>";
    }

    //zadatak 2
    echo"<p><b>ZADATAK 2</b></p>";    
    echo"<p>Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja.
    Pozvati funkcije i testirati njihov rad.</p>";

    function maks2($a,$b){
        if($a>$b){
            $max=$a;            
        }
        else{
            $max=$b;
        }
        return $max;
    }
    //testiranje
    $a=1;
    $b=10;
    $rez2=maks2($a,$b);
    echo"<p>Veci od 2 broja $a i $b je $rez2. </p>";

    function maks4($a,$b,$c,$d){
        $max=maks2(maks2($a,$b),maks2($c,$d));
        return $max;
    }
    //testiranje
    $a=5;
    $b=4;
    $c=11;
    $d=9;
    $rez4=maks4($a,$b,$c,$d);
    echo"<p>Veci od 4 brojeva $a,$b,$c,$d je $rez4. </p>";

    //zadatak 3
    echo"<p><b>ZADATAK 3</b></p>";    
    echo"<p>Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike.
    Pozvati funkciju i testirati je za različite url adrese.</p>";

    function slika($a){
        echo "<img src='$a' width=20%>";
    }
    //poziv
    slika('https://www.danas.rs/wp-content/uploads/2022/12/Meisje_met_de_parel.jpg');

    //zadatak 4
    echo"<p><b>ZADATAK 4</b></p>";    
    echo"<p>Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je.</p>";

    function obojenaRec($boja,$rec){
        echo "<p style='color:$boja'>Ovo je $rec obojena u $boja.</p>";
    }
    //poziv
    obojenaRec("green","rec");

    //zadatak 5
    echo"<p><b>ZADATAK 5</b></p>";    
    echo"<p>Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju</p>";
    
    function recenica1(){
        for($i=10;$i<(10+5*5);$i+=5){
            echo"<p style='font-size:$i'>tekst ispisan pet puta.</p>";
        }
    }
    recenica1("'tekst'");

    //zadatak 6
    echo"<p><b>ZADATAK 6</b></p>";    
    echo"<p>Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.</p>";

    function recenica2($vel){
        echo "<p style='font-size:$vel'>Proizvoljna recenica</p>";
    }
    for($i=10;$i<=10+4*5;$i+=5){
        recenica2($i);
    }

    //zadatak 7
    echo"<p><b>ZADATAK 7</b></p>";    
    echo"<p>Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. 
    Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.</p>";

    function aritmeticka($n,$m){
        $br=0;
        $s=0;
        for($i=$n;$i<=$m;$i++){
            $br++;
            $s=$s+$i;
        }
        return $s/$br;
    }
    $a=1;
    $b=9;
    $rez7=aritmeticka($a,$b);
    echo"<p>Aritmeticka sredina brojeva od $a do $b je $rez7. </p>";

    //zadatak 8
    echo"<p><b>ZADATAK 8</b></p>";    
    echo"<p>Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.
    Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.</p>";

    function aritmetickaCifre($n,$m){
        $br=0;
        $s=0;
        for($i=$n;$i<=$m;$i++){
            if($i%10==3){
                $br++;
                $s=$s+$i;
            }
        }
        return $s/$br;
    }
    //poziv
    $a=1;
    $b=20;
    $rez8=aritmetickaCifre($a,$b);
    echo"<p>Aritmeticka sredina brojeva od $a do $b cija je poslednja cifra 3 je $rez8. </p>";

    //zadatak 9
    echo"<p><b>ZADATAK 9</b></p>";    
    echo"<p>Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.
    Napišite funkciju praksa kojoj se prosleđuju brojevi n i a. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.
    Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).</p>";

    function praksa($n,$a,$d){
        $s=$a;
        for($i=2;$i<=$n;$i++){
            $s=$s+$a+$d;
        }
        return $s;
    }
    //poziv
    $n=10; //meseci
    $a=1000; //plata
    $d=100; //povisica
    $rez9=praksa($n,$a,$d);
    echo"<p>Ukupna plata zarad od $n meseci, platu $a i povisicu $d je $rez9.</p>";

    //zadatak 10
    echo"<p><b>ZADATAK 10</b></p>";    
    echo"<p>* Napraviti niz celih brojeva. 
    Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka.
    Pozvati funkciju i testirati je.</p>";

    $niz=[1,2,3,4,5,6,7,8];
    for($i=0;$i<count($niz);$i++){
        if(neparan($niz[$i])){
            echo $niz[$i] . ", ";
        }
    }
    echo"<p>Foreach as k=>v</p>";
    foreach($niz as $k=>$v){
        if(neparan($v)){
            echo $v . ", ";
        }
    }

    echo"<p>Foreach as v</p>";
    foreach($niz as $v){
        if(neparan($v)){
            echo $v . ", ";
        }
    }

    //zadatak 11
    echo"<p><b>ZADATAK 11</b></p>";    
    echo"<p>* Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz.
    Pozvati funkciju i testirati je.</p>";

    function brojNeparnih($niz){
        $br=0;
        for($i=0;$i<count($niz);$i++){
            if(neparan($niz[$i])){
                $br++;
            }
        }
        return $br;
    }
    $rez11=brojNeparnih($niz);
    echo"<p>Ukupna broj neparnih brojeva je $rez11.</p>";

    //zadatak 12
    echo"<p><b>ZADATAK 12</b></p>";    
    echo"<p>U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. 
    Testirati implementirani kod.</p>";
    
    $niz=["1.5.2023"=>19,"2.5.2023"=>22,"3.5.2023"=>18,"4.5.2023"=>15,"5.5.2023"=>25];

    //funkcija za minimalnu temperaturu
    function minTemp($niz){
        $min=1000;
        $minDatum="";
        $minDan="";
        $br=1;
        $minDan=0;
        foreach($niz as $datum=>$t){
            if($t<$min){
                $min=$t;
                $minDatum=$datum;
                $minDan=$br;
            }
            $br=$br+1;
        }
        if($minDan==1){
            $minDan="Pon";
        }
        elseif($minDan==2){
            $minDan="Uto";
        }
        elseif($minDan==3){
            $minDan="Sre";
        }
        elseif($minDan==4){
            $minDan="Cet";
        }
        else{
            $minDan="Pet";
        }
        echo "<p style='color:blue'>Najhladniji je bio $minDan, $minDatum sa $min stepeni.</p>";
    }
    //poziv
    echo minTemp($niz);

    //funkcija za ispisivanje dana
    function dan($dan){
        if($dan==1){
            $dan="Pon";
        }
        elseif($dan==2){
            $dan="Uto";
        }
        elseif($dan==3){
            $dan="Sre";
        }
        elseif($dan==4){
            $dan="Cet";
        }
        else{
            $dan="Pet";
        }
        return $dan;
    }
    echo dan(5);

    //funkcija za maksimalnu temperaturu
    function maksTemp($niz){
        $maks=-273;
        $maksDan=0;
        $br=1;
        $maksDatum="";
        foreach($niz as $datum=>$t){
            if($t>$maks){
                $maks=$t;
                $maksDatum=$datum;
                $maksDan=$br;
            }
            $br++;
        }
        $maksDanStr=dan($maksDan);        
        echo "<p style='color:red'>Dan sa najvisom temp.je $maksDanStr, $maksDatum sa temp $maks.</p>";        
    }
    echo maksTemp($niz);

    //zadatak 13
    echo"<p><b>ZADATAK 13</b></p>";    
    echo"<p>* Dat je niz rečenica. Napraviti funkciju ili više njih kako biste zelenom bojom ispisali sve palindromske rečenice iz niza rečenica, a crvenom bojom ispisati sve ostale rečenice.
    Rečenica je palindromska ukoliko se isto čita slava na desno i sdesna na levo (neračunajući razmake). </p>";

    $niz=["Maja jede jabuke","Ana voli Milovana","ana voli milovana"];

    
    for($i=0;$i<count($niz);$i++){
        $niz[$i]=str_replace(" ","",$niz[$i]);
        //$niz[$i]=strtolower(str_replace(" ","",$niz[$i]));        
    }    
    //samo ispis 
    for($i=0;$i<count($niz);$i++){
        echo $niz[$i] . ",";
    }
    echo "<br>";

    /*
    $obrnutiNiz=[];
    for($i=0;$i<count($niz);$i++){
        $obrnutaRec="";        
        for($j=strlen($niz[$i]);$j>0;$j--){
            //$poslednjeSlovo=
            $obrnutaRec=$obrnutaRec . substr($niz[$i],-1);
        }
        $obrnutiNiz[]=$obrnutaRec;
    }
    //samo ispis obrnutog niza
    for($i=0;$i<count($obrnutiNiz);$i++){
        echo $obrnutiNiz[$i] . ",";
    }
    */
    function palindromStr($niz){
        for($i=0;$i<count($niz);$i++){
            if($niz[$i]==strrev($niz[$i])){
                echo "<p style='color:green'>$niz[$i]</p>";
            }
            else{
                echo "<p style='color:red'>$niz[$i]</p>";
            }
        }
    }
    //poziv
    echo palindromStr($niz);

    //Domaci 7, zadatak 1. - jos jedan nacin resenja
    //ZADATAK 24
    echo"<hr><p>Domaci 7-Zadatak 1</p>";
    echo"<p>Odrediti zbir cifara unetog celog broja i dobijeni zbir ispisati na ekranu:
        Ukoliko je zbir cifara broja jednak samom broju, na ekranu se zbir ispisuje uokviren narandžastom bojom
        Npr. za broj 5 zbir cifara je 5, što je jednako unetom broju 5        
        Ukoliko je zbir cifara broja manji od samog broja, na ekranu se zbir ispisuje uokviren plavom bojom.
        Npr. za broj 101 zbir cifara je 1+0+1 = 2, što je manje od unetog 101</p>";

    $a = 158126;
    $dec = 10;
    $s = $a % 10;
    while($a > $dec) {
        $s += ($a % ($dec * 10) - $a % $dec) / $dec;
        $dec *= 10;
    }

    //Domaci 8, zadatak 1. pogledajte uslov kako je resen
    echo"<hr><p>Domaci 8-Zadatak 1</p>";
    echo"<p>Odrediti proizvod brojeva od n do m koji su deljivi sa 7 a nisu sa 3, a potom od njega oduzeti zbir brojeva od n do m koji su deljivi sa 3 a nisu sa 7:
    Koristeći while petlju
    Kotisteći for petlju</p>";

    $n = 5;
    $m = 28;
    $p = 1;
    $s = 0;
    $i = $n;
    while($i <= $m) {
        if($i % 7 == 0) {
            if($i %3 != 0) {
                $p *= $i;
            }
        } elseif($i %3 == 0) {
            $s += $i;
        }
        $i++;
    }
    

    

    
   
    




    










    





?>