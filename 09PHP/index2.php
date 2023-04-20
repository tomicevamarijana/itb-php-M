<?php
    /*datum 18.4.23 */
    /*zadatak 3 */
    $cena=1400;
    $nov=2000;
    $kusur=$nov-$cena;
    echo "<hr>";
    echo "Kusur je ".$kusur;
    echo "<hr>";

    /*zadatak 4 */
    $eur=100;
    $kursEur=117.5;
    $din=$eur*$kursEur;
    echo "<hr>";
    echo "Vrednost u dinarima nakon konverzije je ".$din;
    echo "<hr>";
    /*provezbaj oko number formata*/

    /*zadatak 5*/
    $din=10000; /*ista promenljiva iz prethodnog zadatka, kojoj je dodeljena nova vrednost*/
    $eur=$din/$kursEur;
    echo "<hr>";
    echo "Vrednost u evrima nakon konverzije je ".$eur;
    echo "<hr>";

    /*zadatak 6*/
    $eur=100;
    $kursEurDin=117.5;
    $kursDolDin=106.7;
    $din=$eur*$kursEurDin; 
    $dol=$din/$kursDolDin;
    echo "<hr>";
    echo "Vrednost u dolarima nakon konverzije je ".$dol;
    echo "<hr>"; 
    $dol=$eur*$kursEurDin/$kursDolDin; /*optimizovano*/

    /*zadatak 10*/
    $cena=70;
    $popust=20;
    $cenaBezPopusta=$cena*100/(100-$popust);
    $cenaBezPopusta2=$cena/((100-$popust)/100);
    echo "<hr>";
    echo "Vrednost je ".$cenaBezPopusta;
    echo "<hr>";
    echo "<hr>";
    echo "Vrednost je ".$cenaBezPopusta2;
    echo "<hr>"; /*obrati paznju na deljenje nulom*/

    /*zadatak 11*/
    $n=56;
    $dana=floor($n/3);
    $ostatak=$n%3;

    echo "<hr>";
    echo "Dana je ".$dana;
    echo "<br>";
    echo "Neiskoriscenih je ".$ostatak;
    echo "<hr>"; /*koristan za pravljenje galerije npr */

   


?>