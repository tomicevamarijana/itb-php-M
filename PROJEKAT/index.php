<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekat PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        // ucitavanje slika za heder
        $arrayPh=[];
        for($i=1;$i<=3;$i++){            
            $arrayPh[]=rand(1,7);
        }
    ?>


    <header>
        <div class="container">
            <div class="row">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/<?php echo $arrayPh[0]?>.jpg" alt="<?php echo $arrayPh[0]?>" class="d-block" style="width:100%">
                        </div>
                        <div class="carousel-item">
                            <img src="images/<?php echo $arrayPh[1]?>.jpg" alt="<?php echo $arrayPh[1]?>" class="d-block" style="width:100%">
                        </div>
                        <div class="carousel-item">
                            <img src="images/<?php echo $arrayPh[2]?>.jpg" alt="<?php echo $arrayPh[2]?>" class="d-block" style="width:100%">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- PHP main section -->
    <?php        

    ?>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">POSAO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ZDRAVLJE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LJUBAV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#id_M">MOTIVACIJA</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- -----------------------------------------PHP-------------------------------------------------->

    <!-- -----------------------------------------MOTIVACIJA---------------------------------------- -->
<?php
    $filePathM=__DIR__."/txt/motivacija.txt";
    $myfileM = fopen($filePathM, "r");
    //echo fread($myfile,filesize(__DIR__."/motivacija.txt")); //za ispis u jednom redu
    //echo fread($myfile,filesize($file)); // isto samo bez promenljive $path
    
    if ($myfileM) {
        $arrayM = explode("\n", fread($myfileM, filesize($filePathM)));
    }

    for($i=0;$i<count($arrayM);$i++){
        if($i%2==0){
            $citatiM[]=$arrayM[$i];            
        }        
    }
    
    for($i=0;$i<count($citatiM);$i++){
        $randIndexM=rand(0,(count($citatiM)-1));
        $randCitatM=$citatiM[$randIndexM];              
    }
    //echo $randCitatM; //obavezno VAN: da se u petlji ne bi kalemili jedan na drugi
    
    for($i=0;$i<(count($arrayM)-1);$i++){
        if($arrayM[$i]==$randCitatM){            
            $randAutorM=$arrayM[$i+1];                      
            break;                 
        }               
    }
    //echo $randAutorM;
    //fclose($myfile);
?>

<!-- -----------------------------------------POSAO---------------------------------------- -->
<?php
    $filePathP=__DIR__."/txt/posao.txt";
    $myfileP = fopen($filePathP, "r");    
    if ($myfileP) {
        $arrayP = explode("\n", fread($myfileP, filesize($filePathP)));
    }

    for($i=0;$i<count($arrayP);$i++){
        if($i%2==0){
            $citatiP[]=$arrayP[$i];            
        }        
    }    
    for($i=0;$i<count($citatiP);$i++){
        $randIndexP=rand(0,(count($citatiP)-1));
        $randCitatP=$citatiP[$randIndexP];              
    }
    //echo $randCitatP; //obavezno VAN: da se u petlji ne bi kalemili jedan na drugi

    for($i=0;$i<(count($arrayP)-1);$i++){
        if($arrayP[$i]==$randCitatP){            
            $randAutorP=$arrayP[$i+1];                       
            break;                 
        }               
    }
    //echo $randAutorP;
    //fclose($myfile);
?>

<!-- -----------------------------------------LJUBAV---------------------------------------- -->
<?php
    $filePathLj=__DIR__."/txt/ljubav.txt";
    $myFileLj=fopen($filePathLj,"r");
    if ($myFileLj) {
        $arrayLj = explode("\n", fread($myFileLj, filesize($filePathLj)));
    }
    
    for($i=0;$i<count($arrayLj);$i++){
        if($i%2==0){
            $citatiLj[]=$arrayLj[$i];
        }
    }
    for($i=0;$i<count($citatiLj);$i++){
        $randIndexLj=rand(0,count($citatiLj)-1);
        $randCitatLj=$citatiLj[$randIndexLj];
    }
    //echo $randCitatLj;
    for($i=0;$i<count($arrayLj)-1;$i++){
        if($arrayLj[$i]==$randCitatLj){
            $randAutorLj=$arrayLj[$i+1];
            break;
        }
    }
    //echo $randAutorLj;
    //fclose($myfile);
