
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
    //fclose($myfile);
    if ($myfileM) {
        $arrayM = explode("\n", fread($myfileM, filesize($filePathM)));
    }

    for($i=0;$i<count($arrayM);$i++){
        if($i%2==0){
            $citatiM[]=$arrayM[$i];
            //echo "<p>$arraMy[$i]</p>";
        }        
    }
    $randIndexM=0; //ne mora
    $randCitatM=""; //ne mora
    for($i=0;$i<count($citatiM);$i++){
        $randIndexM=rand(0,(count($citatiM)-1));
        $randCitatM=$citatiM[$randIndexM];              
    }
    echo $randCitatM; //obavezno VAN: da se u petlji ne bi kalemili jedan na drugi

    $randPisacM="";
    for($i=0;$i<(count($arrayM)-1);$i++){
        if($arrayM[$i]==$randCitatM){
            $i=$i+1;
            $randPisac=$arrayM[$i];
            //$randPisacM=$arrayM[$i+1];
            echo $randPisac;
            break;                 
        }               
    }
    //fclose($myfile);
?>
echo <hr>
<!-- -----------------------------------------POSAO---------------------------------------- -->
<?php
    $filePathP=__DIR__."/txt/posao.txt";
    $myfileP = fopen($filePathP, "r");
    //echo fread($myfile,filesize(__DIR__."/motivacija.txt")); //za ispis u jednom redu
    //echo fread($myfile,filesize($file)); // isto samo bez promenljive $path
    //fclose($myfile);
    if ($myfileP) {
        $arrayP = explode("\n", fread($myfileP, filesize($filePathP)));
    }

    for($i=0;$i<count($arrayP);$i++){
        if($i%2==0){
            $citatiP[]=$arrayP[$i];
            //echo "<p>$arraMy[$i]</p>";
        }        
    }
    $randIndexP=0; //ne mora
    $randCitatP=""; //ne mora
    for($i=0;$i<count($citatiP);$i++){
        $randIndexP=rand(0,(count($citatiP)-1));
        $randCitatP=$citatiP[$randIndexP];              
    }
    echo $randCitatP; //obavezno VAN: da se u petlji ne bi kalemili jedan na drugi

    $randPisacP="";
    for($i=0;$i<(count($arrayP)-1);$i++){
        if($arrayP[$i]==$randCitatP){
            $i=$i+1;
            $randPisacP=$arrayP[$i];
            //$randPisacP=$arrayP[$i+1];
            echo $randPisacP;
            break;                 
        }               
    }
    //fclose($myfile);
?>