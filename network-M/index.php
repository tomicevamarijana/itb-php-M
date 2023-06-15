<?php 
//require_once "connection.php"; 
    $poruka="";
    if(isset($_GET["p"]) && $_GET["p"]=="ok"){
        $poruka="You have succesfully registered, please login to continue.";
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Social network</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="success">
            <?php echo $poruka; ?>

        </div>

        <!-- slider, pozadninska slika-->
        <h1>Welcome to our Social Network!</h1>
        <p>New to our site? <a href="register.php">Register here</a> to access our site!</p>        
        <p>Already have the account? <a href="login.php">Login here</a> to continue to our site!</p>

    </body>


    </html>




