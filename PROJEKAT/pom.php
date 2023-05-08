
<?php
/*
    $filePath=__DIR__."/txt/motivacija.txt";
    $myfile = fopen($filePath, "r");
    //echo fread($myfile,filesize(__DIR__."/motivacija.txt")); //za ispis u jednom redu
    //echo fread($myfile,filesize($file)); // isto samo bez promenljive $path
    //fclose($myfile);
    if ($myfile) {
        $array = explode("\n", fread($myfile, filesize($filePath)));
    }

    for($i=0;$i<count($array);$i++){
        if($i%2==0){
            $citatiM[]=$array[$i];
            //echo "<p>$array[$i]</p>";
        }        
    }
    $randIndex=0; //ne mora
    //$randomCitatM=""; //ne mora
    for($i=0;$i<count($citatiM);$i++){
        $randIndex=rand(0,(count($citatiM)-1));
        $randomCitatM=$citatiM[$randIndex];              
    }
    echo $randomCitatM; //obavezno VAN: da se u petlji ne bi kalemili jedan na drugi

    for($i=0;$i<(count($array)-1);$i++){
        if($array[$i]==$randomCitatM){
            $i=$i+1;
            $randomPisac=$array[$i];
            //$randomPisac=$array[$i+1];
            //echo $randomPisac;
            break;                 
        }               
    }
    */
?>

<!-- -----------------------------------------MOTIVACIJA---------------------------------------- -->
<?php
    $filePathM=__DIR__."/txt/motivacija.txt";
    $myfileM = fopen($filePathM, "r");
    //echo fread($myfile,filesize(__DIR__."/motivacija.txt")); //za ispis u jednom redu
    //echo fread($myfile,filesize($file)); // isto samo bez promenljive $path
    
    if ($myfileM) {
        $arrayM = explode("\n", fread($myfileM, filesize($filePathM)));
    }

    for($i=0;$i<count($arrayM);$i++){
        if($i%2==0){
            $citatiM[]=$arrayM[$i];            
        }        
    }
    
    for($i=0;$i<count($citatiM);$i++){
        $randIndexM=rand(0,(count($citatiM)-1));
        $randCitatM=$citatiM[$randIndexM];              
    }
    echo $randCitatM; //obavezno VAN: da se u petlji ne bi kalemili jedan na drugi
    
    for($i=0;$i<(count($arrayM)-1);$i++){
        if($arrayM[$i]==$randCitatM){            
            $randAutorM=$arrayM[$i+1];                      
            break;                 
        }               
    }
    echo $randAutorM;
    //fclose($myfile);
?>
<hr>
<!-- -----------------------------------------POSAO---------------------------------------- -->
<?php
    $filePathP=__DIR__."/txt/posao.txt";
    $myfileP = fopen($filePathP, "r");    
    if ($myfileP) {
        $arrayP = explode("\n", fread($myfileP, filesize($filePathP)));
    }

    for($i=0;$i<count($arrayP);$i++){
        if($i%2==0){
            $citatiP[]=$arrayP[$i];            
        }        
    }    
    for($i=0;$i<count($citatiP);$i++){
        $randIndexP=rand(0,(count($citatiP)-1));
        $randCitatP=$citatiP[$randIndexP];              
    }
    echo $randCitatP; //obavezno VAN: da se u petlji ne bi kalemili jedan na drugi

    for($i=0;$i<(count($arrayP)-1);$i++){
        if($arrayP[$i]==$randCitatP){            
            $randAutorP=$arrayP[$i+1];                       
            break;                 
        }               
    }
    echo $randAutorP;
    //fclose($myfile);
?>
<hr>
<!-- -----------------------------------------LJUBAV---------------------------------------- -->
<?php
    $filePathLj=__DIR__."/txt/ljubav.txt";
    $myFileLj=fopen($filePathLj,"r");
    if ($myFileLj) {
        $arrayLj = explode("\n", fread($myFileLj, filesize($filePathLj)));
    }
    
    for($i=0;$i<count($arrayLj);$i++){
        if($i%2==0){
            $citatiLj[]=$arrayLj[$i];
        }
    }
    for($i=0;$i<count($citatiLj);$i++){
        $randIndexLj=rand(0,count($citatiLj)-1);
        $randCitatLj=$citatiLj[$randIndexLj];
    }
    echo $randCitatLj;
    for($i=0;$i<count($arrayLj)-1;$i++){
        if($arrayLj[$i]==$randCitatLj){
            $randAutorLj=$arrayLj[$i+1];
            break;
        }
    }
    echo $randAutorLj;
    //fclose($myfile);
?>
<hr>
<!-- -----------------------------------------ZDRAVLJE---------------------------------------- -->
<?php
    $filePathZ=__DIR__.("/txt/zdravlje.txt");
    $myFileZ=fopen($filePathZ,"r");
    if ($myFileZ) {
        $arrayZ = explode("\n", fread($myFileZ, filesize($filePathZ)));
    }

    for($i=0;$i<count($arrayZ);$i++){
        if($i%2==0){
            $citatiZ[]=$arrayZ[$i];
        }
    }
    for($i=0;$i<count($citatiZ);$i++){
        $randIndexZ=rand(0,count($citatiZ)-1);
        $randCitatZ=$citatiZ[$randIndexZ];
    }
    echo $randCitatZ;
    for($i=0;$i<count($arrayZ)-1;$i++){
        if($arrayZ[$i]==$randCitatZ){
            $randAutorZ=$arrayZ[$i+1];
            break;
        }
    }
    echo $randAutorZ;
?>
<hr>
<!-- -----------------------------------------4u1---------------------------------------- -->
<?php
    for($i=0;$i<count($arrayM);$i++){
        $arrayAll[]=$arrayM[$i];
    }
    for($i=0;$i<count($arrayP);$i++){
        $arrayAll[]=$arrayP[$i];
    }
    for($i=0;$i<count($arrayLj);$i++){
        $arrayAll[]=$arrayLj[$i];
    }
    for($i=0;$i<count($arrayZ);$i++){
        $arrayAll[]=$arrayZ[$i];
    }
    for($i=0;$i<count($arrayAll);$i++){
        //echo "<p>$arrayAll[$i]</p>";
        if($i%2==0){
            $citatiSvi[]=$arrayAll[$i];
        }
    }
    for($i=0;$i<count($citatiSvi);$i++){
        $randIndex=rand(0,count($citatiSvi)-1);
        $randCitat=$citatiSvi[$randIndex];
    }
    echo $randCitat;
    for($i=0;$i<count($arrayAll)-1;$i++){
        if($arrayAll[$i]==$randCitat){
            $randAutor=$arrayAll[$i+1];
            break;
        }
    }
    echo $randAutor;
?>
<?php
    //Logika se zasniva na sledecem:
    // 1. ucita se txt i od njega napravi niz $array*
    // 2. prodje se po $array* , i na osnovu parnih indeksa, napravi novi niz $citati* koji ne sadrzi autore
    // 3. prodje se po $citati* , i odredi se rand(0,count($citati*)-1), tj definise se random citat $randCitat*
    // 4. jos jednom se prodje po $array* (direktno ucitanom iz txt) da bi se doslo do autora $randAutor* prethodno odredjenog random citata 
    // (autor ima sledeci, odnosno $i+=1 indeks u odnosu na njegov citat)
    // 5. za kraj, na osnovu sva cetiri txt, tj. nizova $array* kreiran je novi niz $arrayAll
    // (za dobijanje $randCitat i $randAutor primenjen je isti postupak).
?>