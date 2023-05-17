<?php
    echo "<p><b>Domaci 5</b></p>";
    echo "<p><b>Zadatak 3</b></p>";
    echo "<p>Pera i Mika su kupili dva ista džempera. Pera je dao p dinara, Mika je dao m dinara i dobili su kusur od k dinara. Brojeve p, m i k odredite proizvoljno.
    Na osnosvu unetih vrednosti, na ekranu ispisati koliki kusur treba da dobije Pera, a koliki kusur treba da dobije Mika, da bi jednako platili svako svoj džemper.</p>";

    $p=1000;
    $m=500;
    $k=620;
    $dz=($p+$m-$k)/2;
    $pKusur=$p-$dz;
    $mKusur=$m-$dz;
    echo "<p>Ako je Pera dao $p, Mika $m i kusur je $k, Pera treba da dobije $pKusur, a Mika $mKusur.</p>";

    echo"<hr>";
    echo "<p><b>Domaci 6</b></p>";
    echo "<p><b>Zadatak 1</b></p>";
    echo "<p>Butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h do 18h. Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren.</p>";
 
    $h=date('H');
    $m=date('i');
    $d=date('N');
    //Korisceni samo sati
    if($d<=5){
        if($h>=9 && $h<20){
            echo "<p>Trenutno je $h sati i $m minuta, butik je otvoren.</p>";
        }
        else{
            echo "<p>Trenutno je $h sati i $m minuta, butik je zatvoren.</p>";
        }
    }
    else {
        if($h>=10 && $h<18){
            echo "<p>Trenutno je $h sati i $m minuta, butik je otvoren.</p>";
        }
        else{
            echo "<p>Trenutno je $h sati i $m minuta, butik je zatvoren.</p>";
        }
    }

    //Korisceni sati i minuti
    if($d<=5){
        if($h*60+$m >= 9*60 && $h*60+$m < 20*60){
            echo "<p>Trenutno je $h sati i $m minuta, butik je otvoren.</p>";
        }
        else{ 
            echo "<p>Trenutno je $h sati i $m minuta, butik je zatvoren.</p>";
        }
    }
    else{
        if($h*60+$m >= 10*60 && $h*60+$m <18*60){
            echo "<p>Trenutno je $h sati i $m minuta, butik je otvoren.</p>";
        }
        else{
            echo "<p>Trenutno je $h sati i $m minuta, butik je zatvoren.</p>";
        }
    }
    
    echo "<p><b>Domaci 6</b></p>";
    echo "<p><b>Zadatak 2</b></p>";
    echo "<p>Ministarstvo zdravlja jedne zemlje je povodom pandemije virusa donelo sledeću odredbu:
    Ukoliko je procenat pozitivno testiranih stanovnika u odnosu na ukupno testirane stanovnike u jednom danu veći od 30% ili ukoliko je procenat pozitivno testiranih stanovnika veći od 10% ukupnog broja stanovnika te zemlje, automatski se uvodi vanredno stanje.
    Za proizvoljno unete vrednosti: ukupan broj stanovnika zemlje, ukupan broj testiranih u jednom danu i ukupan broj pozitivno testiranih u tom danu, na ekranu crvenom bojom ispisati VANREDNO STANJE, ukoliko treba automatski uvesti vanredno stanje prema odredbi koju je ministarstvo donelo (u suprotnom ne ispisivati ništa).
    </p>";

    $brSt=5000;
    $brTest=1500;
    $brPoz=451;

    if($brPoz>$brTest*0.3 || $brPoz>$brSt*0.1){
        echo "<p style='color:red'>VANREDNO STANJE</p>";       
    }

    echo"<hr>";
    echo "<p><b>Domaci 7</b></p>";
    echo "<p><b>Zadatak 1</b></p>";
    echo "<p>Odrediti zbir cifara unetog celog broja i dobijeni zbir ispisati na ekranu:<br>
        Ukoliko je zbir cifara broja jednak samom broju, na ekranu se zbir ispisuje uokviren narandžastom bojom
        Npr. za broj 5 zbir cifara je 5, što je jednako unetom broju 5 <br>       
        Ukoliko je zbir cifara broja manji od samog broja, na ekranu se zbir ispisuje uokviren plavom bojom.
        Npr. za broj 101 zbir cifara je 1+0+1 = 2, što je manje od unetog 101.</p>";
    $i=$n=55;
    $s=0;
    while($i>0){
        //echo $i%10 . ", ";
        $s=$s+$i%10;
        $i=($i-$i%10)/10;
    }
    if($s==$n){
            echo "<p style='color:orange'>$s</p>"; 
    }
    else{
        echo "<p style='color:blue'>$s</p>"; 
    }

    echo "<p><b>Domaci 7</b></p>";
    echo "<p><b>Zadatak 2</b></p>";
    echo "<p>Za uneti ceo broj odrediti koliko ima delioca koji su deljivi brojem 3 i neparni su.
    Npr. za broj 15, delioci su 1, 3, 5 i 15, što znači da ima 2 delioca koji su deljivi brojem 3 i neparni su (to su brojevi 3 i 15)
    Npr. za broj 6, delioci su 1, 2, 3, 6, što znači da ima 2 delioca koji su deljivi brojem 3 (3 i 6), ali samo jedan od njih je neparan (broj 3), te je rešenje ovog primera 1.</p>";

    $n=15;
    $i=1;
    $br=0;
    while($i<=$n){
        if($n%$i==0){
            if($i%3==0 && $i%2!=0){
                echo $i . ", ";
                $br++;
            }
        }
        $i++;
    }

    echo "<p><b>vezbanje pred test</b></p>";
    echo "<p><b>Zadatak 1</b></p>";
    echo "<p>ZADATAK. Sa niškog aerodroma u toku jednog dana polaze letovi ka različitim gradovima. Dat je asocijativni niz u kojem su ključevi destinacije letova, a vrednosti broj putnika na svakom letu.
    Kreirati niz letovi po uslovima zadatka.
    Napisati funkciju maxBrojPutnika(etovi) kojoj se prosleđuje niz letova, a funkcija vraća maksimalan broj putnika na nekom od letova.
    Napisati funkciju brojMax(letovi) kojoj se prosleđuje niz letova, a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.
    Napisati funkciju prosek(letovi) kojoj se prosleđuje niz letova, a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.
    Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. Napisati funkciju isplativ(letovi, granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).
    Dan je alarmantan za niški aerodrom ukoliko postoji neki let u kojem je broj putnika bio manji od zadate granice. Napisati funkciju alarmantan(letovi, granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio alarmantan (vraća true ukoliko je postojao let u kojem je broj putnika bio manji od granice, i false ako nije).
    Napisati funkciju dobreDestinacije(letovi) kojoj se prosleđuje niz letova, a funkcija ispisuje letove sa natprosečnim brojem putnika.
    </p>";

    $letovi=["Pariz"=>250,"Istanbul"=>400,"Beograd"=>400,"Kraljevo"=>150];

    echo "<p><b>deo 2</b></p>";
    function maxBrojPutnika($letovi){
        $maks=0;
        foreach($letovi as $dest=>$broj){
            if($broj>$maks){
                $maks=$broj;
            }
        }
        return $maks;
    }
    //poziv
    echo "Maksimalni broj putnika je: " . maxBrojPutnika($letovi);    

    echo "<p><b>deo 3</b></p>";
    function brojLetovi($letovi){
        $maksPutnika=maxBrojPutnika($letovi); //obavezno unutar funkcije da bi bila vidljiva!!! ako je van, onda global $imePromenljive
        $br=0;
        foreach($letovi as $dest=>$broj){
            if($broj==$maksPutnika){
                $br++;
            }
        }
        return $br;
    }
    //poziv
    echo brojLetovi($letovi);

    echo "<p><b>deo 4-PROSEK LETOVI</b></p>";
    function prosekLetovi($letovi){
        $s=0;
        $br=0;
        foreach($letovi as $dest=>$broj){
            $s=$s+$broj;            
            $br++;
        }
        $sr=round($s/$br);
        return $sr;
    }
    //poziv 
    echo "Prosecan broj putnika po letovima je " . prosekLetovi($letovi);

    //5 isplativ
    echo "<p><b>deo 5-ISPLATIV</b></p>";
    function isplativ($letovi,$granica){
        $brOk=0;
        $brNo=0;
        foreach($letovi as $dist=>$broj){
            if($broj>=$granica){
                $brOk++;                
            }
            else{
                $brNo++;
            }
        }
        if($brOk>=$brNo){
            return true;
            //echo "true";
        }
        else{
            //echo "false";
            return false;
        }
    }
    echo "Let je bio isplativ za granicu 300: " . (isplativ($letovi,300)?"Jeste":"Nije");
    if(isplativ($letovi,300)){
        echo "Jeste";
    }
    else{
        echo "Nije";
    }

    echo "<p><b>deo 6-ALARMANTAN</b></p>";
    //6 alarmantan

    function alarmantan($letovi,$granica){
        $br=0;
        foreach($letovi as $dest=>$broj){
            if($broj<$granica){
                $br++;
            }
        }
        if($br>0){
            //return true;
            echo "true";
        }
        else{
            //return false;
            echo "false";
        }
    }
    echo "Dan je bio alarmantan za granicu 100" . (alarmantan($letovi,100)?"jeste":"nije");

    echo "<p><b>deo 7-dobre destinacije</b></p>";
    //7 DOBRE DESTINACIJE

    function dobreDestinacije($letovi){
        $sr=prosekLetovi($letovi);
        foreach($letovi as $dest=>$broj){ //do sad je moglo samo values
            if($broj>$sr){
                echo "<p>Let ka destinaciji $dest (broji $broj putnika)</p>";
            }
        }
    }
    echo "Dobre destinacije su: ";
    echo dobreDestinacije($letovi);

    echo "<hr>";
    echo "<p><b>2 ZADATAK</b></p>";
    echo "<p><b>deo 1</b></p>";

    $letovi=[
        ["Beograd,Srbija"=>"07:22"],
        ["Zagreb","Hrvatska","12:30"],
        ["Pariz","Francuska","17:30"],
    ];
    //nastavice se....
    
    echo "<p><b>TEMPERATURE</b></p>";

    $dan=array(
        "datum"=>"2023/05/16",
        "kisa"=>true,
        "sunce"=>true,
        "oblacno"=>false,
        "temperature"=>array(5,8,13,17,12,9,6)
    );
    echo "<p><b>15. Prosecne temperature</b></p>";
    function prosecnaTemp($dan){
        $temperature=$dan["temperature"];
        $suma=0;
        //for($i=0;$i<count($temperature);$i++)
        foreach($temperature as $temp){ //bolje for petlja,indexi su 0-6
            $suma=$suma+$temp;
        }
        //pretpostavljamo da niz nije prazan i deljenje nulom
        $prosek=$suma/count($temperature);
        return $prosek;
    }
    echo "Prosecna temp.za dan " . $dan["datum"] . " je: " . prosecnaTemp($dan);

    echo "<p><b>16. broj natprosecnih temperatura</b></p>";
    function brojNatprosecnoMerenih($dan){
        $prosecnaTemperatura=prosecnaTemp($dan);
        $br=0;
        $temperature=$dan["temperature"];
        foreach($temperature as $temp){
            if($temp>$prosecnaTemperatura){
                $br++;
            }
        }
        return $br;        
    }
    echo "Broj merenja sa natprosecnom temp: " . $dan["datum"] . " jednak je: " . brojNatprosecnoMerenih($dan);

    echo "<p><b>17. </b></p>";

    echo "<p><b>18. Napisati funkciju koja prima 3 parametra koji predstavljaju dan i dve temperature. Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost između ove dve zadate temperature (ne uključujući te dve vrednosti).
    </b></p>";

    function brojMerenjaIzmedju($dan,$min,$max){
        $temperature=$dan["temperature"];//niz merenja temp. tog dana
        $br=0;
        foreach($temperature as $temp){
            if($temp>$min && $temp<$max){
                $br++;
            }
        }
        return $br;
    }
    $v1=7;
    $v2=15;
    echo "Broj merenja na dan " . $dan["datum"] . "izmedju vrednosti $v1 i $v2 jednak je: " . brojMerenjaIzmedju($dan,$v1,$v2);


        
    













    















?>