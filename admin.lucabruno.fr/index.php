<?php
session_start();

require "config/config.php";

if(isset($_POST['formconnexion'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = sha1($_POST['password']);
    if(!empty($pseudo) AND !empty($password)) {
        $requser = $bdd->prepare("SELECT * FROM admin WHERE pseudo = ? AND password = ?");
        $requser->execute(array($pseudo, $password));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: console");
        } else {
            $erreur = "Mauvais pseudo ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

if(isset($_SESSION['id']) AND $_SESSION['mail']) {
    header('Location: console');
}else {
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <title>Administration - LucaBruno.fr</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<h1 class="text-center">Connexion</h1>
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="connexion">
    <div class="w-100 form-group" align="center">
        <form method="POST" action="">
            <div class="form-group col-md-6 ">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="input-group-text" name="pseudo" placeholder="Pseudo" id="pseudo"
                       required/>
            </div>
            <div class="form-group col-md-6 ">
                <label for="password">Password</label>
                <input type="password" class="input-group-text" name="password" placeholder="Mot de passe"
                       id="password" required/>
            </div>
            <input type="submit" class="btn btn-lg btn-outline-success" name="formconnexion"
                   value="Se connecter !"/>
            <?php
            if (isset($erreur)) {
                echo '<p class="text-center text-danger">' . $erreur . "</p>";
            }
            ?>
        </form>
    </div>
</section>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
    <?php
}
?>