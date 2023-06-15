<?php
    require_once "connection.php";
    require_once "validation.php";
    //var_dump($_SERVER); probaj
    //prvi put na stranicu se dolazi GET metodom!

    $usernameError="";
    $passwordError="";
    $retypeError="";

    //ovo je samo za prvi dolazak na formu, u username po defalut je root
    $username="";
    $password="";
    $retype="";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        //forma je poslata, treba pokupiti vrednosti polja
        $username=$_POST["username"];
        $password=$_POST["password"]; // u inputu name = ...
        $retype=$_POST["retype"];
        
        //1 validacija $username
        $usernameError=usernameValidation($username,$conn);
        //2 validacija $password
        $passwordError=passwordValidation($password);
        //3 validacija $retype
        $retypeError=passwordValidation($retype);
        if($password !== $retype){
            $retypeError="Y must enter two same passwords.";
        }

        // 4.1 dodati novog korisnika, ako je sve ok, izvrsiti INSERT INTO users
        if($usernameError=="" && $usernameError=="" && $retypeError==""){
            //pisacemo INSERT
            //lozinka prvo treba da se sifruje, hashuje,kriptuje
            $hash=password_hash($password,PASSWORD_DEFAULT);
            $q="INSERT INTO `users` (`username`, `password`) VALUES 
            ('$username','$hash');";

            if($conn->query($q)){
                //kreirali smo novog korisnika, vodi ga na stranicu za login
                header("Location: index.php?p=ok");
            }
            else{
                //header("Location: error.php?m=".);
                //ovo je ok za developera, korisnik ne treba da zna zasto nije prosao upit.
                //header("Location: error.php?".http_build_query(['m' => $conn->error]));
                header("Location: error.php?".http_build_query(['m' => "Greska kod kreiranja usera"]));
                //ovo omogucava poruku u linku, bez 
            }
        }
        // 4.2 ako postoji neko polje koje nije validno, ne raditi upit
        // vratiti korisnika na stranicu i prikazati poruke
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register new user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Register to our site</h1>
                    </div>
                    <div class="card-body">

                        <form action="register.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="username">Username: </label>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
                                <span class=error>* <?php echo $usernameError; ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password: </label>
                                <input type="password" name="password" id="password" class="form-control" value="">
                                <span class=error>* <?php echo $passwordError; ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="retype">Retype password:</label>
                                <input type="password" name="retype" id="retype" class="form-control" value="">
                                <span class=error>* <?php echo $retypeError; ?></span>
                            </div>
                            <div class="float-end">
                                <input type="submit" class="btn btn-success" value="Register me!">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>