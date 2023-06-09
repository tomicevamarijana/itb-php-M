<?php
require_once 'connection.php';

//$errMsg=[];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ime=trim($_POST['ime']);
    $prezime=trim($_POST['prezime']);
    $email=trim($_POST['email']);
    $broj_telefona=trim($_POST['broj_telefona']);

    //validacija imena
    /*
    if(empty($ime)){
        $errMsg['ime']='Ime je obavezno polje';
    }
    elseif(preg_match("~[0-9]+~",$ime)){
        $errMsg['ime']='U polju ime nije dozvoljen unos cifara';
    }
    */

    //validacija prezimena
    //validacija email-a
    //validacija broja telefona

    /*
    if(count($errMSG)==0){
        //forma validna
        $q="INSERT INTO studenti VALUES ('".$ime."', '" . $prezime ."','" . $email . "','".$broj_telefona . "')";
        
    }
    */

    echo "<p>Uneli ste ime: $ime.</p>";
} //php server mora





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

    <title>Unos</title>
</head>
<body>

    <div class="container mt-5">
    <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Student: unos</h4>
                    </div> 
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Ime: </label>
                                <input type="text" name="ime" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Prezime: </label>
                                <input type="text" name="prezime" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email: </label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Broj telefona: </label>
                                <input type="text" name="broj_telefona" class="form-control">
                            </div>
                            <div class="float-end">
                                <button type="submit" class="btn btn-success">Sacuvaj</button>
                                <a href="index.php" class="btn btn-secondary">Otkazi</a>
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