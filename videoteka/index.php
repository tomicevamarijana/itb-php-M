<?php
    require_once 'create.php';
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

        <title>VIDEOTEKA</title>
    </head>
    <body>
    
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Review of movies in video library</h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Film</th>
                                        <th>Year</th>
                                        <th>Rating</th>
                                        <th>Director</th>
                                        <th>Genre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $q="SELECT filmovi.id AS idf, filmovi.naslov AS naslov, filmovi.godina AS god, filmovi.ocena AS oc, reziseri.ime AS imerez, reziseri.prezime AS prezimerez, zanrovi.naziv AS zanr
                                        FROM filmovi
                                        LEFT JOIN reziseri ON filmovi.reziser_id=reziseri.id
                                        LEFT JOIN film_zanr ON filmovi.id=film_zanr.film_id
                                        LEFT JOIN zanrovi ON film_zanr.zanr_id=zanrovi.id
                                        ORDER BY filmovi.naslov;";
                                        $res=$conn->query($q);
                                        if($res->num_rows==0){
                                            echo "<p>NEMA UNETIH FILMOVA</p>";
                                        }
                                        else{
                                            //prikaz selecta, svaki red je asoc niz
                                            while($row=$res->fetch_assoc()){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $row['idf']; ?> </td>
                                                    <td> <?php echo $row['naslov']; ?> </td>
                                                    <td> <?php echo $row['god']; ?> </td>
                                                    <td> <?php echo $row['oc']; ?> </td>
                                                    <td> <?php echo $row['imerez']. " ". $row['prezimerez']; ?> </td>
                                                    <td> <?php echo $row['zanr']; ?> </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="card-body">
                    <div class="card-header">
                            <h4>Review of movies in video library per year of publishing</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            $q2="SELECT DISTINCT godina FROM filmovi";
                            $god=[];
                            $res2=$conn->query($q2);
                            if($res2->num_rows==0){
                                echo "<p>NEMA UNETIH GODINA</p>";
                            }
                            else{
                                while($row=$res2->fetch_assoc()){
                                    $god[]=$row['godina'];                                            
                                }
                            }
                            // prolazak po razlicitim godinama
                            foreach($god as $g){
                                ?>
                                <table class='table table-bordered table-striped'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Film</th>
                                            <th>Year</th>
                                            <th>Rating</th>
                                            <th>Director</th>
                                            <th>Genre</th>
                                        </tr>
                                    </thead>
                                <?php
                                echo "<h6>Tabelar review of movies per year: " . $g . "</h6>";
                                $q3="SELECT filmovi.id AS idf, filmovi.naslov AS naslov, filmovi.godina AS god, filmovi.ocena AS oc, reziseri.ime AS imerez, reziseri.prezime AS prezimerez, zanrovi.naziv AS zanr
                                        FROM filmovi
                                        LEFT JOIN reziseri ON filmovi.reziser_id=reziseri.id
                                        LEFT JOIN film_zanr ON filmovi.id=film_zanr.film_id
                                        LEFT JOIN zanrovi ON film_zanr.zanr_id=zanrovi.id
                                        WHERE filmovi.godina=" . $g . " ORDER BY reziseri.ime;";
                                $res3=$conn->query($q3);
                                if($res3->num_rows==0){
                                    echo "<p>NEMA UNETIH FILMOVA ZA DATU GODINU</p>";
                                }
                                else{
                                    while($row=$res3->fetch_assoc()){                                    
                                        ?>
                                            <tr>
                                                <td> <?php echo $row['idf']; ?> </td>
                                                <td> <?php echo $row['naslov']; ?> </td>
                                                <td> <?php echo $row['god']; ?> </td>
                                                <td> <?php echo $row['oc']; ?> </td>
                                                <td> <?php echo $row['imerez']. " ". $row['prezimerez']; ?> </td>
                                                <td> <?php echo $row['zanr']; ?> </td>
                                            </tr>
                                            
                                        <?php                                        
                                    }
                                }
                                echo "</table>";
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>