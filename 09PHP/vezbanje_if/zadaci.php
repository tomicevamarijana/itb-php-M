<?php
echo"<p>Vezbanje zadataka</p><hr>";

//Zadaci

//Zadatak 1
echo"<hr><p><b>Zadatak 1</b></p>";
echo"<p>Za dva uneta broja ispitati koji je veci a koji manji.</p><hr>";
$br1=10;
$br2=1;
if($br1<$br2){
    echo"<p>Broj $br1 je manji od broja $br2.</p>";
}
elseif($br2<$br1){
    echo"<p>Broj $br2 je manji od broja $br1.</p>";
}
else{
    echo"<p>Broj $br1 i broj $br2 su jednaki.</p>";
}

//Zadatak 2
echo"<hr><p><b>Zadatak 2</b></p>";
echo"<p>Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, računati da je u plusu.</p><hr>";
$t=-10;
if($t<0){
    echo"<p>Temperatura  $t je u minusu.</p>";
}
else{
    echo"<p>Temperatura  $t je u nula ili u plusu.</p>";
}
//Zadatak 3
echo"<hr><p><b>Zadatak 3</b></p>";
echo"<p>U odnosu na pol (muški/ženski) koji je korisnik uneo prikazati odgovarajući avatar.</p><hr>";
$pol="m";
if($pol=='z'){
    echo"<p> <img src='../images/f.png' alt='zenski pol' width='20px'> </p>";
}
else{
    echo"<p> <img src='../images/m.png' alt='muski pol' width='20px'> </p>";
}

//Zadatak 4
echo"<hr><p><b>Zadatak 4</b></p>";
echo"<p>U odnosu na preuzete vrednosti AM i PM sa svog računara, ispisati da li je trenutno jutro ili popodne.</p><hr>";
$t=date('A'); //Vraca samo vrednost AM ili PM, dok npr date('H:i A') vraca sat:minut PM/AM
if($t=="AM"){
    echo"<p>Trenutno je jutro.</p>";
}
else{
    echo"<p>Trenutno je popodne.</p>";
}

//Zadatak 5
echo"<hr><p><b>Zadatak 5</b></p>";
echo"<p>Za preuzetu godinu sa računara i unetu godinu rođenja izračunati da li je osoba punoletna ili maloletna.</p><hr>";
$current=date('Y');
$my=1995;
$age=$current-$my;
if($age<18){
    echo"<p>Osoba starosti $age je maloletna.</p>";
}
else{
    echo"<p>Osoba starosti $age je punoletna.</p>";
}

//Zadatak 6
echo"<hr><p><b>Zadatak 6</b></p>";
echo"<p>Poređati tri uneta broja od najmanjeg do najvećeg.</p><hr>";
$br1=100;
$br2=1;
$br3=1000;

if($br1>$br2){
    $pom=$br1;
    $br1=$br2;
    $br2=$pom;
}
if($br1>$br3){
    $pom=$br1;
    $br1=$br3;
    $br3=$pom;
}
if($br2>$br3){
    $pom=$br2;
    $br2=$br3;
    $br3=$br2;
}
echo"<p>Rastuci redosled brojeva je $br1, $br2, $br3.</p>";

//Zadatak 7
echo"<hr><p><b>Zadatak 7</b></p>";
echo"<p>Na osnovu unetog broja poena ispitati koju ocenu profesor treba da upiše učeniku. Učenik je položio ispit ukoliko ima više od 50 poena, u suprotnom je pao ispit. 
Za više od 50 poena učenik dobija ocenu 6, 
za više od 60 poena učenik dobija ocenu 7,
za više od 70 poena učenik dobija ocenu 8, 
za više od 80 poena učenik dobija ocenu 9 i 
za više od 90 poena učenik dobija ocenu 10.
</p><hr>";

$p=79;
if($p<=50){
    echo"<p>Ucenik ima $p poena i pao je ispit.</p>";    
}
elseif($p<=60){
    echo"<p>Ucenik ima $p poena i dobija ocenu 6.</p>"; 
}
elseif($p<=70){
    echo"<p>Ucenik ima $p poena i dobija ocenu 7.</p>"; 
}
elseif($p<=80){
    echo"<p>Ucenik ima $p poena i dobija ocenu 8.</p>"; 
}
elseif($p<=90){
    echo"<p>Ucenik ima $p poena i dobija ocenu 9.</p>"; 
}
else{
    echo"<p>Ucenik ima $p poena i dobija ocenu 10.</p>"; 
}

