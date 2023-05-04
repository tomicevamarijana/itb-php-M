<?php
    $car1="BMW";
    $car2="Volvo";
    $car3="Toyota";

    //niz
    $cars=array("BMW","Volvo","Toyota");
    //$cars=["BMW","Volvo","Toyota"]; //dva nacina kreiranja
    //Indeksi elemenata ovog niza su: 0, 1, 2.
    var_dump($cars);
    echo"<br>";
    var_dump($car1);
    echo"<br>";
    echo "$car1";
    echo"<br>";
    //echo "$cars"; echo nece da ispise niz
    print_r($cars); //manje slozen ispis od var_dump

    //pristupanje
    echo"<p><b>PRISTUPANJE ELEMENTIMA</b></p>";
    $prviEl=$cars[0];
    $drugiEl=$cars[1];
    $treciEl=$cars[2];
    echo"<p>Prvi el: $prviEl, drugi el: $drugiEl, i treci element $treciEl.</p>";
    echo"<p>Prvi el u nizu je: $cars[0]";
    //echo"<p>Osmi el u nizu je: $cars[7]"; //Undefined array keyc-ne postoji taj el.
    

    //izmena elemenata
    echo"<p><b>IZMENA ELEMENATA</b></p>"; //izmena se vrsi ako pod tim indeksom postoji el.U suprotnom, samo se doda 
    $cars[1]="Peugeot";
    print_r($cars);
    $cars[30]="Audi";
    print_r($cars);

    $polaznici=[]; //definisan prazan niz
    $polaznici[]="Aleksandar"; //Dodaje element na kraj niza
    $polaznici[]="Uros";
    $polaznici[]="Milijana";
    $polaznici[]="Andreja";
    $polaznici[]="Nikola";
    echo"<br>"; var_dump($polaznici);

    $duzina=count($polaznici);//prebrojava elemente
    echo"<p>U nizu ima $duzina polaznika</p>";

    echo"<p><b>ISPISIVANJE FOR PETLJOM</b></p>";
    for($i=0;$i<$duzina;$i++){
        echo"<p>$polaznici[$i]</p>";
    }

    echo"<p><b>ZADACI <hr></b></p>";
    echo"<p><b>ZADAtak 1</b></p>";
    echo"<p>Odredi sumu elemenata celobrojnog niza</p>";
    $brojevi=[5,14,-4,0,11,-7,9];
    $s=0;
    for($i=0;$i<count($brojevi);$i++){
        //echo"<p>$brojevi[$i]</p>";
        //echo $brojevi[$i] . ", ";
        $s=$s+$brojevi[$i]; 
    }
    echo"<p>Suma elemenata celobrojnog niza je $s.</p>";
    //ugradjena funkcija - umesto FOR petlje
    $zbir=array_sum($brojevi);
    echo"<p>Suma elemenata celobrojnog niza je $zbir.</p>";

    //zadatak 3
    echo"<p><b>ZADATAK 3</b></p>";
    echo"<p>Odredi srednju vrednost celobrojnog niza</p>";
    $arsr=array_sum($brojevi)/count($brojevi);
    echo"<p>Srednja vrednost celobrojnog niza je $arsr.</p>";
    //dopuna - 1.nacin: 
    if(count($brojevi)==0){
        echo"<p>Prazan niz-aritmeticka sr.je 0.</p>";        
    }
    else{
        $arsr=array_sum($brojevi)/count($brojevi);
        echo"<p>Srednja vrednost celobrojnog niza je $arsr.</p>";
    }

    //dopuna - 2.nacin ispitivanja da li je prazan niz, zbog deljenja 0.
    echo"<p>2.nacin.</p>";
    $brojevi=[]; 
    if($brojevi==array()){ //if(empty($brojevi)) ili if($brojevi==[]) ili if(!$brojevi)
        echo"<p>Prazan niz-aritmeticka sr.je 0.</p>";        
    }
    else{
        $arsr=array_sum($brojevi)/count($brojevi);
        echo"<p>Srednja vrednost celobrojnog niza je $arsr.</p>";
    }
    
    //zadatak 4
    echo"<p><b>ZADATAK 4</b></p>";
    echo"<p>Odredi maksimalnu vrednost celobrojnog niza</p>";

    $brojevi=[5,14,-4,0,11,-7,9];
    $max=$brojevi[0];
    
    for($i=0;$i<count($brojevi);$i++){
        $trenutniEl=$brojevi[$i];
        if($trenutniEl>$max){ 
            $max=$trenutniEl;
        }        
    }
    //drugi nacin - bez uvodjena promenljive
    echo"<p><b>ZADATAK 4-ovo</b></p>";
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]>$max){
            $max=$brojevi[$i];
            
        }
    }    
    echo"<p>Maksimalna vrednost celobrojnog niza je $max, a indeks je $i.</p>";
    var_dump($brojevi);

    //zadatak 6
    echo"<p><b>ZADATAK 6.1</b></p>";    
    echo"<p>Odredi indeks prvog pojavljivanja najveceg elementa</p>";
    $brojevi=[5,14,-4,14,11,-7,14]; 
    //6.1   
    echo"<p>Odredi indeks najveceg elementa niza</p>";
    echo"<p>Prvi nacin-posebna petlja za indekse, kad se prvi put pojavi maks vrednost-cuva njegov indeks u promenljivoj</p>";
    $maks=$brojevi[0];
    $indeksMaks=0;
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]>$max){
            $max=$brojevi[$i];
        }
    }    
    for($i=0; $i<count($brojevi);$i++){
        if($brojevi[$i]==$max){
           $indeksMaks=$i;
           break;
        }
    }
    echo"<p>Maksimalna vrednost celobrojnog niza je $max, a indeks je $indeksMaks.</p>";
    
    //drugi nacin
    echo"<p><b>Drugi nacin-nadje se maksimalni el, u istom ifu se u promenljivoj maksIndes se cuva i</b></p>";
    $brojevi=[5,14,-4,14,11,-7,14];
    $max=$brojevi[0];
    $indeksMaks=0;
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]>$max){
            $max=$brojevi[$i];
            $indeksMaks=$i;
        }
    }    
    
    echo"<p>Maksimalna vrednost celobrojnog niza je $max, a a njegov indeks u prvom pojavljivanju je $indeksMaks.</p>";
    //u ostale maksimume ne ulazi, jer ne ulazi u if, strogo vece. Za VECE ILI JEDNAKO cuva poslenje pojavljivanje!

    //zadatak 6.2
    echo"<p><b>ZADATAK 6.2</b></p>";    
    echo"<p>Odredi indeks poslednjeg pojavljivanja najveceg elementa</p>";

    $brojevi=[5,14,-4,14,11,-7,14];
    $max=$brojevi[0];
    $indeksMaks=0;
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]>=$max){
            $max=$brojevi[$i];
            $indeksMaks=$i;
        }
    }    
    echo"<p>Maksimalna vrednost celobrojnog niza je $max, a a njegov indeks u poslednjem pojavljivanju je $indeksMaks.</p>";

    //zadatak 6.2
    echo"<p><b>ZADATAK 6.2-drugi nacin-unatraske prolazak</b></p>";    
    echo"<p>Odredi indeks poslednjeg pojavljivanja najveceg elementa</p>";

    $brojevi=[5,14,-4,14,11,-7,14,4];

    $brEl=count($brojevi);    
    $indeksMaks=$brEl-1;
    $max=$brojevi[$indeksMaks];
    for($i=$indeksMaks;$i>=0;$i--){
        if($brojevi[$i]>$max){ //strogo vece, dobijamo indeks poslednjeg (prvog otpozadi); za vece ili jednako dobija se indeks 0;
            $max=$brojevi[$i];
            $indeksMaks=$i;
        }
    } //nisam sigurna za ovaj
    echo"<p>Maksimalna vrednost celobrojnog niza je $max, a a njegov indeks u poslednjem pojavljivanju je $indeksMaks.</p>";    

    $brojevi=[5,6,14,-4,14,11,-7,14];    
    $max=$brojevi[0];
    $indeksMaks=0;
    $sviIndeksi=[];
    //1.prolazak-odredjuje maksimum
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]>$max){ //u niz dodvati samo kad ==max, Betin nacin, i kreira novi niz
            $max=$brojevi[$i];            
        }
    }
    echo"<p>Maksimalna vrednost celobrojnog niza je $max, A iindeksi pojavljivanja ovog elementa su: </p>";    
    
    //2.prolazak-trazi sve elemente jednake maksimumu i belezi njihove indekse
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]==$max){
            $sviIndeksiMaks[]=$i;
            echo $i . ", ";            
        }
    }

    //Betin nacin

    $brojevi=[5,6,14,-4,14,11,-7,14];    
    $max=$brojevi[0];    
    $sviIndeksi=[];
    
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]>$max){ //u niz dodvati samo kad ==max, Betin nacin, i kreira novi niz
            $max=$brojevi[$i]; 
            //$sviIndeksiMaks=[];
            //pa dodaj novi u prazan
            $sviIndeksiMaks=[$i]; //ovo znaci da smo ispraznili   
        }
        elseif($brojevi[$i]==$max){
            $sviIndeksiMaks[]=$i; //ovde ne pravi novi niz, samo dopunjuje
        }
    }
    //$sviIndeksiMaks=[2,4,7]; -izgleda ovako
    echo"<p>Najveci el ima vrednost $max, A njegovi indeksi pojavljivanja su elementa su: </p>";  
    for($i=0;$i<count($sviIndeksiMaks);$i++)  {
        echo "$sviIndeksiMaks[$i], "; 
    }
    //implode() za ispisivanje niza kao string
    

    //nastavak - 5.3.2023.
    echo"<p><hr></p>"; 

    //zadatak 7
    echo"<p><b>ZADATAK 7</b></p>";    
    echo"<p>Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti. *</p>";

    $brojevi=[5,6,14,-4,14,11,-7,14];
    $br=0;
    $s=0;
    for($i=0;$i<count($brojevi);$i++){
        $s=$s+$brojevi[$i];
        
    }    
    $sr=$s/count($brojevi);
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]>$sr){
            $br=$br+1; //$br++
        }
    }
    echo"<p>Broj elemenata celobrojnog niza koji su veći od srednje vrednosti koja iznosi $sr je $br .</p>";

    //zadatak 8
    echo"<p><b>ZADATAK 8</b></p>";    
    echo"<p>Izračunati zbir pozitivnih elemenata celobrojnog niza.</p>";

    $s=0;
    $brojevi=[5,6,14,-4,14,11,-7,14];
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]>0){
            $s=$s+$brojevi[$i];
        }
    }
    echo"<p>Zbir pozitivnih elemenata celobrojnog niza je $s.</p>";

    //BONUS zadatak 
    echo"<p><b>BONUS ZADATAK </b></p>";    
    echo"<p>Izračunati srednju vrednost parnih elemenata celobr niza.</p>";

    $br=0;
    $s=0;
    $brojevi=[2,2,2,2];
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]%2==0){
            $br++;
            $s=$s+$brojevi[$i];
        }
    }
    if($br!=0){
        $srvr=$s/$br; //obratiti paznju na deljenje nulom!
    }
    else{
        $srvr=0; //nema parnih elemenata
    }
    echo"<p>Srednja vrednost parnih elemenata celobr niza je $srvr.</p>";
    



    //zadatak 9
    echo"<p><b>ZADATAK 9</b></p>";    
    echo"<p>Odrediti broj parnih elemenata u celobrojnom nizu. *</p>";

    $brojevi=[5,6,14,-4,14,11,-7,14];    
    $br=0;
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]%2==0){
            $br=$br+1;
        }
    }
    echo"<p>Broj parnih elemenata u celobrojnom nizu je $br.</p>";

    //zadatak 10
    echo"<p><b>ZADATAK 10</b></p>";    
    echo"<p> Izračunati sumu elemenata u nizu sa parnim indeksom. </p>";
    //$brojevi=[5,6,14,-4,14,11,-7,14];
    $brojevi=[2,2,2,2];
    $s=0;
    for($i=0;$i<count($brojevi);$i++){
        if($i%2==0){
            $s=$s+$brojevi[$i];
        }
    }
    echo"<p>Suma elemenata u nizu sa parnim indeksom je $s.</p>";
    //ovde je dobro koristiti korak $i+=2, kada se traze parni indeksi

    //zadatak 11
    echo"<p><b>ZADATAK 11</b></p>";    
    echo"<p>Promeniti znak svakom elementu celobrojnog niza.</p>";
    $brojevi=[2,2,2,2];
    for($i=0;$i<count($brojevi);$i++){
        $brojevi[$i]=-$brojevi[$i];
    }
    //ispis niza
    for($i=0;$i<count($brojevi);$i++){
        echo $brojevi[$i] . ", ";
    }

    //zadatak 12
    echo"<p><b>ZADATAK 12</b></p>";    
    echo"<p>Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom. *</p>";
    $brojevi=[2,2,3,3,4,4,5,5];
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]%2!=0 && $i%2==0){
            $brojevi[$i]=-$brojevi[$i];
        }
    }
    //ispis niza
    for($i=0;$i<count($brojevi);$i++){
        echo $brojevi[$i] . ", ";
    }

    //zadatak 12-bolji nacin
    echo"<p><b>ZADATAK 12-BOLJI NACIN</b></p>";

    $brojevi=[2,2,3,3,4,4,5,5];
    for($i=0;$i<count($brojevi);$i+=2){
        if($brojevi[$i]%2!=0){
            $brojevi[$i]=-$brojevi[$i];
        }        
    }
    //ispis niza
    for($i=0;$i<count($brojevi);$i++){
        echo $brojevi[$i] . ", ";
    }

    //zadatak 13
    echo"<p><b>ZADATAK 13 -proba</b></p>";    
    echo"<p>Odrediti broj parnih elemenata sa neparnim indeksom. *</p>";
    $brojevi=[2,2,3,3,4,4,5,5];
    $br=0;
    for($i=1;$i<=count($brojevi);$i+=2){
        if($brojevi[$i]%2==0){
            $br=$br+1;
        }
    }
    echo"<p>Broj parnih elemenata sa neparnim indeksom je $br -PROBA.</p>";

    //zadatak 13
    echo"<p><b>ZADATAK 13-normalno</b></p>";

    $brojevi=[2,2,3,3,4,4,5,5,6];
    $br=0;
    for($i=0;$i<count($brojevi);$i++){
        if($brojevi[$i]%2==0 && $i%2!=0){
            $br=$br+1;
        }
    }
    echo"<p>Broj parnih elemenata sa neparnim indeksom je $br.</p>";

    //zadatak 14
    echo"<p><b>ZADATAK 14</b></p>";    
    echo"<p>Ispisati dužinu svakog elementa u nizu stringova.</p>";

    $imena=["Stefan","Aleksandar","Adam","Marija","Dunja","Milijana"];
    for($i=0;$i<count($imena);$i++){
        $ime=$imena[$i];
        //$duzina=strlen($ime);
        $duzina=mb_strlen($ime,"UTF-8");//za srpsku latinicu
        echo"<p>Dužinu stringa $ime je $duzina.</p>";
    }

    //zadatak 15
    echo"<p><b>ZADATAK 15</b></p>";    
    echo"<p>Odrediti element u nizu stringova sa najvećom dužinom.</p>";

    $imena=["Stefan","Aleksandar","Adam","Marija","Dunja","Milijana"];
    $maxDuzina=strlen($imena[0]);
    $maxString=$imena[0];
    for($i=1;$i<count($imena);$i++){ //ovde namerno preskacem $i=0 jer nema potrebe kad je vec zadat
        if(strlen($imena[$i])>$maxDuzina){
            $maxDuzina=strlen($imena[$i]);
            $maxString=$imena[$i];
        }
    }
    echo"<p>El. u nizu stringova sa najvećom dužinom je $maxString.</p>";

    //zadatak 17
    echo"<p><b>ZADATAK 17-substring-STRPOS</b></p>";    
    echo"<p>Odrediti element u nizu stringova koji sadrzi substring, tj.podstring.</p>";
    var_dump(strpos("Sreda","a")); //INDEXI u stringu krecu od 0; 
    //Vraca se INDEX prvog pojavljivanja;
    if(strpos("Sreda","S")!==false){
        echo"<p>String 'S' se nalazi u stringu 'Sreda'</p>";
    }
    else{
        echo"<p>String 'S' se ne nalazi u stringu 'Sreda'</p>";
    }

    //zadatak 17
    echo"<p><b>ZADATAK 17</b></p>";    
    echo"<p>Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'. *</p>";

    $imena=["Stefan","Aleksandar","Adam","Marija","Dunja","Milijana"];
    $br=0;
    for($i=0;$i<count($imena);$i++){
        if(strpos($imena[$i],'a')!==false){
            $br++;
        }
    }
    echo"<p>Broj elemenata u nizu stringova koji sadrže slovo 'a' je $br.</p>";

    //zadatak 18
    echo"<p><b>ZADATAK 18</b></p>";    
    echo"<p>Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'.*</p>";

    $imena=["Stefan","Aleksandar","Adam","Marija","Dunja","Milijana"];
    $br=0;
    for($i=0;$i<count($imena);$i++){
        if(strpos($imena[$i],'a')===0 || strpos($imena[$i],'A')===0){
            $br++;
        }
    }
    echo"<p>Broj elemenata u nizu stringova koji pocinju na slovo 'a' ili 'A' je $br.</p>";

    //PROBE

    echo"<p><b>nizovi i indeksi</b></p>";
    $niz=[10,11,12,13,14,15,16,17];
    var_dump($niz);

    echo"<p><b>od 0 do < count </b></p>";

    for($i=0; $i<count($niz);$i++){
        echo "El. je " . $niz[$i] . ", a indeks mu je " . $i . " ; <br>";        
    }

    echo"<p><b>od 1 do <=count</b></p>";

    for($i=1; $i<=count($niz);$i++){
        echo "El. je " . $niz[$i] . ", a indeks mu je " . $i . " ; <br>";        
    }









    
    










    



    





    


    














?>