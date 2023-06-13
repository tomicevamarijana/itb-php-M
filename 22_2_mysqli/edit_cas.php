<?php
require_once 'connection.php';

//niz eror poruka,
//asoc niz, kljucevi su ime, prezime..
$errMsg=[];
$ime=$prezime=$email=$broj_telefona=""; //zbog value u inputu labeli

if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET['id'])){
    $id=$_GET['id'];
    $q="SELECT * FROM `studenti` WHERE `id`=".$id . "; ";
    $r=$conn->query($q);
    if($r->num_rows==1){
        $student=$r->fetch_assoc();
        $ime=$student['ime'];
        $prezime=$student['prezime'];
        $email=$student['email'];
        $broj_telefona=$student['broj_telefona'];
    }
    else{
        echo "<p>Doslo je do greske (izmena).</p>";
    }

}


//hvatanje iz POST
//kad se klikne na dugme sacuvaj, da, jesmo dosli preko POST
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ime=trim($_POST['ime']);
    $prezime=trim($_POST['prezime']);
    $email=trim($_POST['email']);
    $broj_telefona=trim($_POST['broj_telefona']);

    //validacija unetih podataka pre unosa u bazu
    //1.validacija imena
    if(empty($ime)){
        $errMsg['ime']='Ime je obavezno polje.';
    }
    elseif(preg_match("~[0-9]+~",$ime)){
        $errMsg['ime']='Nije dozvoljen unos cifara.';
    }
    // moze strlen, maks da bude maks duzina VARCHAR iz baze
    //2.validacija prezimena
    if(empty($prezime)){
        $errMsg['prezime']='Prezime je obavezno polje.';
    }
    elseif(preg_match("~[0-9]+~",$prezime)){
        $errMsg['prezime']='Nije dozvoljen unos cifara.';
    }

    //3.validacija emaila
    if(!empty($email)){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errMsg['email']='Polje email nije validno.';
        }// jer ako je prazno, moze, polje je null
    }
    
    //4.validacija broja telefona
    if(!empty($broj_telefona)){
        if(!preg_match("/^[0-9]*$/",$broj_telefona)){
            $errMsg['broj_telefona']='Polje broj telefona nije validno';
        }
    }
    

    //pitam da li je niz gresaka prazan
    /* //moje, sa casa-vidi zasto nije dobro pa obrisi
    if(count($errMsg)==0){
        //FORMA VALIDNA, UNESI PODATAK U BAZU
        $q="INSERT INTO `studenti` VALUES('".$ime."', '".$prezime."', '".($email?$email:null)."', '".($broj_telefona?$broj_telefona:null)."')";
        $r=$conn->query($q);
        if($r){
            //uspesno dodat student            
        }
        else{
            //doslo je do greske
        }
    }
    */
    
    //FORMA VALIDNA UPISI PODATKE U BAZU-betino, ispravila u medjuvremenu
    if(count($errMsg)==0){
        

        /*
        $q = "INSERT INTO `studenti` (`ime`, `prezime`, `email`, `broj_telefona`) VALUES 
        ('" . $ime . "', '" . $prezime . "', " 
        . ($email?("'".$email."'"):"null") . ", " 
        . ($broj_telefona?("'".$broj_telefona."'"):"null") . ");";
        */

        $r = $conn->query($q);
        if($r){
            //uspesno dodat student prebaci ga na index.php
            header("location:index.php");
            //ovo znaci da me vraca na index.php,redirekcija iz php
        }else{
            //doslo je do greske
            echo "<p>Doslo je do greske.</p>";
        }
    }else{
        var_dump($errMsg);
    }
     



    echo "<p>Uneli ste ime: $ime.</p>";

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Izmena</title>
</head>
<body>

    <div class="container mt-5">
    <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Student: izmena</h4>
                    </div>
                    <div class="card-body">
                    <form action="#" method="post"> <!-- forma salje podatke istoj stranici POST metodom -->
                            <div class="form-group mb-3">
                                <label>Ime:</label>
                                <input type="text" name="ime" class="form-control <?php if(isset($errMsg['ime'])) echo "is-invalid"; ?>"
                                value="<?php echo $ime;?>"
                                > <!-- vrednost atributa NAME mora da bude jedinstveno na nivo forme jer je to klju u asocijativnom nizu kada se preuzmu parametri -->
                                <span class="invalid-feedback"><?php if(isset($errMsg['ime'])) echo $errMsg['ime']; ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Prezime:</label>
                                <input type="text" name="prezime" class="form-control <?php if(isset($errMsg['prezime'])) echo "is-invalid"; ?>"
                                value="<?php echo $prezime;?>">
                                <span class="invalid-feedback"><?php if(isset($errMsg['prezime'])) echo $errMsg['prezime']; ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Email:</label>
                                <input type="text" name="email" class="form-control <?php if(isset($errMsg['email'])) echo "is-invalid"; ?>"
                                value="<?php echo $email;?>">
                                <span class="invalid-feedback"><?php if(isset($errMsg['email'])) echo $errMsg['email']; ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Broj telefona:</label>
                                <input type="text" name="broj_telefona" class="form-control <?php if(isset($errMsg['broj_telefona'])){ echo "is-invalid"; }?>"
                                value="<?php echo $broj_telefona;?>">
                                <span class="invalid-feedback"><?php if(isset($errMsg['broj_telefona'])) echo $errMsg['broj_telefona']; ?></span>
                            </div>
                            <div class="float-end mb-3">
                                <button type="sumbit" class="btn btn-success"> Sacuvaj </button> <!-- Unutar forme moramo da imamo submit dugme na ciji se klik zapravo salju podaci -->
                                <a href="index.php" class="btn btn-secondary"> Otkazi </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    </div>
    
</body>
</html>