<?php
    require_once "SamofinansirajuciStudent.php";
    require_once "BudzetskiStudent.php";

    $ss1=new SamofinansirajuciStudent("Petar Petrovic(S)", 265, 7.9, 34);
    //echo $ss1->ispis();
    //echo $ss1->setPrijavljeniESPB(2);
    //echo $ss1->ispis();
    //echo $ss1->setOsvojeniESPB(60);
    //echo $ss1->ispis();
    //echo $ss1->cenaPrijaveIspita() . "<br>";
    //echo $ss1->skolarina() . "<hr>";

    $bs1=new BudzetskiStudent("Milos Milosevic(B)",61,9.2);
    //echo $bs1->ispis();
    //echo $bs1->cenaPrijaveIspita() . "<br>";
    //echo $bs1->skolarina() . "<hr>";

    $ss2=new SamofinansirajuciStudent("NikolaNikolic(S)",265,8,35);
    //echo $ss2->ispis();
    //echo $ss2->cenaPrijaveIspita() . "<br>";
    //echo $ss2->skolarina() . "<hr>";

    $bs2=new BudzetskiStudent("Jovan Jovanovic(B)",200,10);
    //echo $bs2->ispis();
    //echo $bs2->cenaPrijaveIspita() . "<br>";
    //echo $bs2->skolarina() . "<hr>";

    //kreiranje niza
    $studenti=[$ss1,$bs1,$ss2,$bs2];

    echo "<p><b>Zadatak 6</b></p>";
    echo "<p>Odrediti studenta koji plaća najveću školarinu. </p>";

    function maksSkolarina($studenti){
        $maks=$studenti[0]->skolarina();
        $maksStudent=$studenti[0];
        foreach($studenti as $student){
            //echo $student->skolarina() . "<br>";
            if($student->skolarina()>$maks){
                $maks=$student->skolarina();
                $maksStudent=$student;
            }
        }
        return $maksStudent;
    }
    echo "<p>Maksimalnu skolarinu placa student: </p>";
    maksSkolarina($studenti)->ispis();

    echo "<p><b>Zadatak 7</b></p>";
    echo "<p>Odrediti prosečnu školarinu svih studenata.</p>";










?>