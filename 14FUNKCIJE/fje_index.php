<?php

    function mojaFunkcija(){
        echo "<p>Moja prva funkcija, ali ne i poslednja!</p>";
    }

    mojaFunkcija();
    mojaFunkcija();
    mojaFunkcija();

    function mojaFunkcija2($tekst){
        echo "<p>F-ja sa parametrom: $tekst</p>"; //zna samo za ovaj parametar, ne moze $text!
        $b="nova lokalna promenljiva";
        global $c; //ovako moze da se pozove neka fja sa strane
        echo "<p>F-ja sa parametrom: $tekst i $b i $c. </p>";
    }
    mojaFunkcija2("1.nacin");

    $a="2.nacin";
    mojaFunkcija2($a); 
    $c="globalna";

    $b="van f-je"; 

    mojaFunkcija2($a);

    function ispisImena($ime,$prezime){
        echo "<p>Ime i prezime je $ime $prezime.</p>";
    }

    ispisImena("Marijana","Tomic");
    $ime="Ana";
    $prezime="Tomic Po";
    ispisImena($ime, $prezime);

    function ispisImena2($ime,$prezime=null){//neobavezan parametar
        echo "<p>Ime je $ime</p>";
        if ($prezime){
            echo "<p>Prezime je $prezime</p>"; 
        }
    }
    ispisImena2("Mika");
    ispisImena2("Mika","Mikic");

    function ispisImena3($ime,$prezime=null,$godine){//neobavezan parametar
        echo "<p>Ime je $ime</p>";
        if ($prezime){
            echo "<p>Prezime je $prezime</p>"; 
        }
        echo "<p>Godine je $godine</p>";

    }
    ispisImena3("Mika",null,28);
    ispisImena3("Mika","Mikic",28);

    ///zbir

    function zbir($a,$b){
        $c=$a+$b;
        //echo "<p>$c</p>"; //bez return ne mogu da koristim c 
        return $c;    
    }
    $pom=zbir(3,8); //uzima vrednost return iz funkcije
    echo "<p>$pom</p>";
    echo zbir(3,8);
    echo "<hr>";

    echo zbir(zbir(3,5),10);
    echo "<hr>";

    $a=zbir(4,9);
    $b=zbir(5,10);
    $c=zbir($a,$b);
    echo $c;
    echo "<hr>";

    echo zbir(zbir(4,9),zbir(5,10));




    zbir(3,8);
    zbir(3,"10");
    //zbir(3,"a"); ne moze

    /*
    *f-ja koja sabira dva broja
    *ovo je bilo korisno zbog ekstenzije koja na hover prikazuje opis
    */
    function zbir2(int $a,int $b){
        $c=$a+$b;
        return $c;
    }

    ////////5.5.23
    echo"<p><b>VEZBANJE FUNKCIJE</b></p>"; 
    echo"<p><b>ZADATAK 1 </b></p>";
    echo"<p>Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.
    Pozvati funkciju i testirati njen rad.</p>";

    function neparan($broj){
        //echo"<p>Pocetak funkcije</p>";
        $rez=true;
        if($broj%2==0){
            //return false; 
            $rez=false; //napusta se funkcija
        }
        /*
        else{ 
            return true;
        }
        */
        //echo"<p>Kraj funkcije</p>";
        return $rez;
    }
    $a=10;
    if(neparan($a)){ //kad je false, ide se u else granu
        echo"<p>Broj $a je neparan</p>";
    }
    else{
        echo"<p>Broj $a je paran</p>";
    }

    //zadatak 2
    echo"<p><b>ZADATAK 2 </b></p>";
    echo"<p>Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja.
    Pozvati funkcije i testirati njihov rad.</p>";

    function maks2($a,$b){
        if($a>$b){
            return $a;
        }
        else{
            return $b;
        }
    }
    //poziv
    $broj1=15;
    $broj2=45;
    $veci=maks2($broj1,$broj2);
    echo"<p>Veci od brojeva $broj1 i $broj2 je $veci.</p>";
    ///drugi deo
    /*
    function maks4($a,$b,$c,$d){
        $maksAB=maks2($a,$b);
        $maksCD=maks2($c,$d);
        $maks=maks2($maksAB,$maksCD);
        return $maks;
    }*/
    function maks4($a,$b,$c,$d){        
        return maks2(maks2($a,$b),maks2($c,$d));
    } //kraci zapis

    //poziv
    $b1=10;
    $b2=25;
    $b3=0;
    $b4=10;
    $r=maks4($b1,$b2,$b3,$b4);
    echo"<p>Maksimalni od brojeva $b1, $b2,$b3,$b4 je $r.</p>";

    function kub($a){
        return $a*$a*$a;
    }
    $broj=10;
    $rez=kub($broj);
    $broj=kub($broj);
    echo"<p>$rez</p>";

    function uvecaj(&$a,$korak=10){//default
        $a=$a+$korak;
    }

    $broj=15;
    uvecaj($broj);
    echo"<p>$broj</p>";

    function uvecaj2($a,$korak=10){//default
        return $a+$korak;
    }
    $broj=15;
    $broj=uvecaj2($broj);
    echo"<p>$broj</p>";
    //ovo je bilo objasnjenje reference

    function proba($a=null,$b=1,$c=3){
        if(is_null($a)) {$a=1;}
        return $a+$b*$c;
    }
    

    //zadatak 3
    echo"<p><b>ZADATAK 3</b></p>";
    echo"<p>Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike.
    Pozvati funkciju i testirati je za različite url adrese.</p>";

    function slika($url){
        echo "<img src='$url'>"; //nema return
    }
    slika("https://www.zenasamja.me/images/0100/monalisa-v.jpg");//navodnici jer je url string

    //zadatak 4
    echo"<p><b>ZADATAK 4</b></p>";
    echo"<p>Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je.</p>";

    function obojenaRec($boja,$tekst){
        echo"<p style='color:$boja'>$tekst</p>";
    }
    obojenaRec('red','ovo je tekst crvene boje'); //moze bilo koji navodnici
    obojenaRec('blue','ovo je tekst plave boje');

    //zadatak 5
    echo"<p><b>ZADATAK 5</b></p>";
    echo"<p>Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju</p>";

    function recenica1(){
        for($i=10;$i<=(10+4*5);$i+=5){
            echo"<p style='font-size:${i}px'>Recenica</p>"; //'font-size:$i'
        }
    }
    recenica1();

    //zadatak 6
    echo"<p><b>ZADATAK 6</b></p>";
    echo"<p>Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.</p>";

    function recenica2($a){
        echo"<p style='font-size:${a}px'>Proizvoljna recenica</p>";
    }
    for($i=10;$i<=(10+4*5);$i+=5){
        recenica2($i);
    }

    //zadatak 7
    echo"<p><b>ZADATAK 7</b></p>";
    echo"<p>Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. 
    Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.</p>";

    function aritmeticka($n,$m){ //treba if da je prvi br manji
        if($n<$m){
            $s=0;
            $br=0;
            for($i=$n;$i<=$m;$i++){
                $s=$s+$i;
                $br++;
            }
            return $s/$br;
        }
        else{
            return "<p>Unesite ispravne parametre.</p>"; 
        }        
    }
    //poziv
    $rez7=aritmeticka(1,5);
    echo "<p>$rez7</p>";

    //zadatak 8
    echo"<p><b>ZADATAK 8</b></p>";
    echo"<p>Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.
    Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.</p>";

    function aritmetickaCifre($n,$m){
        $s=0;
        $br=0;
        for($i=$n;$i<=$m;$i++){
            if($i%10==3){
                $br=$br+1;
                $s=$s+$i;
            }
        }
        if($br){ //da li je true
            $rez=$s/$br;
            return $rez;
        }
        else{ //moglo je bez else
            return "<p>U opsegu nema takvih brojeva.</p>"; 
        }
    }
    //poziv
    $rez8=aritmetickaCifre(5,35);
    echo "<p>$rez8</p>";

    //zadatak 9
    echo"<p><b>ZADATAK 9</b></p>";
    echo"<p>Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.
    Napišite funkciju praksa kojoj se prosleđuju brojevi n,a i d. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.
    Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).</p>";

    function praksa($n,$a,$d){
        $ukupno=$a;
        for($i=2;$i<=$n;$i++){
            $ukupno=$ukupno+$a+$d;
        }
        return $ukupno; //$ukupno=$a+($n-1)*($a+$d)
    }

    function praksa2($n,$a,$d){
        $ukupno=0;
        for($i=1;$i<=$n;$i++){
            $ukupno=$ukupno+$a+$d;
        }
        return $ukupno-$d; //$ukupno=$n*($a+$d)-$d;
    }
    echo"<hr>";
    $n=10;
    $a=1000;
    $d=120;
    echo praksa($n,$a,$d);
    echo"<hr>";
    echo praksa2($n,$a,$d);

    //zadatak 10
    echo"<p><b>ZADATAK 10</b></p>";
    echo"<p>* Napraviti niz celih brojeva. 
    Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka.
    Pozvati funkciju i testirati je.</p>";

    $niz=[1,2,3,4,5,6,7,8,9,11];
    for($i=0;$i<count($niz);$i++){
        if(neparan($niz[$i])){
            echo $niz[$i] . ", ";
        }
    }
    //FOREACH
    foreach($niz as $k=>$v){ //foreach($niz as $v)
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
        //$str="";
        //for($i=0;$i<=count($niz)-1;$i++)
        for($i=0;$i<count($niz);$i++){
            if(neparan($niz[$i])){
                $br++;
                //$str.=$niz[$i]." ";
            }
        }
        return $br; //nikako u petlju jer kad izadje prvi put, gotova fja, kao break
    }
    $rez11=brojNeparnih($niz);    
    echo $rez11;
    echo"<p> Broj neparnih u nizu je: ".brojNeparnih($niz)."</p>";

    //zadatak 12
    echo"<p><b>ZADATAK 12</b></p>";
    echo"<p>U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. 
    Testirati implementirani kod.</p>";

    function najnizaTemp($niz){
        $minTemp=100;
        $minDatum="";
        $dan=1;//brojac
        $minDan=0;
        foreach($niz as $datum=>$temp){
            if($minTemp>$temp){
                $minTemp=$temp;
                $minDatum=$datum;
                $minDan=$dan;                
            }
            $dan++;//vestacki dodat da se prolazi kroz petlju
        }
        $dani=['Pon','Uto','Sre','Cet','Pet'];
        echo "<p style='color:blue'>".$dani[$minDan-1]." ".$minDatum." sa temp: ".$minTemp."</p>";
    }    

    $niz=['01.05.2023'=>19,'02.05.2023'=>22,'03.05.2023'=>18,'04.05.2023'=>15,'01.05.2023'=>25];

    najnizaTemp($niz);


    







    

    





    
    





   




?>