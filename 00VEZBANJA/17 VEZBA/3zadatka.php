<?php
    echo "<p> ZADATAK 1</p>";
    // ZADATAK
    $nizOcena=[10,10,10,9,10,10,10,10,10,9];
    //zad 1
    function prosek($nizOcena){
        $s=0;
        for($i=0;$i<count($nizOcena);$i++){
            $s=$s+$nizOcena[$i];
        }
        return $s/count($nizOcena);        
    }
    echo "Prosek ocena je " . prosek($nizOcena);
    echo"<hr>";

    //zad 3
    function maksOcena($nizOcena){
        $maks=0;
        for($i=0;$i<count($nizOcena);$i++){
            if($nizOcena[$i]>$maks){
                $maks=$nizOcena[$i];
            }
        }
        return $maks;
    }
    echo "Maks ocena je " . maksOcena($nizOcena);
    echo"<hr>";

    //zad 4
    function brMaksOcena($nizOcena){
        $br=0;
        $maks=maksOcena($nizOcena);
        for($i=0;$i<count($nizOcena);$i++){
            if($nizOcena[$i]==$maks){
                $br++;
            }
        }
        return $br;
    }
    echo "Br. maks ocena je " . brMaksOcena($nizOcena);
    echo"<hr>";

    //zad5
    function studentGeneracije($nizOcena){
        $brDevetki=0;
        $brDesetki=0;
        for($i=0;$i<count($nizOcena);$i++){
            if($nizOcena[$i]==10){
                $brDesetki++;
            }
            elseif($nizOcena[$i]==9){
                $brDevetki++;
            }
            else{
                return false;
            }
        }
        if($brDesetki>$brDevetki){
            return true;
        }
        else{
            return false;
        }
    }
    echo "<p>Student je djak generacije " ;
    if(studentGeneracije($nizOcena)){
        echo " Jeste </p>";
    }
    else{
        echo " Nije </p>";
    }
    echo"<hr>";

    //zad 6
    //[10,10,10,9,10,10,10,10,10,9];
    function maksPodniz($nizOcena){
        $maks=maksOcena($nizOcena);
        $br=0;
        $maksDuzina=0;
        for($i=1;$i<count($nizOcena);$i++){
            if($nizOcena[$i]==$maks && $nizOcena[$i-1]==$maks){
                $br++;
                if($br>$maksDuzina){
                    $maksDuzina=$br;
                }
            }
            else{
                $br=0;
            }
        }
        return $maksDuzina+1; //duzina niza
    }
    echo "Maks duzina podniza je " . maksPodniz($nizOcena);
    echo"<hr>";

    echo "<p> ZADATAK 2</p>";
    // ZADATAK 2
    $nizOcenaA=[
        ["naziv"=>"fizika","datum"=>"2023/05/22","ocena"=>7],
        ["naziv"=>"matematika","datum"=>"2023/05/10","ocena"=>10],
        ["naziv"=>"engleski","datum"=>"2023/05/15","ocena"=>9],
        ["naziv"=>"programiranje","datum"=>"2023/05/22","ocena"=>10],
        ["naziv"=>"likovno","datum"=>"2023/05/01","ocena"=>6]
    ];
    //2 zad
    function prosekA($nizOcenaA){
        $s=0;
        for($i=0;$i<count($nizOcenaA);$i++){
            $s=$s+$nizOcenaA[$i]["ocena"];
        }
        return $s/count($nizOcenaA);
    }
    echo "ASOC Prosecna ocena " . prosekA($nizOcenaA);
    echo"<hr>";

    //3zad
    function maksOcenaA($nizOcenaA){
        $maks=0;
        for($i=0;$i<count($nizOcenaA);$i++){
            if($nizOcenaA[$i]["ocena"]>$maks){
                $maks=$nizOcenaA[$i]["ocena"];
            }
        }
        return $maks;
    }
    echo "ASOC Maks ocena " . maksOcenaA($nizOcenaA);
    echo"<hr>";

    //4zad
    function brMaksOcenaA($nizOcenaA){
        $br=0;
        $maks=maksOcenaA($nizOcenaA);
        for($i=0;$i<count($nizOcenaA);$i++){
            if($nizOcenaA[$i]["ocena"]==$maks){
                $br++;
            }
        }
        return $br;        
    }
    echo "ASOC broj maks ocena " . brMaksOcenaA($nizOcenaA);
    echo"<hr>";














    




?>