<?php
    require_once "SamofinansirajuciStudent.php";
    require_once "BudzetskiStudent.php";

    $ss1=new SamofinansirajuciStudent("Petar Petrovic(S)", 265, 7.9, 34);
    //echo $ss1->ispis();
    //echo $ss1->setPrijavljeniESPB(51);
    //echo $ss1->ispis();
    //echo $ss1->setOsvojeniESPB(264);
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

    $bs2=new BudzetskiStudent("Jovan Jovanovic(B)",250,10);
    //echo $bs2->ispis();
    //echo $bs2->cenaPrijaveIspita() . "<br>";
    //echo $bs2->skolarina() . "<hr>";

    //kreiranje niza
    $studenti=[$ss1,$bs1,$ss2,$bs2];

    
    //zadatak 6
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

    //zadatak 7
    echo "<p><b>Zadatak 7</b></p>";
    echo "<p>Odrediti prosečnu školarinu svih studenata.</p>";

    function prosecnaSkolarina($studenti){
        $s=0;
        foreach($studenti as $student){
            $s=$s+$student->skolarina();
        }
        if(count($studenti)>0){
            return $s/count($studenti);
        }
        else{
            return 0;
        }
    }
    echo "<p>Prosecna skolarina iznosi: " . prosecnaSkolarina($studenti) . "</p>";

    //zadatak 8
    echo "<p><b>Zadatak 8</b></p>";
    echo "<p>Odrediti prosečan odnos visine školarine i broja osvojenih ESPB bodova.</p>";

    function prosecanOdnos($studenti){
        $s=0;
        $br=0;
        foreach($studenti as $student){
            if($student->getOsvojeniESPB() > 0){
                $s=$s+($student->skolarina()/$student->getOsvojeniESPB());
                $br++;
            }
        }
        if($br>0){
            return $s/$br;
        }
        else{
            return 0;
        }
    }
    echo "<p>Prosecan odnos visine skolarine i broja osvojenih bodova: " . prosecanOdnos($studenti) . "</p>";

    //zadatak 9
    echo "<p><b>Zadatak 9</b></p>";
    echo "<p>Odrediti studenta sa minimalnim brojem osvojenih ESPB. Ako ima više takvih studenata,
    vratiti onog koji plaća najveću školarinu (ako ima i više takvih, vratiti bilo kog).</p>";

    function minBodova($studenti){
        $min=$studenti[0]->getOsvojeniESPB();        
        foreach($studenti as $student){
            if($student->getOsvojeniESPB()<$min){
                $min=$student->getOsvojeniESPB();
            }
        }
        $minBodovaNiz=[];
        foreach($studenti as $student){
            if($student->getOsvojeniESPB()==$min){
                $minBodoviNiz[]=$student;
            }
        }
        return maksSkolarina($minBodoviNiz);
    }
    echo "<p>Student sa minimalnim brojem bodova koji placa maksimalnu skolarinu: </p>";
    minBodova($studenti)->ispis();   
    

?>