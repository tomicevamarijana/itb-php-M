<?php
    require_once "DizelAuto.php";
    require_once "BenzinAuto.php";

    $d1=new DizelAuto("Reno",10000,12,182);
    $d2=new DizelAuto("Audi",50000,13,182);
    $d3=new DizelAuto("Fiat",100000,7,182);
    $d4=new DizelAuto("Peugeot",200000,8,182);
    $d5=new DizelAuto("Mercedes",300000,14,182);

    $b1=new BenzinAuto("Lada",150000,10,176);
    $b2=new BenzinAuto("Dacia",250000,9.5,176);
    $b3=new BenzinAuto("Audi",350000,11.5,176);
    $b4=new BenzinAuto("BMW",450000,12,176);
    $b5=new BenzinAuto("VW",50000,7,176);
    
    $niz=[$d1,$d2,$d3,$d4,$d5,$b1,$b2,$b3,$b4,$b5];    

    //7 zadatak
    echo "<p><b>Napisati funkciju maksUlozeno kojoj se prosleđuje niz automobila, a koja ispisuje podatke o automobilu u koji je uloženo najviše para.</b></p>";
    function maksUlozeno($niz){
        $maks=$niz[0]->ulozenoPara();
        $maksAuto=$niz[0];
        foreach($niz as $auto){
            if($auto->ulozenoPara()>$maks){
                $maks=$auto->ulozenoPara();
                $maksAuto=$auto;
            }
        }
        return $maksAuto;
    }
    echo "<p>Podaci o autu u koji je najvise ulozeno: </p>";
    maksUlozeno($niz)->ispis();

    /*
    echo"<hr>";
    foreach($niz as $auto){
        $auto->ispis();
        echo $auto->ulozenoPara() . ", ";
    }
    */    

    //8 zadatak
    echo "<p><b>Napisati funkciju boljiTip kojoj se prosleđuje niz automobila, a koja vraća tip automobila (DIZEL/BENZIN) koji po proseku zahtevaju manje ulaganje na kupovinu goriva.</b></p>";
    function boljiTip($niz){
        $sD=0;
        $brD=0;
        $sB=0;
        $brB=0;
        foreach($niz as $auto){
            if($auto->getTipGoriva()=="DIZEL"){
                $sD=$sD+$auto->ulozenoPara();
                $brD++;
            }
            else{
                $sB=$sB+$auto->ulozenoPara();
                $brB++;
            }
        }
        if($brD>0 && $brB>0){
            if($sD/$brD<$sB/$brB){
                return "DIZEL";
            }
            elseif($sD/$brD>$sB/$brB){
                return "BENZIN";
            }
            else{
                echo "<p>Oba tipa zahtevaju jednaka ulaganja u gorivo.</p>";
            }
        }
        else{
            echo "<p>Nije validno poredjenje jer nisu zastupljena oba tipa automobila.</p>";
        }
    }
    echo "<p>Manje ulaganje u gorivo zahteva: " . boljiTip($niz) . ".</p>";
?>