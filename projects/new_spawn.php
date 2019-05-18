<?php
$bdd = new PDO('mysql:host=127.0.0.1; dbname=', '', '');

if(isset($_POST['newspawn'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $url_img = htmlentities($_POST['url_img']);
    if(!empty($nom) AND !empty($url_img)) {
        $nomlenght = strlen($nom);
        if($nomlenght <= 25) {
            $insertuser = $bdd->prepare("INSERT INTO spawn (nom, url_img) VALUES (?, ?)");
            $insertuser->execute(array($nom, $url_img));
            $error = "Le spawn a été créé.";
        }
        else {
            $error = "Votre nom est trop long (max 25 caractères).";
        }
    } else {
        $error_all = "Tous les champs (*) doivent être complétés !";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>TP2 - Créer un Spawn</title>
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
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
<h3 class="text-center texti"><a href=".." class="text-decoration-none text-dark">Retour à la sélection du Spawn !</a></h3><br/>
<div class="w-100 form-group" align="center">
    <form method="POST" action="">
        <div class="form-group col-md-6">
        <label for="nom" class="texti">Nom du Spawn*</label>
        <input class="input-group-text" type="text" name="nom" placeholder="Rentrez nom du spawn !" id="nom"/>
        </div>
        <div class="form-group col-md-6">
        <label for="url" class="texti">URL de l'image du spawn*</label>
        <input class="input-group-text" type="url" name="url_img" placeholder="URL image du spawn" id="url"/>
        </div>
        <input class="btn btn-lg btn-outline-success" type="submit" value="Enregistrer le nouveau spawn" name="newspawn"/><br/><br/>
        <?php echo "<p class='text-danger'>$error_all</p>"; if(!empty($nom) AND !empty($url_img)) {echo "<p class='text-success'>$error</p>";}?>
    </form>
</div>
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

