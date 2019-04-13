<?php
$bdd = new PDO('mysql:host=127.0.0.1; dbname=', '', '');

if(isset($_POST['formlogin'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $societe = htmlspecialchars($_POST['societe']);
    $pass1 = sha1($_POST['pass1']);
    $pass2 = sha1($_POST['pass2']);

    if(!empty($mail) AND !empty($mail2) AND !empty($pass1) AND !empty($pass2)) {
        $nomlenght = strlen($nom);
        $prenomlenght = strlen($prenom);
        if($nomlenght <= 32 AND $prenomlenght <= 32) {
            if($mail == $mail2) {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $bdd->prepare("SELECT * FROM profil WHERE email = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0){
                        if($pass1 == $pass2) {
                            $insertuser = $bdd->prepare("INSERT INTO profil (nom, prenom, email, societe, password) VALUES (?, ?, ?, ?, ?)");
                            $insertuser->execute(array($nom, $prenom, $mail, $societe, $pass1));
                            $error_good = "Votre compte à bien été créé ! <a href=\"connexion . php\">Me connecter</a>";
                        } else {
                            $error_bad = "Vos mots de passe sont différents !";
                        }
                    } else {
                        $error_bad = "Cette adresse mail est déjà utilisée !";
                    }
                } else {
                    $error_bad = "Votre adresse mail n'est pas valide !";
                }
            } else {
                $error_bad = "Vos adresses mail sont differentes !";
            }
        } else {
            $error_bad = "Votre nom ou prénom est trop long (max 32 caractères).";
        }
    } else {
        $error_bad = "Tous les champs (*) doivent être complétés !";
    }
}
?>
