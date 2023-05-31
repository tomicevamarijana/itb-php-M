<?php
    require_once "AutoKredit.php";
    require_once "StambeniKredit.php";

    //__construct($naziv,$osnovica,$godKam,$brGod)
    $ak1=new AutoKredit("AK1", 5000.0, 0.15, 5, 0.2);
    //$ak1->ispis();
    //echo $ak1->racunanjeMesRate();

    $sk1=new StambeniKredit("SK1", 35000.0, 2.8, 25);
    //$sk1->ispis();
    //echo $sk1->racunanjeMesRate();

    $ak2=new AutoKredit("AK2", 12000.0, 2.5, 10, 1.3);
    //$ak2->ispis();
    //echo $ak2->racunanjeMesRate();
    
    
    
    $krediti=[$ak1,$ak2,$sk1];
    foreach($krediti as $kredit){
        $kredit->ispis();
        echo "<p>Mesecna rata iznosi: " .$kredit->racunanjeMesRate() ."</p>";
    }
    
    
    




?>