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


    















?>