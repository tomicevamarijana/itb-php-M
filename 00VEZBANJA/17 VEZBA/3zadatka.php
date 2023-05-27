<?php
    echo "<p><b>ZADATAK 1</b></p>";
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
        if(!($brDesetki<$brDevetki)){ //$brDesetki>=$br devetki
            return true;
        }
        else{
            return false;
        }
    } //moglo je i samo return ($brDesetki >=$brDevetki)
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

    echo "<p><b>ZADATAK 2</b></p>";
    // ZADATAK 2
    $nizOcenaA=[
        ["naziv"=>"fizika","datum"=>"2023/05/22","ocena"=>7],
        ["naziv"=>"matematika1","datum"=>"2023/05/10","ocena"=>9],
        ["naziv"=>"engleski","datum"=>"2023/05/15","ocena"=>9],
        ["naziv"=>"programiranje","datum"=>"2023/05/22","ocena"=>10],
        ["naziv"=>"likovno","datum"=>"2022/05/30","ocena"=>10],
        ["naziv"=>"matematika2","datum"=>"2023/05/10","ocena"=>8],
        ["naziv"=>"matematika3","datum"=>"2023/05/10","ocena"=>10]
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

    //5zad
    function studentGeneracijeA($nizOcenaA){
        $brDevetki=0;
        $brDesetki=0;
        for($i=0;$i<count($nizOcenaA);$i++){
            if($nizOcenaA[$i]["ocena"]==9){
                $brDevetki++;
            }
            elseif($nizOcenaA[$i]["ocena"]==10){
                $brDesetki++;
            }
            else{
                return false;
            }
        }
        if($brDesetki>=$brDevetki){
            return true;
        }
        else{
            return false;
        }
    }
    //poziv
    echo "<p>Student je djak generacije " ;
    if(studentGeneracijeA($nizOcenaA)){
        echo " Jeste </p>";
    }
    else{
        echo " Nije </p>";
    }
    echo"<hr>";

    //8 zadatak
    function polozioGodA($nizOcenaA,$god){
        for($i=0;$i<count($nizOcenaA);$i++){
            if($god==(int)substr($nizOcenaA[$i]["datum"],0,4)){
                echo "<p>Naziv ispita: " . $nizOcenaA[$i]["naziv"] . " polozen sa ocenom: " . $nizOcenaA[$i]["ocena"] . "</p>";
            }
        }
    }    
    $god=2023;
    polozioGodA($nizOcenaA,$god);

    //9 zadatak
    function prosekGodinaA($nizOcenaA,$god){
        $br=0;
        $s=0;
        for($i=0;$i<count($nizOcenaA);$i++){
            if($god==(int)substr($nizOcenaA[$i]["datum"],0,4)){
                $br++;
                $s=$s+$nizOcenaA[$i]["ocena"];
            }
        }
        if($br!=0){
            $sr=$s/$br;
        }
        else{
            $sr=0;
            //echo "<p>Nema polozenih ispita te godine.</p>";
        }
        return $sr;
    }
    $god=2023;
    echo "<p>Prosek polozenih ispita za datu godinu $god: ". prosekGodinaA($nizOcenaA,$god) ."</p>";

    //zadatak 10
    function maksOcenaGodinaA($nizOcenaA,$god){
        $maksOcena=0;
        for($i=0;$i<count($nizOcenaA);$i++){
            if($god==(int)substr($nizOcenaA[$i]["datum"],0,4)){
                if($nizOcenaA[$i]["ocena"]>$maksOcena){
                    $maksOcena=$nizOcenaA[$i]["ocena"];
                }
            }
        }
        $nizMaksOcena=[];
        for($i=0;$i<count($nizOcenaA);$i++){
            if($nizOcenaA[$i]["ocena"]==$maksOcena){
                $nizMaksOcena[]=$nizOcenaA[$i];
                //echo $nizOcenaA[$i]["naziv"];                
            }
        }
        //var_dump($nizMaksOcena);
        $najskoriji=0;
        $najskorijiNaziv="";
        for($i=0;$i<count($nizMaksOcena);$i++){
            if(strtotime($nizMaksOcena[$i]["datum"])>$najskoriji){
                $najskoriji=strtotime($nizMaksOcena[$i]["datum"]);
                $najskorijiNaziv=$nizMaksOcena[$i]["naziv"];
            }
        }
        return $najskorijiNaziv;
    }
    $god=2023;
    echo "<p>Maks ocena na ispitu za datu godinu $god: ". maksOcenaGodinaA($nizOcenaA,$god) ."</p>";

    //zadatak 11
    function brSpec($nizOcenaA,$br1,$br2,$s){
        $br=0;
        for($i=0;$i<count($nizOcenaA);$i++){
            if(strpos($nizOcenaA[$i]["naziv"],$s)!==false){
                if($nizOcenaA[$i]["ocena"]>$br1 && $nizOcenaA[$i]["ocena"]<$br2){
                    $br++;
                }
            }
        }
        return $br;
    }
    echo "<p>Broj ispita za zadati kriterijum je: " . brSpec($nizOcenaA,6,10,"matematika") . ".</p>";
    
    //zadatak 3, NIZOVI OBJEKATA
    echo "<p><b><hr>ZADATAK 3</b></p>";

    class Ispit{
        private $predmet;
        private $semestar;
        private $espb;
        private $ocena;
        private $datum;

        //konstruktor
        public function __construct($p,$s,$e,$o,$d){
            $this->setPredmet($p);
            $this->setSemestar($s);
            $this->setEspb($e);
            $this->setOcena($o);
            $this->setDatum($d);
        }

        //seteri
        public function setPredmet($p){
            if(is_string($p)){
                $this->predmet=$p;
            }
        }
        public function setSemestar($s){
            if($s>=1 && $s<=8){
                $this->semestar=$s;
            }
        }
        public function setEspb($b){
            if($b>=1 && $b<=30){
                $this->espb=$b;
            }
        }
        public function setOcena($o){
            if($o>=6 && $o<=10){
                $this->ocena=$o;
            }
        }
        public function setDatum($d){
            if(is_string($d)){
                $regex='/^[A-Z0-9]{4}-[A-Z0-9]{2}-[A-Z0-9]{2}$/';
                if(preg_match($regex, $d)){
                    $this->datum=$d;
                }
            }
        }
        //geteri
        public function predmet(){
            return $this->predmet;
        }
        public function getSemestar(){
            return $this->semestar;
        }
        public function getEspb(){
            return $this->espb;
        }
        public function getOcena(){
            return $this->ocena;
        }
        public function getDatum(){
            return $this->datum;
        }


    }
    //kreiranje objekata
    $i1=new Ispit("matematika",1,30,10,"2021/01/20");
    echo $i1->getDatum();

    echo "<hr>";
    



    
























    




?>