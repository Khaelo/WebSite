<?php
include "random_spawn.php";
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>Spawn - Random</title>
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>
<body>
<style>
    html {
        overflow-y: hidden;
    }
    body{
        background: #4B79A1;
        background: -webkit-linear-gradient(to right, #283E51, #4B79A1);
        background: linear-gradient(to right, #283E51, #4B79A1);
        margin-top: 50vh;
        transform: translateY(-50%);
    }
    .texti {
        font-family: 'Bowlby One', cursive;
    }
</style>
<h3 class="text-center texti"><a href="/new_spawn" class="text-decoration-none text-success">Créer un nouveau Spawn !</a></h3>
<p class="text-center texti text-info">Tu as Spawn à: <?php echo htmlspecialchars($spawninfo['nom']) ?></p>
<img class="img-fluid rounded mx-auto d-block " src="<?php echo htmlentities($spawninfo['url_img']) ?>" alt="<?php echo htmlspecialchars($spawninfo['nom']) ?>"/><br/>
<h3 class="text-center texti"><a href=".." class="text-decoration-none text-warning">Charger un nouveau Spawn !</a></h3>
<!-- Footer -->
<footer class="page-footer font-small blue">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://lucabruno.fr/"> LucaBruno.fr</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>