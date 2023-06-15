<?php
    if($_SERVER['REQUEST_METHOD']== 'GET' && isset($_GET['m'])){
        $poruka=$_GET['m'];
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Opops! An error occured!</h1>
    <div class="error">
        <?php echo $poruka;?>
    </div>
    Return to <a href="index.php"> home page</a>
    
</body>
</html>