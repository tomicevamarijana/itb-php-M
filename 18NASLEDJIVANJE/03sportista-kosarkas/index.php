<?php
    require_once "kosarkas.php";

    $k1=new Kosarkas("Pera","Peric",1990,"Bg",[30,40,50]);
    $k2=new Kosarkas("Mika","Mikic",1990,"Ar",[20,25,30,33]);
    $k3=new Kosarkas("Milos","Milosevic",1992,"Kg",[31,42,53,55,70]);
    $k4=new Kosarkas("Nikola","Nikolic",1995,"To",[30,25,24]);

    $k1->ispisKosarkas();

    $kosarkasi=[$k1,$k2,$k3,$k4];

    function najviseUtakmica($kosarkasi){
        $maksKos=$kosarkasi[0];
        $maksUtak=count($kosarkasi[0]->getPoeni());
        foreach($kosarkasi as $k){
            if(count($k->getPoeni())>$maksUtak){
                $maksUtak=count($k->getPoeni());
                $maksKos=$k;
            }
        }
        return $maksKos;
    }
    echo "<p>Kosarkas sa najvise utakmica je: </p>";
    najviseUtakmica($kosarkasi)->ispisKosarkas();



?>