//Zadatak 8
echo"<hr><p><b>Zadatak 8</b></p>";
echo"<p>Preuzeti koji je dan u nedelji sa računara i ispitati da li je to radni dan ili je u pitanju vikend.</p><hr>";

$day=date('w');
if($day=='0'){
    echo"<p>Danas je nedelja, VIKEND.</p>"; 
}
elseif($day=='6'){
    echo"<p>Danas je subota, VIKEND.</p>"; 
}
else{
    echo"<p>Danas je RADNI DAN.</p>"; 
}

//Zadatak 9
echo"<hr><p><b>Zadatak 9</b></p>";
echo"<p>Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, dobar dan za vreme manje od 18 sati popodne i u ostalim slučajevima ispisati dobro veče.</p><hr>";

$h=date('H');
if($h<12){
    echo"<p>Trenutno je $h sati, stoga dobro jutro!</p>"; 
}
elseif($h<18){
    echo"<p>Trenutno je $h sati, stoga dobar dan!</p>"; 
}
else{
    echo"<p>Trenutno je $h sati, stoga dobro vece!</p>"; 
}

//Zadatak 10
echo"<hr><p><b>Zadatak 10</b></p>";
echo"<p>Uporediti dva uneta datuma i ispisati koji od njih je raniji.</p><hr>";

$d1=1;
$m1=2;
$g1=2000;
$d2=11;
$m2=12;
$g2=2020;
if($g1<$g2){
    echo"<p>Datum $d1.$m1.$g1. je raniji.</p>"; 
}
elseif($g2>$g1){
    echo"<p>Datum $d2.$m2.$g2. je raniji.</p>"; 
}
elseif($m1<$m2){
    echo"<p>Datum $d1.$m1.$g1. je raniji.</p>"; 
}
elseif($m2<$m1){
    echo"<p>Datum $d2.$m2.$g2. je raniji.</p>"; 
}
elseif($d1<$d2){
    echo"<p>Datum $d1.$m1.$g1. je raniji.</p>"; 
}
elseif($d2<$d1){
    echo"<p>Datum $d2.$m2.$g2. je raniji.</p>"; 
}
else{
    echo"<p>Datumi su isti.</p>"; 
}

//Zadatak 11
echo"<hr><p><b>Zadatak 11</b></p>";
echo"<p>Radno vreme jedne programerske firme je od 9h do 17h. Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi.</p><hr>";

$h=date('H');
if($h<9){
    echo"<p>Trenutno je $h sati, tako da firma ne radi!</p>"; 
}
elseif($h>=17){
    echo"<p>Trenutno je $h sati, tako da firma ne radi!</p>"; 
}
else{
    echo"<p>Trenutno je $h sati, tako da firma radi!</p>"; 
}

//domaci 1
echo"<hr><p><b>Zadatak 1</b></p>";
echo"<p>Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h do 18h. Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren.</p><hr>";
$h=date('H');
$d=date('N');
if($d<=5 && $h>=9 && $h<20){
    echo"<p>Butik je trenutno otvoren, danas je RADNI dan i sada je $h sati.</p>";
}
elseif($d>5 && $h>=10 && $h<18){
    echo"<p>Butik je trenutno otvoren, danas je VIKEND dan i sada je $h sati.</p>";
}
else{
    echo"<p>Butik je zatvoren.</p>";
}

//domaci 2
echo"<hr><p><b>Zadatak 2</b></p>";
echo"<p>Ministarstvo zdravlja jedne zemlje je povodom pandemije virusa donelo sledeću odredbu:
'Ukoliko je procenat pozitivno testiranih stanovnika u odnosu na ukupno testirane stanovnike u jednom danu veći od 30% ili ukoliko je procenat pozitivno testiranih stanovnika veći od 10% ukupnog broja stanovnika te zemlje, automatski se uvodi vanredno stanje.'
Za proizvoljno unete vrednosti: ukupan broj stanovnika zemlje, ukupan broj testiranih u jednom danu i ukupan broj pozitivno testiranih u tom danu, na ekranu crvenom bojom ispisati VANREDNO STANJE, ukoliko treba automatski uvesti vanredno stanje prema odredbi koju je ministarstvo donelo (u suprotnom ne ispisivati ništa).
</p><hr>";

