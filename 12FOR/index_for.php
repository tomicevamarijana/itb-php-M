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
    echo"<p>Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For petljom prikazati naizmenično te tri slike n puta (na ekranu treba biti ukupno n sličica). </p>";
    $n=7;
    for($i=1;$i<=$n;$i++){
        if($i%3==1){
            echo "<img src='1.jpg' alt='prva'>";
        }
        elseif($i%3==2){
            echo "<img src='2.jpg' alt='druga'>";
        }
        else{
            echo "<img src='3.jpg' alt='treca'>";
        }
    }
    //echo "<img src='$i.jpg' alt='prva'>"; -prikazuju se prve tri slike

    echo"<p><b>Zadatak 10-DRUGI nacin</b></p>";
    $n=7;
    for($i=1;$i<=$n;$i++){
        $ost=$i%3;
        if($ost==0){
            $ost=3;
        }
        echo "<img src='$ost.jpg' alt='prva'>";
    } // 3.nacin - moze i preko switch

    echo"<p><b>Zadatak 10-PETLJA U PETLJI</b></p>";
    echo"<p>Zadatak je: N PUTA ISPITATI po 3 slike iz osnovnog zadatka.</p>";
    $n=4;
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=3;$j++){
            echo "<img src='$j.jpg' alt='prva'>";
        }
        echo"<br>";

    }

    //11 zadatak
    echo"<p><b>Zadatak 11</b></p>";
    echo"<p>Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. *</p>";
    $s=0;
    $n=30;
    for($i=1; $i<=$n; $i++){ //for($i=9;$u<=27;$i+=9)
        if($i%9==0){
            $s=$s+$i;
        }
    }
    echo "<p>Suma brojeva od 1 do 30 deljivih sa 9 je $s.</p>";

    echo"<p><b>Zadatak 11-WHILE</b></p>";
    $s=0;
    $n=30;
    $i=1;
    while($i<=$n){
        if($i%9==0){
            $s=$s+$i;
            echo $i . ",";
        }
        $i++;
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

     echo"<p><b>Zadatak 12-WHILE</b></p>";
     $i=$n=20;
     $m=100;
     $p=1;
     while($i<=$m){
        if($i%11==0){
            $p=$p*$i;
        }
        $i++;
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
     echo"<p><b>Zadatak 13-WHILE</b></p>";
     $i=$n=5;
     $m=150;
     $br=0;
     while($i<=$m){
        if($i%13==0){
            $br=$br+1;
        }
        $i++;
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
        $br=$br+1; //$br++;
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

     echo"<p><b>Zadatak 15-WHILE</b></p>";
     $i=$n=-5;
     $m=5;
     $brP=0;
     $brN=0;
     while($i<=$m){
        if($i<0){
            $brN=$brN+1;
        }
        else{
            $brP=$brP+1;
        }
        $i++;
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

     echo"<p><b>Zadatak 16-WHILE></b></p>";
     $i=$n=5;
     $m=50;
     $br=0;
     while($i<=$m){
        if($i%3==0 || $i%5==0){
            $br=$br+1;
        }
        $i++;
     }
     echo "<p>Ima ukupno $br brojeva deljivih sa 3 i 5 od $n do $m.</p>";

     //17 zadatak
     echo"<p><b>Zadatak 17</b></p>";
     echo"<p>Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.</p>";
     $i=$n=1;
     $m=50;
     $br=0;
     $s=0;
     for($i=$n;$i<=$m;$i++){
        if($i%10==4){
            //echo $i . ", ";
            $br=$br+1;
            $s=$s+$i;
        }
     }
     echo "<p>Ima ukupno $br brojeva cija je poslednja cifra 4, od $n do $m a suma je $s..</p>";

     echo"<p><b>Zadatak 17-WHILE</b></p>";
     $i=$n=1;
     $m=50;
     $br=0;
     $s=0;
     while($i<=$m){
        if($i%10==4){
            //echo $i . ", ";
            $br=$br+1;
            $s=$s+$i;
        }
        $i++;
     }
     echo "<p>Ima ukupno $br brojeva cija je poslednja cifra 4, od $n do $m. a suma je $s.</p>";


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
     /////
     echo"<p><b>Zadatak 18-Drugi nacin</b></p>";
     $n=57;
     $m=105;
     $a=10;
     $od=$n+($n%$a); //ceil($n/$a)*$a; -moje nije dobro
     $do=$m-$m%$a; //floor($m/$a)*$a;
     
     for($i=ceil($n/$a)*$a; $i<=$m-($m%$a);$i+=$a){
        echo $i . ", ";
     }     
     echo"<p><b>do je $do</b></p>";    
     echo"<p><b>od je $od</b></p>";
         

     echo"<p><b>Zadatak 18-WHILE</b></p>";
     $i=$n=1;
     $m=100;
     $a=10;
     while($i<=$m){
        if($i%$a==0){
            echo $i . ", ";
        }
        $i++;
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

     echo"<p><b>Zadatak 19-WHILE</b></p>";
     $i=$n=1;
     $m=100;
     $a=10;
     while($i<=$m){
        if($i%$a!=0){
            echo $i . ", ";
        }
        $i++;
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

     echo"<p><b>Zadatak 20-WHILE</b></p>";
     $i=$n=1;
     $m=10;
     $a=3;
     $s=0;
     while($i<=$m){
        if($i%$a!=0){
            $s=$s+$i;
        }
        $i++;
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
     /////////

     echo"<p><b>Zadatak 21-DRUGI NACIN</b></p>";

     $i=$n=14;
     $m=32;
     $a=10;
     $b=5;
     $p=1;

     if($a%$b==0){
        echo"<p>1</p>"; //jer nema tog broja koji je deljiv sa 10 a nije sa 5
     }
     else{
        $od=ceil($n/$a)*$a; 
        $do=floor($m/$a)*$a; //$m-$m%$a;
        //prvo ponoviti iz 18.og u petlji koji su deljivi sa a, onda izbaciti one koje nisu deljivi od b.
        for($i=$od;$i<=$do;$i+=$a){
            if($i%$b==0){
            continue;
        }
        $p=$p*$i;
        }
        echo"<p>$p</p>";
     }
     





     









    
    



    

    


























?>