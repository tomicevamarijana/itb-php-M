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
            echo "<img src='1.jpg' alt='prva'>";
        }
        elseif($i%3==1){
            echo "<img src='2.jpg' alt='druga'>";
        }
        else{
            echo "<img src='3.jpg' alt='treca'>";
        }
    }

    //11 zadatak
    echo"<p><b>Zadatak 11</b></p>";
    echo"<p>Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. *</p>";
    $s=0;
    $n=30;
    for($i=1; $i<=$n; $i++){
        if($i%9==0){
            $s=$s+$i;
        }
    }
    echo "<p>Suma brojeva od 1 do 30 deljivih sa 9 je $s.</p>";

     //12 zadatak
     echo"<p><b>Zadatak 12</b></p>";
     echo"<p>Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100.</p>";
     $i=$n=20;
     $m=100;
     $p=1;
     for($i=20;$i<=$m;$i++){
        if($i%11==0){
            $p=$p*$i;
        }
     }
     echo "<p>Proizvod brojeva od $n do $m je $p.</p>";

     //13 zadatak
     echo"<p><b>Zadatak 13</b></p>";
     echo"<p>Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150.</p>";
     $i=$n=5;
     $m=150;
     $br=0;
     for($i=5;$i<=$m;$i++){
        if($i%13==0){
            $br=$br+1;
        }
     }
     echo "<p>Broj brojeva od $n do $m deljivih sa 13 je $br.</p>";

     //14 zadatak
     echo"<p><b>Zadatak 14</b></p>";
     echo"<p>Ispisati aritmetičku sredinu brojeva od n do m.</p>";
     $i=$n=1;
     $m=99;
     $br=0;
     $s=0;
     for($i=$n;$i<=$m;$i++){
        $s=$s+$i;
        $br=$br+1;
     }
     $sr=$s/$br;
     echo "<p>Aritmeticka sredina brojeva od $n do $m je $sr.</p>";

     //15 zadatak
     echo"<p><b>Zadatak 15</b></p>";
     echo"<p>Prebrojati koliko brojeva od n do m je pozitivno, a koliko njih je negativno.</p>";
     $i=$n=-5;
     $m=5;
     $brP=0;
     $brN=0;
     for($i=$n;$i<=$m;$i++){
        if($i<0){
            $brN=$brN+1;
        }
        else{
            $brP=$brP+1;
        }
     }
     echo "<p>Ima ukupno pozitivnih $brP, a $brN negativnih brojeva od $n do $m.</p>";

     //16 zadatak
     echo"<p><b>Zadatak 16></b></p>";
     echo"<p>Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5.</p>";
     $i=$n=5;
     $m=50;
     $br=0;
     for($i=$n;$i<=$m;$i++){
        if($i%3==0 || $i%5==0){
            $br=$br+1;
        }
     }
     echo "<p>Ima ukupno $br brojeva deljivih sa 3 i 5 od $n do $m.</p>";

     //17 zadatak
     echo"<p><b>Zadatak 17</b></p>";
     echo"<p>Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.</p>";
     $i=$n=1;
     $m=50;
     $br=0;
     for($i=$n;$i<=$m;$i++){
        if($i%10==4){
            echo $i . ", ";
            $br=$br+1;
        }
     }
     echo "<p>Ima ukupno $br brojeva cija je poslednja cifra 4, od $n do $m.</p>";

     //18 zadatak
     echo"<p><b>Zadatak 18</b></p>";
     echo"<p>Ispisati brojeve od n do m, koji su deljivi sa a.</p>";
     $i=$n=1;
     $m=100;
     $a=10;
     for($i=$n;$i<=$m;$i++){
        if($i%$a==0){
            echo $i . ", ";
        }
     }

     //19 zadatak
     echo"<p><b>Zadatak 19</b></p>";
     echo"<p>Ispisati brojeve od n do m koji nisu deljivi sa a.</p>";
     $i=$n=1;
     $m=10;
     $a=3;
     for($i=$n;$i<=$m;$i++){
        if($i%$a!=0){
            echo $i . ", ";
        }
     }

     //20 zadatak
     echo"<p><b>Zadatak 20</b></p>";
     echo"<p>Odrediti sumu brojeva od n do m koji nisu deljivi brojem a. *</p>";
     $i=$n=1;
     $m=10;
     $a=3;
     $s=0;
     for($i=$n;$i<=$m;$i++){
        if($i%$a!=0){
            $s=$s+$i;
        }
     }
     echo "<p>Suma brojeva od $n do $m koji nisu deljivi sa $a je $s.</p>";

     //21 zadatak
     echo"<p><b>Zadatak 21</b></p>";
     echo"<p>Odrediti proizvod brojeva od n do m koji su deljivi brojem a, a nisu brojem b.</p>";
     $i=$n=1;
     $m=10;
     $a=2;
     $b=3;
     $p=1;
     for($i=$n;$i<=$m;$i++){
        if($i%$a==0 && $i%$b!=0){
            $p=$p*$i;
        }
     }
     echo"<p>Proizvod brojeva od $n do $m koji su deljivi brojem $a, a nisu brojem $b je $p.</p>";





     









    
    



    

    


























?>