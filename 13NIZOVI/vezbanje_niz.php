<?php

    //zadatak 1
    echo"<p><b>ZADATAK 1</b></p>";    
    echo"<p>Ispisati sve elemente niza od 5 stringova.</p>";

    $nizStr=["string 1","string 2", "string 3","string 4","string 5"];
    for($i=0;$i<count($nizStr);$i++){
        echo "$nizStr[$i], ";
    }
    echo"<br>";
    var_dump($nizStr);

    //zadatak 2
    echo"<p><b>ZADATAK 2</b></p>";    
    echo"<p>Odrediti zbir elemenata celobrojnog niza.</p>";
    //prvo cu da dodam elemente u niz uz pomoc FOR
    $n=1;
    $m=6;
    $niz=[]; //nije neophodno
    for($i=$n;$i<=$m;$i++){
        $niz[]=$i;
    }
    var_dump($niz);
    echo"<br>";
    $s=0;
    for($i=0;$i<count($niz);$i++){
        $s=$s+$niz[$i];
        echo $niz[$i] . ', ';
    }
    echo"<p>Zbir elemenata celobrojnog niza od $n do $m je $s.</p>";

     //zadatak 3
     echo"<p><b>ZADATAK 3</b></p>";    
     echo"<p>Odrediti srednju vrednost elemenata celobrojnog niza.</p>";
     
     $niz=[1,2,3,4,5,6];
     //var_dump($niz);
     $s=0;
     for($i=0;$i<count($niz);$i++){
        $s=$s+$niz[$i];        
     }
     $srvr=$s/count($niz);
     //$srvr=array_sum($niz)/count($niz);
     echo"<p>Srednja vrednost elemenata celobrojnog niza je $srvr.</p>";

     //zadatak 4
     echo"<p><b>ZADATAK 4</b></p>";    
     echo"<p>Odrediti maksimalnu vrednost u celobrojnom nizu.</p>";

     $niz=[2,13,4,50,-6,50];
     $max=$niz[0];
     $maxIndeks=0;
     for($i=0;$i<count($niz);$i++){
        if($niz[$i]>$max){ //kada je strogo manje, resenje je el.sa prvim indeksom, a manje ili jednako, resenje je poslednji el.
            $max=$niz[$i];
            $maxIndeks=$i;
        }
     }
     echo"<p>Maksimalna vrednost u celobrojnom nizu je $max, a njegov indeks je $maxIndeks.</p>";

     //zadatak 5
     echo"<p><b>ZADATAK 5</b></p>";    
     echo"<p>Odrediti maksimalnu vrednost u celobrojnom nizu.</p>";

     $niz=[2,13,4,50,-6,50,-6];
     $min=$niz[0];
     $minIndeks=0;
     for($i=0;$i<count($niz);$i++){
        if($niz[$i]<=$min){
            $min=$niz[$i];
            $minIndeks=$i;
        }
     }
     echo"<p>Minimalna vrednost u celobrojnom nizu je $min, a njegov indeks je $minIndeks.</p>";

      //zadatak 6
      echo"<p><b>ZADATAK 6</b></p>";    
      echo"<p>Odrediti indeks najvećeg elementa celobrojnog niza.</p>";

      $niz=[2,13,4,50,-6,50];
      $max=$niz[0];
      $nizMaxIndeksa=[];
      for($i=0;$i<count($niz);$i++){
        if($niz[$i]>$max){
            $max=$niz[$i];
            $nizMaxIndeksa=[$i]; //bez ovog bi maks bio i nulti, predefnisani
            //$nizMaxIndeksa=[$i]; //u nizu je samo jedan el (prvi ili poslednji maxIndeks)
            //$nizMaxIndeksa[]=$i; //dodaje na kraj samo promene trenutnih maksimuma
        }
        elseif($niz[$i]==$max){
            $nizMaxIndeksa[]=$i; //dodaje na kraj samo one koji su sigurno maksimum
        }
      }
      echo"<p>Maksimalna vrednost u celobrojnom nizu je $max, a njegovi indeksi su:</p>";
      for($i=0;$i<count($nizMaxIndeksa);$i++){        
        echo $nizMaxIndeksa[$i] . ', ';
      }

      //zadatak 7
      echo"<p><b>ZADATAK 7</b></p>";    
      echo"<p>Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti. *</p>";
      $niz=[1,2,3,4,5,6];
      $br=0;
      for($i=0;$i<count($niz);$i++){
        if(array_sum($niz)/count($niz)<$niz[$i]){
            $br=$br+1;
            //echo $niz[$i] . ", ";
        }
      }
      echo"<p>Broj elemenata celobrojnog niza koji su veći od srednje vrednosti  je $br.</p>";

      //zadatak 8
      echo"<p><b>ZADATAK 8</b></p>";    
      echo"<p>Izračunati zbir pozitivnih elemenata celobrojnog niza.</p>";
      $niz=[-4,-3,-2,-1,0,1,2,3,4,5];
      $s=0;
      for($i=0;$i<count($niz);$i++){
        if($niz[$i]>0){
            $s=$s+$niz[$i];
        }
      }
      echo"<p>Zbir pozitivnih elemenata celobrojnog niza je $s.</p>";

      //zadatak 9
      echo"<p><b>ZADATAK 9</b></p>";    
      echo"<p>Odrediti broj parnih elemenata u celobrojnom nizu. *</p>";
      $niz=[-4,-3,-2,-1,0,1,2,3,4,5];
      $br=0;
      for($i=0;$i<count($niz);$i++){
        if($niz[$i]%2==0){
            $br=$br+1;
            //echo $niz[$i] . ", ";
        }
      }
      echo"<p>Broj parnih elemenata u celobrojnom nizu je $br.</p>";

      //zadatak 10
      echo"<p><b>ZADATAK 10</b></p>";    
      echo"<p>Izračunati sumu elemenata u nizu sa parnim indeksom. *</p>";
      $niz=[-4,-3,-2,-1,0,1,2,3,4,5,6];
      $s=0;
      for($i=0;$i<count($niz);$i++){
        if($i%2==0){
            $s=$s+$niz[$i];            
        }
      }
      echo"<p>Suma elemenata u nizu sa parnim indeksom je $s.</p>";

      //zadatak 11
      echo"<p><b>ZADATAK 11</b></p>";    
      echo"<p>Promeniti znak svakom elementu celobrojnog niza.</p>";
      $niz=[-4,-3,-2,-1,0,1,2,3,4,5,6];
      for($i=0;$i<count($niz);$i++){
        $niz[$i]=-$niz[$i];
      }
      //ispis istog niza
      for($i=0;$i<count($niz);$i++){
        echo $niz[$i] . ", ";
      }

      echo"<p><b>ZADATAK 11-pravljenje novog niza</b></p>"; 
      $niz=[-4,-3,-2,-1,0,1,2,3,4,5,6,7,8]; 
      $novNiz=[]; //nije neophodno
      for($i=0;$i<count($niz);$i++){
        $novNiz[]=-$niz[$i];
      }
      //ispis novog niza
      for($i=0;$i<count($novNiz);$i++){
        echo $novNiz[$i] . ", ";
      }

      //zadatak 12
      echo"<p><b>ZADATAK 12</b></p>";    
      echo"<p>Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom. *</p>";
      $niz=[1,2,4,5,5,6,7,8,9];
      for($i=0;$i<count($niz);$i++){
        if($i%2==0 && $niz[$i]%2!=0){
            $niz[$i]=-$niz[$i];
        }
      }
      //ispis
      for($i=0;$i<count($niz);$i++){
        echo $niz[$i] . ', ';
      }

      //zadatak 13
      echo"<p><b>ZADATAK 13</b></p>";    
      echo"<p>Odrediti broj parnih elemenata sa neparnim indeksom. *</p>";
      $niz=[1,2,4,5,5,6,7,8,9];
      $br=0;
      for($i=0;$i<count($niz);$i++){
        if($i%2!=0 && $niz[$i]%2==0){
            $br=$br+1;
            //echo $niz[$i] . ', ';
        }
      }
      echo"<p>Broj parnih elemenata sa neparnim indeksom je $br.</p>";

      //ZADACI SA STRINGOVIMA
      echo"<p><b>ZADACI SA STRINGOVIMA</b></p>";

      //zadatak 14
      echo"<p><b>ZADATAK 14</b></p>";    
      echo"<p>Ispisati dužinu svakog elementa u nizu stringova.</p>";

      $niz=["Marijana","Ana","Milena","Tanasko"];
      for($i=0;$i<count($niz);$i++){
        echo strlen($niz[$i]) . ", ";
      }

      //zadatak 15
      echo"<p><b>ZADATAK 15</b></p>";    
      echo"<p>Odrediti element u nizu stringova sa najvećom dužinom.</p>";

      $niz=["Marijana","Ana","Milena","Tanasko","MarijanaTomic"];
      $maxLen=strlen($niz[0]);
      $maxEl=$niz[0]; //bitno je da se ove vrednosti pravilno zadaju

      for($i=0;$i<count($niz);$i++){
        if(strlen($niz[$i])>$maxLen){
            $maxLen=strlen($niz[$i]);
            $maxEl=$niz[$i];
        }
      }
      echo"<p>Element u nizu stringova sa najvećom dužinom je string $maxEl.</p>";

      //zadatak 16
      echo"<p><b>ZADATAK 16</b></p>";    
      echo"<p>Odrediti broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu.</p>";

      $s=0;
      $br=0;
      $niz=["Marijana","Ana","Milena","Tanasko","MarijanaTomic"];
      for($i=0;$i<count($niz);$i++){
        $s=$s+strlen($niz[$i]);        
      }
      $srvr=$s/count($niz);      
      for($i=0;$i<count($niz);$i++){
        if(strlen($niz[$i])>$srvr){
            $br=$br+1;
        }
      }
      echo"<p>Broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu je $br.</p>";

      //zadatak 17
      echo"<p><b>ZADATAK 17</b></p>";    
      echo"<p>Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'. *</p>";
      
      $niz=["aa","bb","aba","cc","da","A","aA","a"];
      $br=0;
      for($i=0;$i<count($niz);$i++){
        if(str_contains($niz[$i],'a')){
            $br=$br+1;
            echo $niz[$i] . ", ";
        }
      }
      echo"<p>Broj elemenata u nizu stringova koji sadrže slovo 'a' je $br.</p>";

      //zadatak 18
      echo"<p><b>ZADATAK 18</b></p>";    
      echo"<p>Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'.</p>";

      $niz=["aa","bb","aba","cc","da","A","aA","a"];
      $br=0;
      for($i=0;$i<count($niz);$i++){
        if(str_starts_with($niz[$i],'a') || str_starts_with($niz[$i],'A')){
            $br=$br+1;
            echo $niz[$i] . ", ";
        }
      }
      echo"<p>Broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A' je $br.</p>";

      //NAPREDNI ZADACI
      echo"<p><b>NAPREDNI ZADACI</b></p>";

      //zadatak 19
      echo"<p><b>ZADATAK 19</b></p>";    
      echo"<p>Na osnovu celobrojnog niza a[0], a[1], … formirati niz b[0], b[1], ... koji sadrži samo pozitivne brojeve.</p>";
      $a=[-4,-3,-2,-1,0,1,2,3,4,5,6,-7];
      $b=[];
      for($i=0;$i<count($a);$i++){
        if($a[$i]>0){
            $b[]=$a[$i];
        }
      }
      //ispis niza b:
      for($i=0;$i<count($b);$i++){
        echo $b[$i] . ", ";
      }

      //zadatak 20
      echo"<p><b>ZADATAK 20</b></p>";    
      echo"<p>Dati su nizovi 
      a[0], a[1], …, a[n-1], i  
      b[0], b[1], …, b[n-1]. <br>
      Formirati niz c[0], c[1], …, c[2n-1] čiji su elementi 
      a[0], b[0], a[1], b[1], …, a[n-1], b[n-1].</p>";
      $a=[1,2,3,4,5,6];
      $b=[-1,-2,-3,-4,-5,-6];
      $c=[];
      for($i=0;$i<count($a);$i++){
        $c[]=$a[$i];
        $c[]=$b[$i];
      }
      //ispis novog niza c:
      for($i=0;$i<count($c);$i++){
        echo $c[$i] . ", ";
      }

      //zadatak 21
      echo"<p><b>ZADATAK 21</b></p>";    
      echo"<p>Dati su nizovi 
      a[0], a[1], …, a[n-1], i  
      b[0], b[1], …, b[n - 1]. <br>
      Formirati niz c[0], c[1], …, c[n-1] čiji su elementi 
      a[0] * b[0], a[1] * b[1], …, a[n-1] * b[n-1].</p>";
      $a=[1,2,3,4,5,6];
      $b=[-1,-2,-3,-4,-5,-6];
      $c=[];
      for($i=0;$i<count($a);$i++){
        $c[]=$a[$i]*$b[$i];
      }
      //ispis novog nica c:
      for($i=0;$i<count($c);$i++){
        echo $c[$i] . ", ";
      }

      //zadatak 22
      echo"<p><b>ZADATAK 22</b></p>";    
      echo"<p>Na osnovu niza a[0], a[1], …, a[2n-1] formirati niz b[0], b[1], …, b[n-1].po formuli: ( a[i]+a[2n-1] )/2. </p>";
      $a=[1,2,3,4,5,6,7,8,9]; //indeksi su 0-8, ukupno count je 9
      $b=[];      
      
      for($i=0;$i<count($a)/2;$i++){
        $b[]=($a[$i]+$a[count($a)-1-$i])/2;
      }      
      //ispisivanje novog niza c:
      for($i=0;$i<count($b);$i++){
        echo $b[$i] . ", ";
      }

      //Sortiranje niza
      echo"<p><b>Sortiranje niza</b></p>";
      $niz=[2,5,3,4,8,6,7];
      


      




?>