$ukSt=3000;
$ukTest=1000;
$ukPoz=301;
if($ukPoz>$ukTest*30/100 || $ukPoz>$ukSt*10/100){
    echo"<p style='color:red;'>VANREDNO STANJE</p>";
}

//Zadatak 12
echo"<hr><p><b>Zadatak 12</b></p>";
echo"<p>Za unet početak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.</p><hr>";

$p1=8;
$k1=16;
$p2=10;
$k2=18;
if($k1<$p2 || $k2<$p1){
    echo"<p>Smene se NE preklapaju.</p>"; 
}
else{
    echo"<p>Smene se preklapaju.</p>"; 
}

//Zadatak 13
echo"<hr><p><b>Zadatak 13</b></p>";
echo"<p>Za uneti broj ispitati da li je paran ili nije.</p><hr>";

$n=5;
if($n%2==0){
    echo"<p>Broj $n je paran.</p>"; 
}
else{
    echo"<p>Broj $n je neparan.</p>"; 
}

//Zadatak 14
echo"<hr><p><b>Zadatak 14</b></p>";
echo"<p>Za uneti broj ispisati da li je deljiv sa 3 ili ne.</p><hr>";

$n=15;
if($n%3==0){
    echo"<p>Broj $n je deljiv sa 3.</p>"; 
}
else{
    echo"<p>Broj $n nije deljiv sa 3.</p>"; 
}

//Zadatak 15
echo"<hr><p><b>Zadatak 15</b></p>";
echo"<p>Za dva uneta broja, od većeg učitanog broja oduzeti manji i rezultat ispisati na ekranu.</p><hr>";

$x=5;
$y=10;
if($x<$y){
    $raz=$y-$x;
    echo"<p>Razlika je $raz.</p>"; 
}
else{
    $raz=$x-$y;
    echo"<p>Razlika je $raz.</p>"; 
}

//Zadatak 16
echo"<hr><p><b>Zadatak 16</b></p>";
echo"<p>Za uneti broj ispitati da li je on manji ili veći od nule. Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, a ukoliko je veći od nule ispisati njegov sledbenik.</p><hr>";

$n=-20;
if($n<=0){
    $rez=$n-1;
    echo"<p>Prethodnik je $rez.</p>"; 
}
else{
    $rez=$n+1;
    echo"<p>Sledbenik je $rez.</p>";
}

//Zadatak 17
echo"<hr><p><b>Zadatak 17</b></p>";
echo"<p>Za tri uneta broja ispisati koji od njih je najveći, koji od njih je srednji, a koji od nih je najmanji.</p><hr>";

$a=20;
$b=30;
$c=25;
$max=$a;
if($b>$max){
    $max=$b;
}
if($c>$max){
    $max=$c;
}
$min=$a;
if($b<$min){
    $min=$b;
}
if($c<$min){
    $min=$c;
}
$sr=$a+$b+$c-$min-$max;
echo"<p>Rastuci redosled je $min, $sr, $max.</p>"; 

//Zadatak 18
echo"<hr><p><b>Zadatak 18</b></p>";
echo"<p>Za učitani broj ispitati da li je ceo.</p><hr>";
$n=-10.5;
if($n-floor($n)==0){
    echo"<p>Broj $n je ceo.</p>";
}
else{
    echo"<p>Broj $n nije ceo.</p>";
}
//alternativno
$n=11;
//$rez=var_dump(is_int($n));
$rez=is_int($n);
if($rez==false){
    echo"<p>Broj $n nije ceo.</p>";
}
else{
    echo"<p>Broj $n je ceo.</p>";
}

//Zadatak 20
echo"<hr><p><b>Zadatak 20</b></p>";
echo"<p>Učitati dva cela broja i ispitati da li je veći od njih paran.</p><hr>";
$x=35;
$y=20;
if($x>$y){
    if($x%2==0){
        echo"<p>Veci broj $x je paran.</p>";
    }
    else{
        echo"<p>Veci broj $x je neparan.</p>";
    }
}
else{
    if($y%2==0){
        echo"<p>Veci broj $y je paran.</p>";
    }
    else{
        echo"<p>Veci broj $y je neparan.</p>";
    }
}























?>