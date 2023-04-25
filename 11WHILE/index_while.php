<?php
//While petlja
/*
    1.Postavite pocetnu vrednost-inicijalizacija
    2.while(uslov)
        2.a.TRUE-Blok naredbi ukoliko je uslov u petlji ispunjen
        2.b.FALSE-Ne izvrsava se blok naredbi unutar while petlje, vec se prelazi na kod ispod
 */

 //1.zadatak
 //Ispisati brojeve od 1-20:(ukljuci i 20)
 //a.sve u istom redu
 //b.Svaki u novom redu
    echo"<p>Zadatak 1</p>";

    echo"<p><b>Zadatak 1</b></p>";
    $i=1;
    while($i<=20){
        echo"$i ";
        $i++; //bez ovog bi petlja bila beskonacna
    }
    echo"<i>$i</i>";//vrednost $i nakon petlje je 21;

    echo"<p>Zadatak 1. b</p>";

    $i=1;
    while($i<=20){
        echo"$i <br>";
        $i++; 
    }
    echo"<i>$i</i>";
    //Ovo su ekvivalentni izrazi za povecavanje za 1:
    //$i++; 
    //$i+=1;
    //$i=$i+1;

    //Ovo su ekvivalentni izrazi za smanjivanje za 1:
    //$i--l
    //$i-=1;
    //$i-1;

    echo"<p><b>Zadatak 2</b></p>";
    $i=20;
    while($i>=1){
        echo"$i ";
        $i--;
    }
    echo"<i>$i</i>"; //nakon izvrsenja petlje $i je 0;
    
    //Zadatak 4.
    echo"<p<b>Zadatak 4</b></p>";
    echo"<p>Kreirati n paragrafa sa proizvoljnim tekstom 
    i naizmenično ih obojiti u tri različite boje</p>";
    echo"<p>Zadatak 4-PRVI NACIN</p>";
    $n=5;
    $i=1;
    while($i<=$n){
        if($i%3==0){
            echo"<p style='color:red;'>Hello $i</p>";
        }
        elseif($i%3==1){
            echo"<p style='color:blue;'>Hello $i</p>";
        }
        else{
            echo"<p style='color:orange;'>Hello $i</p>";

        }       
        $i++;
    }

    echo"<p>Zadatak 4-DRUGI NACIN</p>";
    $n=5;
    $i=1;
    while($i<=$n){
        if($i%3==0){
            $boja="purple";
        }
        elseif($i%3==1){
            $boja="lime";
        }
        else{
            $boja="magenta";
        }
        echo"<p style='color:$boja;'>Hello $i</p>";       
        $i++;
    }

    echo"<p>Zadatak 4-TRECI NACIN</p>";
    $n=5;
    $i=1;
    while($i<=$n){
        $boja="magenta";
        if($i%3==0){
            $boja="purple";
        }
        elseif($i%3==1){
            $boja="lime";
        }        
        echo"<p style='color:$boja;'>Hello $i</p>";       
        $i++;
    }

    echo"<p><b>Zadatak 3</b></p>";
    echo"<p>Ispisati parne brojeve od 1 do 20.</p>";
    $i=1;
    while($i<=20){
        if($i%2==0){
            echo"$i, ";
        }
        $i++;
    }
    //moglo je sa brojacom $i=$i+2; bez if-a

    echo"<p><b>Zadatak 5</b></p>";
    echo"<p>Kreirati n proizvoljnih slika i staviti im naizmenično dva različita okvira</p>";
    $n=4;
    $i=1;
    
    while($i<=$n){
        if($i%2==0){
            echo "<p><img src='maslacak.jpg' style='border:5px solid red;'></p>";
        }
        else{
            echo "<p><img src='maslacak.jpg' style='border:5px solid blue;'></p>";
        }
        $i++;
    }

    //Drugi nacin-ne svidja mi se
    /*
    echo"<p>Zadatak 5-Drugi nacin</p>";
    $n=4;
    $i=1;
    $red=" 'border:5px solid red';";
    $blue="'border:5px solid red';";
    while($i<=$n){        
        if($i%2==0){
            echo "<p><img src='maslacak.jpg' $red></p>";
        }
        else{
            echo "<p><img src='maslacak.jpg' style='.$red. ></p>";
        }
        $i++;
    }
    */

    echo"<p>Zadatak X</p>";
    echo"<p>ispisi n paragrafa svaki u random boji</p>";
    $n=10;
    $i=1;    
    while($i<=$n){
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);
        $boja="rgb({$r},{$g},{$b})";                
        echo"<p style='color:$boja;'>Paragraf broj $i</p>";        
        $i++;
    }

    //6.zadatak
    echo"<p><b>Zadatak 6</b></p>";
    echo"<p>Odrediti sumu brojeva od 1 do 100.</p>";
    $i=1;
    $s=0;
    while($i<=100){
        $s=$s+$i; //$s+=$i;
        $i++;
    }
    echo"<p>Suma brojeva od 1 do 100 je: $s</p>";

    //7 zadatak
    echo"<p><b>Zadatak 7</b></p>";
    echo"<p>Odrediti sumu brojeva od 1 do n.</p>";
    
    $i=1;
    $n=100;
    $s=0;
    while($i<=$n){
        $s=$s+$i;
        $i++;
    }
    echo"<p>Suma brojeva od 1 do $n je: $s</p>";

    //8 zadatak
    echo"<p><b>Zadatak 8</b></p>";
    echo"<p>Odrediti sumu brojeva od n do m</p>";

    $n=2;
    $m=100;
    $s=0;
    $pom=$n; //cuva staru pocetnu vrednost n
    //$n=$i=10 moze ovako

    while($n<=$m){
        $s=$s+$n;
        
        //echo "<p>$n</p>";
        //echo "<p>$s</p>";
        $n++;
    }
    echo"<p>Suma brojeva od $pom do $m je: $s</p>";

    //9 zadatak
    echo"<p><b>Zadatak 9</b></p>";
    echo"<p>Odrediti proizvod brojeva od n do m.</p>";
    $n=$i=5;
    $m=7;
    $p=1;
    while($i<=$m){
        $p=$p*$i;
        $i++;
    }
    echo"<p>Proizvod brojeva od $n do $m je: $p</p>";

    //10 zadatak
    echo"<p><b>Zadatak 10</b></p>";
    echo"<p>Odrediti sumu kvadrata parnih i sumu kubova neparnih brojeva od n do m</p>";
    $n=$i=1;
    $m=4;
    $sP=0;
    $sN=0;
    while($i<$m){
        if($i%2==0){
            $sP=$sP+$i*$i; //$i**2
        }
        else{
            $sN=$sN+$i*$i*$i; //$i**3
        }
        $i++;
    }
    echo"<p>Suma kvadrata parnih brojeva od $n do $m je: $sP</p>";
    echo"<p>Suma kubova neparnih brojeva od $n do $m je: $sN</p>";

    //11 zadatak
    echo"<p><b>Zadatak 11</b></p>";
    echo"<p>Odrediti sa koliko brojeva je deljiv uneti broj k.</p>";
    $i=1;
    $k=10;
    $br=0;
    while($i<=$k){
        if($k%$i==0){
            $br=$br+1;
        }        
        $i++;
    }
    echo"<p>Broj $k deljiv je sa $br broja</p>";

     //12 zadatak
     echo"<p><b>Zadatak 12</b></p>";
     echo"<p>Odrediti da li je dati prirodan broj n prost. Broj je prost ako je deljiv samo sa jedan i sa samim sobom. </p>";
     $i=1;
     $n=10;
     $br=0;
     while($i<=$n){
        if($n%$i==0){
            $br=$br+1;
        }
        $i++;
     }
     if($br<=2){
        echo"<p>Broj $n je prost broj.</p>";
     }
     else{
        echo"<p>Broj $n nije prost broj.</p>";
     }
    

    



    
















 

?>