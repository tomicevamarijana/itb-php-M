<?php

    echo "<p><b>TEMPERATURE - zadatak 3</b></p>";
    echo "<p>U toku jednog dana vršenja su merenja vremenskih prilika. Konkretno, jedan dan se formira kao asocijativni niz koji od ključeva i vrednosti sadrži:<br>
    Datum (string u formatu YYYY/MM/DD), <br>
    Kiša (true/false),<br>
    Sunce (true/false),<br>
    Oblačno (true/false),<br>
    Vrednosti temperature (Niz temperatura tog dana).</p>";

    $dan=array(
        "datum"=>"2023/05/17",
        "kisa"=>true,
        "sunce"=>true,
        "oblacno"=>true,
        "temperature"=>array(25,28,23,30,27,21,22)
    );

    //15
    echo "<p><b>15 Napisati funkciju prosecnaTemp(dan) kojoj se prosleđuje dan, a koja određuje i vraća prosečnu temperaturu izmerenu tog dana</b></p>";
    function prosecnaTemp($dan){
        $tempNiz=$dan["temperature"];
        $s=0;
        foreach($tempNiz as $temperatura){
            $s=$s+$temperatura;
        }
        $sr=$s/count($tempNiz);
        return $sr;
    }
    echo "Prosecna temp.na dan " . $dan["datum"] . " jednaka je " . prosecnaTemp($dan);

    //16
    echo "<p><b>16 Napisati funkciju brojNatprosecnoMerenja(dan) kojoj se prosleđuje dan, a koja prebrojava i vraća koliko merenja je bilo sa natprosečnom temperaturom</b></p>";
    function brojNatprosecnoMerenja($dan){
        $br=0;
        $tempNiz=$dan["temperature"];
        $sr=prosecnaTemp($dan);
        foreach($tempNiz as $temperatura){
            if($temperatura>$sr){
                $br++;
            }
        }
        return $br;
    }
    echo "Broj temperatura vecih od proseka " . prosecnaTemp($dan) . " na dan " . $dan["datum"] . " iznosi " . brojNatprosecnoMerenja($dan);

    //17
    echo "<p><b>17 Napisati funkciju brojMaxMerenja(dan) kojoj se prosleđuje dan, a koja prebrojava i vraća koliko merenja je bilo sa maksimalnom temperaturom.</b></p>";
    function brojMaxMerenja($dan){
        $maksTemp=-273;
        $tempNiz=$dan["temperature"];
        $br=0;
        foreach($tempNiz as $temperatura){
            if($temperatura>$maksTemp){
                $maksTemp=$temperatura;
            }
        }
        foreach($tempNiz as $temperatura){
            if($temperatura==$maksTemp){
                $br++;
            }
        }
        return $br;
    }
    echo "Na dan " . $dan["datum"] . " broj merenja temperature koji je jedan maksimalnoj iznosi " . brojMaxMerenja($dan);

    //18
    echo "<p><b>18 Napisati funkciju brojMerenjaIzmedju(dan, min, max) kojoj se prosleđuje dan, kao i dva parametra koji predstavljaju dve temperature. Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost između ove dve zadate temperature (ne uključujući te dve vrednosti)</b></p>";
    function brojMerenjaIzmedju($dan,$min,$max){
        $br=0;
        $tempNiz=$dan["temperature"];
        foreach($tempNiz as $temperatura){
            if($temperatura>$min && $temperatura<$max){
                $br++;
            }
        }
        return $br;
    }
    $v1=7;
    $v2=15;
    echo "Broj merenja izmedju $v1 i $v2 je " . brojMerenjaIzmedju($dan,$v1,$v2);

    //19
    echo "<p><b>19 Napisati funkciju natprosecnoTopao(dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je u većini dana temperatura bila iznad proseka. U suprotnom vraća false.</b></p>";
    function natprosecnoTopao($dan){
        $sr=prosecnaTemp($dan);
        $brTopao=0;
        $brHladan=0;
        $tempNiz=$dan["temperature"];
        foreach($tempNiz as $temperatura){
            if($temperatura>=$sr){
                $brTopao++;
            }
            else{
                $brHladan++;
            }
        }
        if($brTopao>=$brHladan){
            return true;
        }
        else{
            return false;
        }
    }
    echo "<p>Dan je natprosecno topao, za: </p>";
    if(natprosecnoTopao($dan)){
        echo "JESTE";
    }
    else{
        echo "NIJE";
    }

    //20
    echo "<p><b>20 Za dan se smatra da je leden ukoliko nijedna temperatura izmerena tog dana nije iznosila iznad 0 stepeni. Napisati funkciju leden(dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio leden, u suprotnom vraća false.</b></p>";
    function leden($dan){
        $tempNiz=$dan["temperature"];
        foreach($tempNiz as $temperatura){
            if($temperatura>0){
                return false;
            }
        }
        return true;
    }
    echo "Dan je bio leden: ";
    if(leden($dan)){
        echo "JESTE";
    }
    else{
        echo "NIJE";
    }

    //21
    echo "<p><b>21 Za dan se smatra da je tropski ukoliko nijedna temperatura izmerena tog dana nije iznosila ispod 24 stepena. Napisati funkciju tropski(dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio tropski, u suprotnom vraća false.</b></p>";
    function tropski($dan){
        $tempNiz=$dan["temperature"];
        foreach($tempNiz as $temperatura){
            if($temperatura<24){
                return false;
            }
        }
        return true;
    }
    echo "Dan je bio tropski: ";
    if(tropski($dan)){
        echo "JESTE";
    }
    else{
        echo "NIJE";
    }

    //22
    echo "<p><b>22 Dan je nepovoljan ako je razlika između neka dva uzastopna merenja veća od 8 stepeni. Napisati funkciju nepovoljan(dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio nepovoljan, u suprotnom vraća false.</b></p>"; //kako da se regulise poslednji indeks?
    function nepovoljan($dan){
        $tempNiz=$dan["temperature"];
        for($i=0;$i<count($tempNiz);$i++){
            if(abs($tempNiz[$i]-$tempNiz[$i+1])>8){
                return true;
            }
        }
        return false;
    }
    //BOLJE RESENJE
    function nepovoljan2($dan){
        $tempNiz=$dan["temperature"];
        for($i=0;$i<count($tempNiz);$i++){
            if($i=count($tempNiz)-1){
                if(abs($tempNiz[$i]-$tempNiz[$i-1])>8){
                    return true;
                }
            }
            else{
                if(abs($tempNiz[$i]-$tempNiz[$i+1])>8){
                    return true;
                }
            }
        }

    }

    echo "Dan je bio nepovoljan2: ";
    if(nepovoljan2($dan)){
        echo "JESTE";
    }
    else{
        echo "NIJE";
    }

    //23
    echo "<p><b>23 Za dan se kaže da je neuobičajen ako je bilo kiše i ispod -5 stepeni, ili bilo oblačno i iznad 25 stepeni, ili je bilo i kišovito i oblačno i sunčano. Napisati funkciju neuobicajen(dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio neuobičajen, u suprotnom vraća false.</b></p>";
    function neuobicajen($dan){
        $tempNiz=$dan["temperature"];
        $kisa=$dan["kisa"];
        $sunce=$dan["sunce"];
        $oblacno=$dan["oblacno"];
        foreach($tempNiz as $temperatura){
            //if($temperatura < -5 && $kisa==true) || if($oblacno==true && $temperatura>25) || if($kisa==true && $sunce==true && $oblacno==true){}
            if($temperatura < -5 && $kisa==true){
                return true;
            }
            if($oblacno==true && $temperatura>25){
                return true;
            }
            if($kisa==true && $sunce==true && $oblacno==true){
                return true;
            }            
        }
        return false;
    }
    echo "Dan je bio neuobicajen: ";
    if(neuobicajen($dan)){
        echo "JESTE";
    }
    else{
        echo "NIJE";
    }

    // 2 ZADATAK-ZEMLJE I LETOVI
    echo "<p><b><hr>ZEMLJE I LETOVI - zadatak 2</b></p>";
    echo "<p>Dat je niz u kojem su smešteni odgovarajući letovi koji polaze sa nekog aerodroma u toku jednog dana. Svaki element tog niza odgovara jednom letu, pri čemu se za svaki let pamti destinacija (grad u koji avion sleće), država u kojoj se taj grad nalazi, kao i vreme poletanja aviona sa aerodroma (string u formatu “hh:mm”). U ovom zadatku, može se desiti da imamo više letova ka istoj destinaciji.</p>";

    echo "<p><b>8 Kreirati niz letovi, pri čemu je svaki element tog niza jedan asocijativni niz. Svaki od tih asocijativnih niza mora od ključeva da ima “dest” (destinaciju), “country” (zemlju te destinacije), kao i “time” (vreme sletanja)</b></p>";

    //8 zadatak
    $letovi=array(
        array("dest"=>"nis","country"=>"srbija","time"=>"20:00"),
        array("dest"=>"pariz","country"=>"francuska","time"=>"06:00"),
        array("dest"=>"istanbul","country"=>"turska","time"=>"20:10"),
        array("dest"=>"antalija","country"=>"turska","time"=>"13:10"),
        array("dest"=>"nica","country"=>"francuska","time"=>"05:30"),        
        array("dest"=>"antalija","country"=>"turska","time"=>"11:00")
    );

    //9 zadatak
    echo "<p><b>9 Napisati funkciju brojLetovaZaZemlju(letovi,zemlja) kojoj se prosleđuju niz letova, kao i zemlja, a funkcija vraća broj letova do date zemlje.</b></p>";
    function brojLetovaZaZemlju($letovi,$zemlja){
        $br=0;
        for($i=0;$i<count($letovi);$i++){
            if($letovi[$i]["country"]==$zemlja){
                $br++;
            }
        }
        return $br;
    }
    $zemlja="francuska";
    echo "Broj letova do zemlje $zemlja je: " . brojLetovaZaZemlju($letovi,$zemlja);

    //10 zadatak
    echo "<p><b>10 Napisati funkciju visePrePodne(letovi) kojoj se prosleđuje niz letova, a određuje da li je bilo više letova pre podne ili posle podne. Ukoliko je bilo više letova pre podne, vratiti true, a u suportnom, vratiti false.</b></p>";
    function visePrePodne($letovi){
        $brPre=0;
        $brPosle=0;
        $podne=strtotime("12:00");
        for($i=0;$i<count($letovi);$i++){
            if(strtotime($letovi[$i]["time"])>=$podne){
                $brPosle++;
            }
            else{
                $brPre++;
            }
        }
        if($brPre>=$brPosle){
            return true;
        }
        else{
            return false;
        }
    }
    echo "Bilo je vise letova pre podne nego posle podne: ";
    if(visePrePodne($letovi)){
        echo "JESTE";
    }
    else{
        echo "NIJE";
    }

    //11 zadatak
    echo "<p><b>11 Napisati funkciju ispisLetovaDoSada(letovi) kojoj se prosleđuje niz letova, kao i zemlja, a koja ispisuje sve letove koji su poleteli do trenutnog vremena.</b></p>";
    function ispisLetovaDoSada($letovi){
        date_default_timezone_set('Europe/Belgrade');
        $trenutno=date('H:i');
        for($i=0;$i<count($letovi);$i++){
            if(strtotime($letovi[$i]["time"])<strtotime($trenutno)){
                echo "Let ka destinaciji " . $letovi[$i]["dest"] . " je poleteo u " . $letovi[$i]["time"];
                echo "<br>";
            }
        }
    }
    ispisLetovaDoSada($letovi);

    //12 zadatak
    echo "<p><b>12 Neke zemlje su označene kao crvene, jer je u njima nepovoljna epidemiološka situacija. Napisati funkciju rizicniLetovi(letovi, crvenaZona) kojoj se prosleđuju niz letova, kao i niz zemalja, a koja ispisuje u paragrafima čiji je tekst obojen crvenom bojom, a u svakom paragrafu ispisati informacije o onim letovima koji kao destinaciju imaju zemlju iz crvene zone.</b></p>";
    $crvenaZona=["francuska","srbija"];
    function rizicniLetovi($letovi,$crvenaZona){
        for($i=0;$i<count($letovi);$i++){
            if(in_array($letovi[$i]["country"],$crvenaZona)){
                $crvenaZemlja=$letovi[$i]["country"];
                $crvenaDest=$letovi[$i]["dest"];
                echo "<p style='color:red'>Let ka zemlji $crvenaZemlja - $crvenaDest </p>";
                //echo "<br>";
            }
        }
    }
    rizicniLetovi($letovi,$crvenaZona);

    //13 zadatak
    echo "<p><b>13 Neka destinacija je tražena ukoliko postoji više letova u toku dana za tu destinaciju. Napisati funkciju trazeneDestinacije(letovi) kojoj se prosleđuje niz letova, a koja ispisuje sve tražene destinacije (ukoliko postoje). </b></p>";
    function trazenaDestiacija($letovi){
        $br=0;
        
        for($i=0;$i<count($letovi);$i++){
            $destinacije[]=$letovi[$i]["dest"];            
        }
        for($i=0;$i<count($letovi);$i++){
            for($j=0;$j<count($destinacije);$j++){
                if($destinacije[$j]==$letovi[$i]["dest"]){
                    $br++;
                    $trazenaDest=$destinacije[$j];
                }
            }
        }        
    }


    






    
    


?>