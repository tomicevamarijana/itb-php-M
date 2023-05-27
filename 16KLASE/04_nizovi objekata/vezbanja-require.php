<?php

    /*
    OPCIJE SU:
    include "Film.php";
    include_once "Film.php";
    require "Film.php";
    require_once "Film.php";
    */
    require_once "Film.php"; //relativna putanja
    //require "NemiFilm.php";

    $f1=new Film("Lord of the rings",2001,"Peter Jackson",[7,8.7,8.7]);
    $f1->stampaj();
    $f2=new Film("Kill Bill",2003,"Quentin Tarantino",[10,9.5,9.8,7.5,8.7]);
    $f2->stampaj();
    $f3=new Film("Titanic",1999,"James Cameron",[7.6,10,8,7]);
    $f3->stampaj();
    echo"<hr>";
    /*
    $n1=["naslov"=>"LOTR","godinaIzdanja"=>2001,"reziser"=>"PJ"];
    $n2=["naslov"=>"Kill Bill","godinaIzdanja"=>2003,"reziser"=>"QT"];
    $n3=["naslov"=>"Titanic","godinaIzdanja"=>1999,"reziser"=>"JC"];
    $n4=["title"=>"Titanic","year"=>1999,"director"=>"JC"]; //ovo smem u asoc nizu da uradim, niko mi ne brani, da menjam kljuceve
    $filmoviTemp=[$n1,$n2,$n3]; //elementi su asoc.nizovi
    */
    $filmovi=[$f1,$f2,$f3]; //elementi su objekti 
    //poenta klase je da daje smisao, svi objekti su uniformni, a u asoc.nizu su nezavisni medjusobno
    foreach($filmovi as $film){
        echo $film->getGodinaIzdanja();
        $film->stampaj();
    }
    //ZADACI
    //funkcija prosecna ocena
    function prosecnaOcena($films){ //parametar konkretna vrednost
        $zbir=0;
        foreach($films as $f){
            $zbir+=$f->prosek();
        }
        $n=count($films);
        if($n>0){
            return $zbir/$n;
        }
        else{
            return 0;
        }
        //return ($n>0)?($zbir/$n):0;
    }
    $prosecna=prosecnaOcena($filmovi);
    echo "<p> Prosecna ocena svih filmova je: $prosecna.</p>";

    //funkcija vek filmova
    function vekFilmova($films,$vek){
        foreach($films as $f){
            $godinaIzdanja=$f->getGodinaIzdanja();
            //var_dump($godinaIzdanja);
            $vekIzdanja=ceil($godinaIzdanja/100);
            if($vekIzdanja==$vek){
                $f->stampaj();
            }
        }
    }
    echo "<p>Filmovi koji su Izasli u 20.veku: </p>";
    vekFilmova($filmovi,20);
    echo "<hr>";

    //osrednji film
    //Napraviti funkciju osrednjiFilm kojoj se prosleđuje niz filmova a ona vraća film koji je najbliži prosečnoj oceni svih filmova.
    function osrednjiFilm($niz){
        $prosek=prosecnaOcena($niz);
        $najblizaVrednost=abs($niz[0]->prosek()-$prosek); //neki minimum
        $najbliziFilm=$niz[0];
        foreach($niz as $film){
            $vrednost=abs($film->prosek()-$prosek);
            if($vrednost<$najblizaVrednost){
                $najblizaVrednost=$vrednost;
                $najbliziFilm=$film;
            }
        }
        return $najbliziFilm;        
    }
    $osf=osrednjiFilm($filmovi);
    echo "<p>Film najblizi prosecnoj vrednosti je: </p>";
    $osf->stampaj();
    echo "<hr>";

    //Napraviti funkciju najboljeOcenjeni kojoj se prosleđuje niz filmova, a ona vraća najbolje ocenjeni film.
    function najboljeOcenjeni($films){
        $maks=$films[0]->prosek(); //$maks=0; valjda moze
        $maksFilm=$films[0];
        foreach($films as $film){
            if($film->prosek()>$maks){
                $maks=$film->prosek();
                $maksFilm=$film;
            }
        }
        return $maksFilm; //vraca ceo objekat
    }
    echo "<p>Najbolje ocenjenji film: </p>";
    $najFilm=najboljeOcenjeni($filmovi);
    $najFilm->stampaj();
    echo "<hr>";

    //NAJMANJA OCENA NAJBOLJEG
    //Napraviti funkciju najmanjaOcenaNajboljeg kojoj se prosleđuje niz filmova a ona određuje najbolji film i ispisuje njegovu najslabiju ocenu.
    
    function najmanjaOcenaNajboljeg($niz){
        $najboljiFilm=najboljeOcenjeni($niz);
        $sveOcene=$najboljiFilm->getOcene();
        $minOcena=$sveOcene[0];
        foreach($sveOcene as $ocena){
            if($ocena<$minOcena){
                $minOcena=$ocena;                
            }
        }
        return $minOcena;
    }
    $minOcena=najmanjaOcenaNajboljeg($filmovi);
    echo "<p>Najmanja ocena najbolje ocenjenjog filma: $minOcena.</p>";
    echo "<hr>";
    
    
    //NAJMANJA OCENA -pogledaj opet 
    function najmanjaOcena($niz){
        $ocenePrvogFilma=$niz[0]->getOcene();
        $minOcena=$ocenePrvogFilma[0];
        foreach($niz as $film){
            $ocene=$film->getOcene();
            foreach($ocene as $o){
                if($o<$minOcena){
                    $minOcena=$o;
                }
            }
        }
        return $minOcena;
    }
    $mo=najmanjaOcena($filmovi);
    echo"<p>Stefanovo resenje za najmanju ocenu svih filmova: $mo</p>";
    echo "<hr>";


    function najmanjaOcena2($niz){
        //$minOcena=10; //po meni, dovoljno je ovo
        $ocenePrvog=$niz[0]->getOcene();
        $minOcena=$ocenePrvog[0];
        foreach($niz as $film){
            $nizOcena=$film->getOcene();
            foreach($nizOcena as $ocena){
                if($ocena<$minOcena){
                    $minOcena=$ocena;
                    //$tajFilm=$film; //kad bi se trazilo koji film sadrzi tu ocenu
                }
            }
                      
        }
        return $minOcena;
        //return $tajFilm;
    }
    echo "<p>Najmanja ocena svih filmova je: " . najmanjaOcena2($filmovi) ."</p>";
    //$tajFilm=najmanjaOcena2($filmovi);
    //$tajFilm->stampaj();
    echo "<hr>";

    //Napisati funkciju najcescaOcena kojoj se prosleđuje niz filmova, a ona vraća ocenu koju su filmovi najčešće dobijali.
    echo"<p><b>Napisati funkciju najcescaOcena kojoj se prosleđuje niz filmova, a ona vraća ocenu koju su filmovi najčešće dobijali.</b></p>";
    function najcescaOcena($niz){
        $oceneAsoc=[];
        foreach($niz as $film){
            $nizOcena=$film->getOcene();
            foreach($nizOcena as $ocena){
                $postoji=false;
                foreach($oceneAsoc as $o=>$pojava){
                    if($ocena==$o){
                        $postoji=true;
                        $oceneAsoc[$ocena]++;
                    }
                }
                if($postoji==false){
                    $oceneAsoc[$ocena]=1;
                }
            }    
        }
        $maksPojava=0;
        foreach($oceneAsoc as $o=>$pojava){
            echo "<p>Ocena $o se pojavljuje $pojava puta.</p>";
            if($pojava>$maksPojava){
                $maksPojava=$pojava;
                $maksOcena=$o;
            }
        }        
        //echo "<p>Ocena $maksOcena se pojavljuje $maksPojava puta.</p>";
        return $maksOcena;
    }
    $maksOcena=najcescaOcena($filmovi);
    echo "<p>Ocena $maksOcena se pojavljuje najcesce.</p>";
    echo "<hr>";
    echo "<hr>";

    echo"<p><b>DRUGI NACIN Napisati funkciju najcescaOcena kojoj se prosleđuje niz filmova, a ona vraća ocenu koju su filmovi najčešće dobijali.</b></p>";
    //drugi nacin-pravim niz od svih unique razlicitih ocena i onda prolazim po njemu, i svim ocenama, i brojim. treba probati mozda da se napravi asocijativni
    function najcescaOcena2($niz){
        $nizNeponavljajucih=[];
        foreach($niz as $film){
            $nizOcena=$film->getOcene();
            foreach($nizOcena as $ocena){
                if(!in_array($ocena,$nizNeponavljajucih)){ 
                    $nizNeponavljajucih[]=$ocena; 
                }
            }
        }
        //$rezAsoc=[];
        $maksPojava=0;
        $maksOcena=0;
        for($i=0;$i<count($nizNeponavljajucih);$i++){
            //echo $nizNeponavljajucih[$i] . ", ";
            $br=0;
            foreach($niz as $film){
                $nizOcena=$film->getOcene();
                foreach($nizOcena as $o){
                    if($nizNeponavljajucih[$i]==$o){
                        $br++;
                        if($br>$maksPojava){
                            $maksPojava=$br;
                            $maksOcena=$nizNeponavljajucih[$i];
                        }
                    }
                }
            }
        }
        //echo "<p>Ocena $maksOcena se pojavljuje $maksPojava puta.</p>";
        return $maksOcena;
    }
    $maksOcena2=najcescaOcena2($filmovi);
    echo "<p>Drugi nacin: Ocena $maksOcena2 se pojavljuje najcesce.</p>";

    /* //los nacin
    function najcescaOcena2($niz){
        $nizNeponavljajucih=[];
        foreach($niz as $film){
            $nizOcena=$film->getOcene();
            foreach($nizOcena as $ocena){
                if(in_array($ocena,$nizNeponavljajucih)){ //ovo nije dobro sigurna sam
                    $nizNeponavljajucih[$ocena]++; //
                }
                else{
                    $nizNeponavljajucih[$ocena]=1;
                }
            }
        }
        foreach($nizNeponavljajucih as $ocena=>$pojava){
            echo "<p>Ocena $ocena se pojavljuje $pojava puta.</p>";
        }

    }
    najcescaOcena2($filmovi);
    */

 
    //pomocna funkcija
    echo "<hr>";
    function sveOcene($niz){
        $sveOcene=[];
        foreach($niz as $film){
            $nizOcena=$film->getOcene();
            for($i=0;$i<count($nizOcena);$i++){
                $sveOcene[]=$nizOcena[$i];
            }
        }
        echo "<p>Sve ocene na gomili " . implode(", ",$sveOcene) . "</p>";
    }
    sveOcene($filmovi);
    echo "<hr>";

    //iznad ocene
    echo"<p><b>Napraviti funkciju iznadOcene kojoj se prosleđuje ocena i niz filmova, a ona vraća niz onih filmova koji su bolje ocenjeni od prosleđene ocene.</b></p>";    
    function iznadOcene($niz,$ocena){
        $rezNiz=[];
        foreach($niz as $film){
            if($film->prosek()>$ocena){
                $rezNiz[]=$film;
            }
        }
        return $rezNiz;
    }
    
    $ocena=7;
    $rez=iznadOcene($filmovi,$ocena);
    echo "<p>Niz filmova koji su bolje ocenjeni od ocene $ocena: </p>";    
    foreach($rez as $film){
        $film->stampaj();
    }

    //iznad ocene noviji
    echo"<hr>";
    echo"<p><b>Napisati funkciju iznadOceneNoviji kojoj se prosleđuje ocena i niz filmova  a koja treba da na ekranu da ispiše sve podatke o najnovijem filmu
    koji zadovoljava prosleđenu ocenu.</b></p>";
    function iznadOceneNoviji($niz,$ocena){
        $iznadOcene=iznadOcene($niz,$ocena);
        $najnoviji=strtotime($iznadOcene[0]->getGodinaIzdanja());
        foreach($iznadOcene as $film){
            if(strtotime($film->getGodinaIzdanja())>$najnoviji){
                $najnoviji=strtotime($film->getGodinaIzdanja());
                $film->stampaj();
            }
        }
    }
    $ocena=7;
    echo "<p>Najnovoji film koji je bolje ocenjen od ocene $ocena: </p>";
    iznadOceneNoviji($filmovi,$ocena);
    


    




?>
