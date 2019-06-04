<?php
require "config/config.php";

//Social
//Linkedin
if(isset($_POST['social_linkedin'])) {
    if(isset($_POST['linkedin']) AND !empty($_POST['linkedin']) AND $_POST['linkedin']) {
        $url_linkedin = htmlspecialchars($_POST['linkedin']);
        $insert_url_linkedin = $bdd->prepare("UPDATE social SET linkedin = ? WHERE id = 1");
        $insert_url_linkedin->execute(array($url_linkedin));
        header('Location: console');
    }
    else {
        header('Location: console');
    }
}

//Github
if(isset($_POST['social_github'])) {
    if(isset($_POST['github']) AND !empty($_POST['github']) AND $_POST['github']) {
        $url_github = htmlspecialchars($_POST['github']);
        $insert_url_github = $bdd->prepare("UPDATE social SET github = ? WHERE id = 1");
        $insert_url_github->execute(array($url_github));
        header('Location: console');
    }
    else {
        header('Location: console');
    }
}

//Twitter
if(isset($_POST['social_twitter'])) {
    if(isset($_POST['twitter']) AND !empty($_POST['twitter']) AND $_POST['twitter']) {
        $url_twitter = htmlspecialchars($_POST['twitter']);
        $insert_url_twitter = $bdd->prepare("UPDATE social SET twitter = ? WHERE id = 1");
        $insert_url_twitter->execute(array($url_twitter));
        header('Location: console');
    }
    else {
        header('Location: console');
    }
}

//Facebook
if(isset($_POST['social_facebook'])) {
    if(isset($_POST['facebook']) AND !empty($_POST['facebook']) AND $_POST['facebook']) {
        $url_facebook = htmlspecialchars($_POST['facebook']);
        $insert_url_facebook = $bdd->prepare("UPDATE social SET facebook = ? WHERE id = 1");
        $insert_url_facebook->execute(array($url_facebook));
        header('Location: console');
    }
    else {
        header('Location: console');
    }
}

//Instagram
if(isset($_POST['social_instagram'])) {
    if(isset($_POST['instagram']) AND !empty($_POST['instagram']) AND $_POST['instagram']) {
        $url_instagram = htmlspecialchars($_POST['instagram']);
        $insert_url_instagram = $bdd->prepare("UPDATE social SET instagram = ? WHERE id = 1");
        $insert_url_instagram->execute(array($url_instagram));
        header('Location: console');
    }
    else {
        header('Location: console');
    }
}

//get_URLs
$getid = '1';
$requrl = $bdd->prepare('SELECT * FROM social WHERE id = ?');
$requrl->execute(array($getid));
$url = $requrl->fetch();

//Description
//Short
if(isset($_POST['short_description'])) {
    if(isset($_POST['description_sh']) AND !empty($_POST['description_sh']) AND $_POST['description_sh']) {
        $sh_desc = htmlspecialchars($_POST['description_sh']);
        $desc_lenght = strlen($sh_desc);
        if($desc_lenght <= 255) {
            $update_sh_desc = $bdd->prepare("UPDATE description SET short = ? WHERE id = 1");
            $update_sh_desc->execute(array($sh_desc));
            header('Location: console');
        } else {
            $error_desc = "<p class='text-danger'>Description trop longue (max 255 caractères)</p>";
        }
    }
}

//Long
if(isset($_POST['long_description'])) {
    if(isset($_POST['description_lg_1']) AND $_POST['description_lg_1'] OR isset($_POST['description_lg_2']) AND $_POST['description_lg_2']) {
        $lg_desc_1 = htmlspecialchars($_POST['description_lg_1']);
        $lg_desc_2 = htmlspecialchars($_POST['description_lg_2']);
        $update_desc_lg = $bdd->prepare("UPDATE description SET longue_1 = ?, longue_2 = ? WHERE id = 1");
        $update_desc_lg->execute(array($lg_desc_1, $lg_desc_2));
        header('Location: console');
    } else {
        header('Location: console');
    }
}

//get Description
$getid = '1';
$reqdesc = $bdd->prepare('SELECT * FROM description WHERE id = ?');
$reqdesc->execute(array($getid));
$description = $reqdesc->fetch();

//CV
foreach($_POST['num_id_cv'] as $get_id_cv) {
    if (isset($_POST['cv'])) {
        if (isset($_POST['poste']) AND !empty($_POST['poste']) AND $_POST['poste'] AND isset($_POST['nom_entreprise']) AND !empty($_POST['nom_entreprise']) AND $_POST['nom_entreprise'] AND isset($_POST['description']) AND !empty($_POST['description']) AND $_POST['description'] AND isset($_POST['dates']) AND !empty($_POST['dates']) AND $_POST['dates']) {
            $cv_poste = htmlspecialchars($_POST['poste']);
            $cv_entreprise = htmlspecialchars($_POST['nom_entreprise']);
            $cv_description = htmlspecialchars($_POST['description']);
            $cv_dates = htmlspecialchars($_POST['dates']);
            $update_cv = $bdd->prepare("UPDATE cv SET poste = ?, nom_entreprise = ?, description = ?, dates = ? WHERE id = ?");
            $update_cv->execute(array($cv_poste, $cv_entreprise, $cv_description, $cv_dates, $get_id_cv));
            header('Location: console');
        } else {
            header('Location: console');
        }
    }
}

//get CV
$getid = '1';
$reqcv = $bdd->prepare('SELECT * FROM cv WHERE id = ?');
$reqcv->execute(array($getid));
$cv_1 = $reqcv->fetch();

//Diplomes
foreach($_POST['num_id_dip'] as $get_id_dip) {
    if (isset($_POST['diplome'])) {
        if (isset($_POST['ecole']) AND !empty($_POST['ecole']) AND $_POST['ecole'] AND isset($_POST['nom_diplome']) AND !empty($_POST['nom_diplome']) AND $_POST['nom_diplome'] AND isset($_POST['description']) AND !empty($_POST['description']) AND $_POST['description'] AND isset($_POST['dates']) AND !empty($_POST['dates']) AND $_POST['dates']) {
            $dip_ecole = htmlspecialchars($_POST['ecole']);
            $dip_diplome = htmlspecialchars($_POST['nom_diplome']);
            $dip_description = htmlspecialchars($_POST['description']);
            $dip_dates = htmlspecialchars($_POST['dates']);
            $update_dip = $bdd->prepare("UPDATE diplomes SET ecole = ?, nom_diplome = ?, description = ?, dates = ? WHERE id = ?");
            $update_dip->execute(array($dip_ecole, $dip_diplome, $dip_description, $dip_dates, $get_id_dip));
            header('Location: console');
        } else {
            header('Location: console');
        }
    }
}

//get Diplomes
$getid = '1';
$reqdip_1 = $bdd->prepare('SELECT * FROM diplomes WHERE id = ?');
$reqdip_1->execute(array($getid));
$diplome_1 = $reqdip_1->fetch();
?>

