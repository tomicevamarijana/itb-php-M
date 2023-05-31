<?php
    require_once "SamofinansirajuciStudent.php";
    require_once "BudzetskiStudent.php";

    $ss1=new SamofinansirajuciStudent("Petar Petrovic(S)", 48, 7.9, 60);
    echo $ss1->ispis();
    echo $ss1->cenaPrijaveIspita() . "<br>";
    echo $ss1->skolarina() . "<br>";

    $bs1=new BudzetskiStudent("Milos Milosevic(B)",61,9);
    echo $bs1->ispis();
    echo $bs1->cenaPrijaveIspita() . "<br>";
    echo $bs1->skolarina() . "<hr>";

    $ss2=new SamofinansirajuciStudent("NikolaNikolic(S)",265,8,35);
    echo $ss2->ispis();
    echo $ss2->cenaPrijaveIspita() . "<br>";
    echo $ss2->skolarina() . "<hr>";







?>