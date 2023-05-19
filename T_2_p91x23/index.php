<?php

    //1 zadatak
    echo "<p><b>1 zadatak</b></p>";
    $stabla=[2,2.5,3,4,3.33,1];

    function brojNeposecenihStabala($stabla,$testera){
        $br=0;
        for($i=0;$i<count($stabla);$i++){
            if($stabla[$i]>$testera){
                $br++;
            }
        }
        return $br;
    }
    $testera=3.5;
    echo "Ostalo je neposecenih stabala: " . brojNeposecenihStabala($stabla,$testera);

    echo "<hr>";
    function ukupnoPoseceno($stabla,$testera){
        $s=0;
        for($i=0;$i<count($stabla);$i++){
            if($stabla[$i]>$testera){
                $s=$s+($stabla[$i]-$testera);
            }
        }
        return $s;
    }
    echo "Ukupno poseceno drva: " . ukupnoPoseceno($stabla,$testera);

    echo "<hr>";
    function maxDuzina($stabla,$testera){
        $d=0;
        $max=0;
        for($i=0;$i<count($stabla)-1;$i++){
            if($stabla[$i]>$testera && $stabla[$i+1]>$testera){
                $d=$d+($stabla[$i]-$testera)+($stabla[$i+1]-$testera);
                if($d>$max){
                    $max=$d;
                }
            }            
        }
        return $max;
    }
    echo "Maksimalna duzina niza " . maxDuzina($stabla,$testera);

    //2 zadatak
    echo "<p><b>2 zadatak</b></p>";
    $cena=["jabuke"=>5,"kruske"=>20,"tresnje"=>30,"visnje"=>30]; //cena po kg
    $kolicina=["jabuke"=>5,"kruske"=>2,"tresnje"=>3,"visnje"=>0];//na stanju u kg
    
    //stanje
    function stanje($cena,$kolicina){
        foreach($kolicina as $voce=>$kg){
            if($kg==0){
                echo "<p style='color:red'>$voce nije na stanju.</p>";
            }
            else{
                echo "<p style='color:green'>$voce je na stanju.</p>";
            }
        }
    }
    stanje($cena,$kolicina);

    echo "<hr>";
    //prvo ponudi
    function prvoPonudi($cena,$kolicina){
        $maxVoce=0;       
        
        foreach($cena as $voceC=>$c){
            $cenaVoca=0;
            foreach($kolicina as $voceK=>$k){
                if($voceC==$voceK){
                    $cenaVoca=$cenaVoca+$c*$k;
                    if($cenaVoca>$maxVoce){
                        $maxVoce=$cenaVoca;
                        //$prvoPonudi=$voceK;
                    }
                }
            }
        }
        $prvoPonudi="";
        foreach($cena as $voceC=>$c){
            foreach($kolicina as $voceK=>$k){
                if($voceC==$voceK){
                    $cenaVoca=$c*$k;
                    if($cenaVoca==$maxVoce){
                        //$maxVoce=$cenaVoca;
                        $prvoPonudi=$voceK;
                    }
                }
            }
        }
        return $prvoPonudi;        
    }
    echo "Prvo treba ponuditi voce: " . prvoPonudi($cena,$kolicina);

    echo "<hr>";
    //vrednost kupovine
    $kupovina=["jabuke"=>2,"kruske"=>2,"tresnje"=>2,"visnje"=>2];
    function vrednostKupovine($cena,$kolicina,$kupovina){
        $ukCena=0;
        foreach($kupovina as $voceKup=>$kgKup){
            foreach($kolicina as $voceK=>$kg){
                foreach($cena as $voceC=>$c){
                    if($voceKup==$voceK && $voceKup==$voceC)
                    if($kgKup<=$kg){
                        $ukCena=$ukCena+$kgKup*$c;
                    }
                }
            }
        }
        return $ukCena;
    }
    echo "Kupac ce platiti ukupno: " . vrednostKupovine($cena,$kolicina,$kupovina);







    






    
    











?>