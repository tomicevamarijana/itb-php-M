<?php

    //zadatak 1
    echo"<p><b>ZADATAK 1</b></p>";    
    echo"<p>Množiti sve brojeve od 20 ka 1, sve dok proizvod ne predje 10.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.</p>";

    $i=$n=20;
    $p=1;
    while($i>=1){
        $p=$p*$i;
        if($p>10000){
            echo"<p style='color:red;'>Proizvod je $p.</p>";
            echo"<p style='color:green;'>Poslednji pomnozeni broj je $i.</p>";
            break;            
        }
        $i--;
    }

    //zadatak 2
    echo"<p><b>ZADATAK 2</b></p>";    
    echo"<p>Uneti 2 broja. Ukoliko je prvi broj manji od drugog broja, množiti prvi broj samim sobom, sve dok rezultat ne bude veći od drugog unetog broja. U suprotnom na ekranu ispisati “GREŠKA”.</p>";

    $i=$n=8;
    $m=132;
    if($n<$m){
        while($i<=$m){
            $i*=$n;
        }
        echo"<p>$i</p>";
    }
    else{
        echo"<p>GRESKA</p>"; 
    }   

    //zadatak PODSECANJE
    echo"<p><b>ZADATAK Podsecanje</b></p>";    
    echo"<p>Odredi sumu cifara unetog broja.</p>";
     $i=$n=30;
     $s=0;
     while($i>0){
        $cifra=$i%10;
        $s+=$cifra;
        echo $cifra . ", ";
        $i=($i-$cifra)/10;
     }
     echo"<p>Suma cifara unetog broja je $s.</p>";


     //zadatak 3
    echo"<p><b>ZADATAK 3</b></p>";    
    echo"<p>Prikazati brojeve od 30 do 100, ali preskociti sve one cija je poslednja cifra deljiva sa 3 ili deljiva sa 5, ili je zbir cifara u broju deljiv sa 4.</p>";   
    
     $i=$n=30;
     $m=100;

     while($i<=$m){
        $posCif=$i%10;
        if($posCif%3!=0 && $posCif%5!=0){
            $s=0;
            $j=$i;
            while($j>0){
                $cifra=$j%10;
                $s+=$cifra;
                //echo $cifra . ", ";
                $j=($j-$cifra)/10;
            }
            if($s%4!=0){               
                echo $i . ", ";
            }
        }
        $i++;
     }

     //zadatak 4
    echo"<p><b>ZADATAK 4</b></p>";    
    echo"<p>Za unete cele brojeve a, b ispisati brojeve iz intervala [a, b], od kojih je prvi broj koji se ispisuje jednak broju a, dok je svaki sledeći tri puta veći od prethog broja.<br>
    Na primer za  [a, b] = [5, 50] treba ispisati 5, 15, 45.</p>";

    $a=5;
    $b=50;    
    while($a<=$b){
        echo $a . ", ";
        $a=$a*3;
    }

    //zadatak 5
    echo"<p><b>ZADATAK 5</b></p>";    
    echo"<p>Odrediti proizvod brojeva od 1 do 20, a potom od njega oduzeti zbir brojeva od 1 do 30.</p>";

    //zadatak 6
    echo"<p><b>ZADATAK 6</b></p>";    
    echo"<p>Odrediti sumu kubova brojeva od n do m.</p>";

    //zadatak 8
    echo"<p><b>ZADATAK 8</b></p>";    
    echo"<p>Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.</p>";

    //zadatak 9
    echo"<p><b>ZADATAK 9</b></p>";    
    echo"<p>Odrediti ceo deo i ostatak pri deljenju celih brojeva a i b, bez korišćenja operacija / i %.</p>";

    $a=5;
    $i=$a;
    $b=32;
    $ceoDeo=0;
    
    while($i<=$b){
        $ceoDeo=$ceoDeo+1;
        echo $i . ", ";
        $i=$a+$i;
    }
    $ostatak=$b-$a*$ceoDeo;
    echo"<p>Ceo deo je $ceoDeo, a ostatak je $ostatak.</p>";


    //zadatak 10
    echo"<p><b>ZADATAK 10</b></p>";    
    echo"<p>Za dat prirodan broj n i realne brojeve α, β iz intervala [-1, 1], odrediti sumu elemenata oblika
    sin(n + i/n),       i = 1, 2, …, n, <br>
    čija vrednost pripada intervalu [α, β].</p>";

    //zadatak 11
    echo"<p><b>ZADATAK 11</b></p>";    
    echo"<p>Kreirati n proizvoljnih slika i staviti im naizmenično dva različita okvira</p>";

    //ispirivanje palindroma
    echo"<p><b>Palindrom</b></p>";    
    echo"<p>Ispitati da li je uneti broj n palindrom.</p>";

    $i=$n=1234321;  
    $x=0; //ovaj br se petljom reverzuje
    while($i>0){
        $cifra=$i%10;
        $x=$x*10+$cifra;
        $i=($i-$cifra)/10;
    }
    
    if($n==$x){
        echo"<p>Broj $n jeste palindrom</p>"; 
    }
    else{
        echo"<p>Broj $n nije palindrom</p>"; 
    }





    

















     








?>