<?php
    //1 zadatak
    echo"<p><b>Zadatak 1</b></p>";
    echo"<p>Ispisati brojeve od 1 do 20.</p>";
    for($i=1;$i<=20;$i++){ //$i+=2 ako hocu svaki drugi
        echo "$i, ";
    }

    //2 zadatak
    echo"<p><b>Zadatak 2</b></p>";
    echo"<p>Ispisati brojeve od 20 do 1.</p>";
    for($i=20;$i>=1;$i--){
        echo "$i, ";
    }

    //3 zadatak
    echo"<p><b>Zadatak 3</b></p>";
    echo"<p>Ispisati parne brojeve od 1 do 20. *</p>";
    for($i=2;$i<=20;$i=$i+2){
        echo "$i, ";
    }

    //4 zadatak
    echo"<p><b>Zadatak 4</b></p>";
    echo"<p>Ispisati dvostruku vrednost brojeva  od 5 do 15.</p>";
    for($i=5;$i<=15;$i++){
        $p=$i*2;
        //echo "$p, ";
        echo  $i*2 . ", "; //ovo je ok
    }

    //5 zadatak
    echo"<p><b>Zadatak 5</b></p>";
    echo"<p>Odrediti sumu brojeva od 1 do 100. </p>";
    $s=0;
    for($i=1;$i<=100;$i++){
        $s=$s+$i;
    }
    echo "<p>Suma je $s.</p>";

    //6 zadatak
    echo"<p><b>Zadatak 6</b></p>";
    echo"<p>Odrediti sumu brojeva od 1 do n. </p>";
    $s=0;
    $n=100;
    for($i=1;$i<=$n;$i++){
        $s=$s+$i;
    }
    echo "<p>Suma od 1 do $n je $s.</p>";

    //7 zadatak
    echo"<p><b>Zadatak 7</b></p>";
    echo"<p>Odrediti sumu brojeva od n do m.</p>";
    $s=0;
    $n=2;
    $m=100;                                                                             
    for($i=$n;$i<=$m;$i++){
        $s=$s+$i;
    }
    echo "<p>Suma od $n do $m je $s.</p>";

    //8 zadatak
    echo"<p><b>Zadatak 8</b></p>";
    echo"<p>Odrediti proizvod brojeva od n do m. </p>";
    $p=1;
    $n=1;
    $m=3;                                                                             
    for($i=$n;$i<=$m;$i++){
        $p=$p*$i;
    }
    echo "<p>Proizvod brojeva od $n do $m je $p.</p>";

    //9 zadatak
    echo"<p><b>Zadatak 9</b></p>";
    echo"<p>Odrediti sumu kvadrata brojeva od n do m . </p>";
    $s=0;
    $n=1;
    $m=3;                                                                             
    for($i=$n;$i<=$m;$i++){
        $kv=$i*$i;
        $s=$s+$kv; //$s+=$i**2;
    }
    echo "<p>Suma kvadrata brojeva od $n do $m je $s.</p>";

    //10 zadatak
    echo"<p><b>Zadatak 10</b></p>";
    echo"<p>Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For petljom prikazati naizmenično te tri slike $n puta 
    (na ekranu treba biti ukupno n sličica). </p>";
    $n=6;
    for($i=1;$i<=$n;$i++){
        if($i%3==0){
            echo "<p><img src='1.jpg' alt='prva'></p>";
        }
        elseif($i%3==1){
            echo "<p><img src='2.jpg' alt='druga'></p>";
        }
        else{
            echo "<p><img src='3.jpg' alt='treca'></p>";
        }
    }

    //11 zadatak
    echo"<p><b>Zadatak 11</b></p>";
    echo"<p>Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. *</p>";

    /////ovde sam stala

    ////domaci 
    //3 zadatak
    echo"<p><b>DOMACI 7</b></p>";
    echo"<p><b>Zadatak 3</b></p>";
    echo"<p>For petljom odrediti da li je dati prirodan broj n prost. Broj je prost ako je deljiv samo sa jedinicom i sa samim sobom.</p>";
    echo"<p><em>Resenje:</em></p>";
    $br=0;
    $n=18;
    for($i=1;$i<=$n;$i++){
        if($n%$i==0){
            $br=$br+1;
        }
    }
    if($br==2){
        echo "<p>Broj $n je prost.</p>";
    }
    else{
        echo "<p>Broj $n nije prost.</p>";
    }

    //2 zadatak
    echo"<p><b>Zadatak 2</b></p>";
    echo"<p>Za uneti ceo broj odrediti koliko ima delioca koji su deljivi brojem 3 i neparni su.
    Npr. za broj 15, delioci su 1, 3, 5 i 15, što znači da ima 2 delioca koji su deljivi brojem 3 i neparni su (to su brojevi 3 i 15)
    Npr. za broj 6, delioci su 1, 2, 3, 6, što znači da ima 2 delioca koji su deljivi brojem 3 (3 i 6), ali samo jedan od njih je neparan (broj 3), te je rešenje ovog primera 1.</p>";
    echo"<p><em>Resenje:</em></p>";
    $br=0;
    $n=21;
    for($i=1;$i<=$n;$i++){
        if($n%$i==0){
            if($i%2!=0 && $i%3==0){
                $br=$br+1;
            }
        }
    }
    echo "<p>Postoji ukupno $br delioca broja $n koji su ujedno deljivi brojem 3 i neparni.</p>";

    //1 zadatak
    echo"<p><b>Zadatak 1</b></p>";
    echo"<p>Odrediti zbir cifara unetog celog broja i dobijeni zbir ispisati na ekranu:<br>
        a) Ukoliko je zbir cifara broja jednak samom broju, na ekranu se zbir ispisuje uokviren narandžastom bojom
        Npr. za broj 5 zbir cifara je 5, što je jednako unetom broju 5<br> 
        b) Ukoliko je zbir cifara broja manji od samog broja, na ekranu se zbir ispisuje uokviren plavom bojom.
        Npr. za broj 101 zbir cifara je 1+0+1 = 2, što je manje od unetog 101
        </p>";
        echo"<p><em>Resenje:</em></p>";

        $s=0;
        $n=$i=234;
        while($i!=0){            
            $cifra=$i%10;
            //echo $cifra . ", ";
            $s=$s+$cifra;            

            $i=($i-$cifra)/10;
        }        
        if($s==$n){
            echo "<p>Suma cifara broja $n je <span style='border:5px solid orange;'> $s </span>.</p>";
        }
        else{
            echo "<p>Suma cifara broja $n je <span style='border:5px solid blue;'> $s </span>.</p>";
        }

























?>