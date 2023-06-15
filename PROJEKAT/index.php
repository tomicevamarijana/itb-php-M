<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citati</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <!-- -----------------------------------------PHP pocetak------------------------------------------>
    <!--ucitavanje slika za heder-->
    <?php        
        $arrayPh=[];
        for($i=1;$i<=3;$i++){            
            $arrayPh[]=rand(1,10);
        }
    ?>       

    <!-- -----------------------------------------MOTIVACIJA---------------------------------------- -->
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
    fclose($myfileM);
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
    //echo $randCitatP; 

    for($i=0;$i<(count($arrayP)-1);$i++){
        if($arrayP[$i]==$randCitatP){            
            $randAutorP=$arrayP[$i+1];                       
            break;                 
        }               
    }
    //echo $randAutorP;
    fclose($myfileP);
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
    fclose($myFileLj);
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
    fclose($myFileZ);
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
    <!-- -----------------------------------------PHP-kraj---------------------------------------- -->

    <header>

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/<?php echo $arrayPh[0]?>.jpg" alt="<?php echo $arrayPh[0]?>" >
                </div>
                <div class="carousel-item">
                    <img src="images/<?php echo $arrayPh[1]?>.jpg" alt="<?php echo $arrayPh[1]?>" >
                </div>
                <div class="carousel-item">
                    <img src="images/<?php echo $arrayPh[2]?>.jpg" alt="<?php echo $arrayPh[2]?>" >
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>    
    </header>    

      <!-- nav -->
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="btn navItem col-sm-3 navbar-dark bg-dark citatiNav">
                    <a class="btn btn-link btn-block collapsed" role="button" data-toggle="collapse" data-target="#posao" aria-expanded="false"
                        aria-controls="posao">
                        POSAO
                    </a>
                </div>
                <div class="btn navItem col-sm-3 navbar-dark bg-dark citatiNav">
                    <a class="btn btn-link btn-block collapsed" role="button" data-toggle="collapse" data-target="#zdravlje" aria-expanded="false"
                        aria-controls="zdravlje">
                        ZDRAVLJE
                    </a>
                </div>
                <div class="btn navItem col-sm-3 navbar-dark bg-dark citatiNav">
                    <a class="btn btn-link btn-block collapsed" role="button" data-toggle="collapse" data-target="#ljubav" aria-expanded="false"
                        aria-controls="ljubav">
                        LJUBAV
                </a>
                </div>
                <div class="btn navItem col-sm-3 navbar-dark bg-dark citatiNav">
                    <a class="btn btn-link btn-block collapsed" role="button" data-toggle="collapse" data-target="#motivacija" aria-expanded="false"
                        aria-controls="motivacija">
                        MOTIVACIJA
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- main -->

    <section>
        <div class="container-fluid">
            
            <div id="accordion">
                <div class="card">
                    <div id="random" class="collapse show" aria-labelledby="random" data-parent="#accordion">
                        <div class="card-body">
                            <cite><?php echo $randCitat;?></cite>
                            <p><?php echo $randAutor;?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="posao" class="collapse" aria-labelledby="posao" data-parent="#accordion">
                        <div class="card-body">
                            <cite><?php echo $randCitatP;?></cite>
                            <p><?php echo $randAutorP;?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="zdravlje" class="collapse" aria-labelledby="zdravlje" data-parent="#accordion">
                        <div class="card-body">
                            <cite><?php echo $randCitatZ;?></cite>
                            <p><?php echo $randAutorZ;?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="ljubav" class="collapse" aria-labelledby="ljubav" data-parent="#accordion">
                        <div class="card-body">
                            <cite><?php echo $randCitatLj;?></cite>
                            <p><?php echo $randAutorLj;?></p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div id="motivacija" class="collapse" aria-labelledby="mnotivacija" data-parent="#accordion">
                        <div class="card-body">
                            <cite><?php echo $randCitatM;?></cite>
                            <p><?php echo $randAutorM;?></p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    <!-- footer -->
    <footer class="fixed-bottom">
        <div class="container-fluid">
            <div class="row">                
                <div class="col-6" id="time">
                    <p><?php echo date('H:i A'); ?></p>
                </div>
                <div class="col-6" id="date">
                    <p><?php echo date('j\. F Y\.'); ?></p>                                      
                </div>                
            </div>
            <div class="row" >
                <div class="col-12" id=social>
                    If you liked our website, follow us for more:                    
                    <a href="https://github.com/tomicevamarijana" target=_blank><i class="fa fa-github" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/marijana-tomi%C4%87-754391242/"><i class="fa fa-linkedin" aria-hidden="true"> </i></a>
                    <a href="https://www.facebook.com/profile.php?id=100001498511315" target=_blank><i class="fa fa-facebook-official" aria-hidden="true"> </i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>