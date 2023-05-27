<?php
    $brojStrana=[500,200,330,400,120];
    $cena=[5000,3500,1200,900,600];

    //prolazak
    //for($i=0;$i<count($brojStrana);$i++){};
    //foreach($brojStrana as $brS){}; 
    //$i=0; while($i<count($brojStrana)){$i++;}

    //zadatak: maks prosecna cena strane
    function maxProsek(){ //for petlja nije vezana za niz, foreach vec jeste
        $max=$cena[0]/$brojStrana[0];
        for($i=0;$i<count($brojStrana);$i++){
            if($cena[$i]/$brojStrana[$i]>$max){
                $max=$cena[$i]/$brojStrana[$i];
            }
        }
        return $max;
    }

    //isto, samo asocijativni nizovi
    $brojStranaA=["knjiga1"=>500,"knjiga2"=>200,"knjiga3"=>330,"knjiga4"=>400,"knjiga5"=>120];
    $cena=["knjiga1"=>5000,"knjiga2"=>3500,"knjiga3"=>1200,"knjiga4"=>900,"knjiga5"=>600];
//mogu da biram kroz koju petlju prvo
    function maxProsekA($brojStranaA,$cena){
        $max=0;
        foreach($brojStrana as $k=>$v){
            $t=$cena[$k]/$v; //trenutna
            if($t>$max){
                $t=$max;
            }
        }
        return $max;
    }

    //niz asocijativnih nizova
    $nizKnjiga=[
        ["brojStrana"=>500,"cena"=>5000],
        ["brojStrana"=>200,"cena"=>3500],
        ["brojStrana"=>330,"cena"=>1200],
        ["brojStrana"=>400,"cena"=>9000],
        ["brojStrana"=>120,"cena"=>600],
    ];
    function maxProsekNizA($nizKnjiga){
        $max=0;
        for($i=0;$i<count($nizKnjiga);$i++){
            $t=$nizKnjiga[$i]["cena"]/$nizKnjiga[$i]["brojStrana"];
            if($t>$max){
                $max=$t;
            }
        }
        return $max;
    }

    $dan=['temperatura'=>[1,2,3,4,5]];
    for($i=0;$i<count($dan['temperatura']);$i++){
        $t=$dan['temperatura'][$i];
    }

    //rekapitulacija niz objekata
    class Knjiga{
        public $brojStrana;
        public $cena;
    }
    $k1=new Knjiga();
    $k1->brojStrana=500;
    $k1->cena=5000;

    $k2=new Knjiga();
    $k2->brojStrana=200;
    $k2->cena=3500;

    $k3=new Knjiga();
    $k3->brojStrana=330;
    $k3->cena=1200;

    $k4=new Knjiga();
    $k4->brojStrana=400;
    $k4->cena=900;

    $k5=new Knjiga();
    $k5->brojStrana=120;
    $k5->cena=600;

    $knjige=array($k1,$k2,$k3,$k4,$k5);

    function maxProsekNiz($knjige){
        $max=0;
        foreach($knjige as $knjiga){
            if($knjiga->cena/$knjiga->brojStrana>$max){
                $max=knjiga->cena/$knjiga->brojStrana;
            }
        }
        return $max;
    }
    $k6=new Knjiga();
    $k6->brojStrana=10;
    $k6->cena=100;
    $knjige[]=$k6; //dodavanje jos jednog elementa




?>