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
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Register to our site</h1>
    <form action="register.php" method="POST">
        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>">
            <span class=error>* <?php echo $usernameError; ?></span>
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" value="">
            <span class=error>* <?php echo $passwordError; ?></span>
        </p>
        <p>
            <label for="retype">Retype password:</label>
            <input type="password" name="retype" id="retype" value="">
            <span class=error>* <?php echo $retypeError; ?></span>
        </p>
        <p>
            <input type="submit" value="Register me!">
        </p>

    </form>
    
</body>
</html>