?>

<!-- -----------------------------------------ZDRAVLJE---------------------------------------- -->
<?php
    $filePathZ=__DIR__.("/txt/zdravlje.txt");
    $myFileZ=fopen($filePathZ,"r");
    if ($myFileZ) {
        $arrayZ = explode("\n", fread($myFileZ, filesize($filePathZ)));
    }

    for($i=0;$i<count($arrayZ);$i++){
        if($i%2==0){
            $citatiZ[]=$arrayZ[$i];
        }
    }
    for($i=0;$i<count($citatiZ);$i++){
        $randIndexZ=rand(0,count($citatiZ)-1);
        $randCitatZ=$citatiZ[$randIndexZ];
    }
    //echo $randCitatZ;
    for($i=0;$i<count($arrayZ)-1;$i++){
        if($arrayZ[$i]==$randCitatZ){
            $randAutorZ=$arrayZ[$i+1];
            break;
        }
    }
    //echo $randAutorZ;
?>

<!-- -----------------------------------------4u1---------------------------------------- -->
<?php
    for($i=0;$i<count($arrayM);$i++){
        $arrayAll[]=$arrayM[$i];
    }
    for($i=0;$i<count($arrayP);$i++){
        $arrayAll[]=$arrayP[$i];
    }
    for($i=0;$i<count($arrayLj);$i++){
        $arrayAll[]=$arrayLj[$i];
    }
    for($i=0;$i<count($arrayZ);$i++){
        $arrayAll[]=$arrayZ[$i];
    }
    for($i=0;$i<count($arrayAll);$i++){
        //echo "<p>$arrayAll[$i]</p>";
        if($i%2==0){
            $citatiSvi[]=$arrayAll[$i];
        }
    }    
    for($i=0;$i<count($citatiSvi);$i++){
        $randIndex=rand(0,count($citatiSvi)-1);
        $randCitat=$citatiSvi[$randIndex];
    }
    //echo $randCitat;    
    for($i=0;$i<count($arrayAll)-1;$i++){
        if($arrayAll[$i]==$randCitat){
            $randAutor=$arrayAll[$i+1];
            break;
        }
    }
    //echo $randAutor;
?>
<?php
    //Logika se zasniva na sledecem:
    // 1. ucita se txt i od njega napravi niz $array*
    // 2. prodje se po $array* , i na osnovu parnih indeksa, napravi novi niz $citati* koji ne sadrzi autore
    // 3. prodje se po $citati* , i odredi se rand(0,count($citati*)-1), tj definise se random citat $randCitat*
    // 4. jos jednom se prodje po $array* (direktno ucitanom iz txt) da bi se doslo do autora $randAutor* prethodno odredjenog random citata 
    // (autor ima sledeci, odnosno $i+=1 indeks u odnosu na njegov citat)
    // 5. za kraj, na osnovu sva cetiri txt, tj. nizova $array* kreiran je novi niz $arrayAll
    // (za dobijanje $randCitat i $randAutor primenjen je isti postupak).
?>

    <!-- -----------------------------------------PHP---------------------------------------- -->
    
    <!-- main section -->
    <div class="container p-5 my-5 bg-dark text-white">
        <div class="row">
            <div class="col-12">
                <cite id='id_M'><?php echo $randCitat;?></cite>
                <p><?php echo $randAutor;?></p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <p><?php echo date('H:i A'); ?></p>
                </div>
            </div>
        </div>
    </footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>