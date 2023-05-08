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
            $arrayPh[]=rand(1,5);
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
        $filePath=__DIR__."/txt/motivacija.txt";
        $myfile = fopen($filePath, "r");
        //echo fread($myfile,filesize(__DIR__."/motivacija.txt")); //za ispis u jednom redu
        //echo fread($myfile,filesize($file)); // isto samo bez promenljive $path
        //fclose($myfile);
        if ($myfile) {
            $array = explode("\n", fread($myfile, filesize($filePath)));
        }
    
        for($i=0;$i<count($array);$i++){
            if($i%2==0){
                $citatiM[]=$array[$i];
                //echo "<p>$array[$i]</p>";
            }        
        }
        $randIndex=0; //ne mora
        //$randomCitatM=""; //ne mora
        for($i=0;$i<count($citatiM);$i++){
            $randIndex=rand(0,(count($citatiM)-1));
            $randomCitatM=$citatiM[$randIndex];              
        }
        echo $randomCitatM; //obavezno VAN: da se u petlji ne bi kalemili jedan na drugi
    
        for($i=0;$i<(count($array)-1);$i++){
            if($array[$i]==$randomCitatM){
                $i=$i+1;
                $randomPisac=$array[$i];
                //$randomPisac=$array[$i+1];
                //echo $randomPisac;
                break;                 
            }               
        }

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


    
    <!-- main section -->
    <div class="container p-5 my-5 bg-dark text-white">
        <div class="row">
            <div class="col-12">
                <cite id='id_M'><?php echo $randomCitatM;?></cite>
                <p><?php echo $randomPisac;?></p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <p>Datum i vreme</p>
                </div>
            </div>
        </div>
    </footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>