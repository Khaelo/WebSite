<?php
session_start();

if(isset($_SESSION['id']) AND $_SESSION['mail']) {
    require "get_update.php";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <title>Console Administration - LucaBruno.fr</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

</head>
<body id="top">
<!-- NavBar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="#top">
        <img src="img/panel.svg" width="30" height="30" class="d-inline-block align-top" alt="Console"> Console Administration
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#social">Social</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#description">Descriptions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cv">CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#diplome">Diplômes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://frweb2.oserv.fr:8443" target="_blank">Oserv Web</a>
            </li>
        </ul>
    </div>
    <form class="form-inline">
        <a href="logout"><input class="form-control mr-sm-2" type="button" value="Deconnexion"></a>
    </form>
</nav>

<div class="container-fluid p-0">

<!--Social Modification -->
<section class="p-3 p-lg-5 d-flex justify-content-center" id="social">
    <div class="container_b w-100 form-group" align="center">
        <h2 class="mb-5">Social</h2>
        <form method="POST" action="" class="form-group">
            <div class="form-group mx-sm-3 mb-2">
                <label for="url_linkedin"></label>
                <input class="input-group-text" type="url" name="linkedin" placeholder="URL Linkedin" id="url_linkedin"/>
            </div>
            <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier URL Linkedin" name="social_linkedin"/>
        </form>
        <div class="social-icons">
            Test Linkedin: <a href="<?php echo $url['linkedin']?>" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <form method="POST" action="" class="form-group">
            <div class="form-group mx-sm-3 mb-2">
                <label for="url_github"></label>
                <input class="input-group-text" type="url" name="github" placeholder="URL Github" id="url_github"/>
            </div>
            <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier URL Github" name="social_github"/>
        </form>
        <div class="social-icons">
            Test Github: <a href="<?php echo $url['github']?>" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <form method="POST" action="" class="form-group">
            <div class="form-group mx-sm-3 mb-2">
                <label for="url_twitter"></label>
                <input class="input-group-text" type="url" name="twitter" placeholder="URL Twitter" id="url_twitter"/>
            </div>
            <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier URL Twitter" name="social_twitter"/>
        </form>
        <div class="social-icons">
            Test Twitter: <a href="<?php echo $url['twitter']?>" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
        <form method="POST" action="" class="form-group">
            <div class="form-group mx-sm-3 mb-2">
                <label for="url_facebook"></label>
                <input class="input-group-text" type="url" name="facebook" placeholder="URL Facebook" id="url_facebook"/>
            </div>
            <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier URL Facebook" name="social_facebook"/>
        </form>
        <div class="social-icons">
            Test Facebook: <a href="<?php echo $url['facebook']?>" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
        <form method="POST" action="" class="form-group">
            <div class="form-group mx-sm-3 mb-2">
                <label for="url_instagram"></label>
                <input class="input-group-text" type="url" name="instagram" placeholder="URL Instagram" id="url_instagram"/>
            </div>
            <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier URL Instagram" name="social_instagram"/>
        </form>
        <div class="social-icons">
            Test Instagram: <a href="<?php echo $url['instagram']?>" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</section>

    <hr class="m-0">
<!--Modification Description-->
<section class="p-3 p-lg-5 d-flex justify-content-center" id="description">
    <div class="container_b w-100 form-group" align="center">
        <h2 class="mb-5">Descriptions</h2>
        <div class="list-inline-item">
            Description courte:
            <p><?php echo $description['short']?></p>
            <form method="POST" action="" class="form-group">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="short_description">Description courte!</label>
                    <textarea class="input-group-text" rows="3" name="description_sh" placeholder="Description (255 caractères max)" style="width:80%" id="short_description"></textarea>
                </div>
                <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier la Description Courte" name="short_description"/>
            </form>
            Description longue:
            <p><?php echo $description['longue_1']?></p><br />
            <p><?php echo $description['longue_2']?></p>
            <form method="POST" action="" class="form-group">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="long_description">Description longue 1 !</label>
                    <textarea class="input-group-text" rows="3" name="description_lg_1" placeholder="Description longue" style="width:80%" id="long_description"><?php echo $description['longue_1']?></textarea>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="long_description_2">Description longue 2 !</label>
                    <textarea class="input-group-text" rows="3" name="description_lg_2" placeholder="Description longue" style="width:80%" id="long_description_2"><?php echo $description['longue_2']?></textarea>
                </div>
                <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier la Description Longue" name="long_description"/>
            </form>
        </div>
    </div>
</section>

    <hr class="m-0">
<!-- Modification CV -->
<section class="p-3 p-lg-5 d-flex justify-content-center" id="cv">
    <div class="container_b w-100 form-group" align="center">
        <h2 class="mb-5">CV</h2>
        <form method="POST" action="" class="form-group">
            <p class="mb-0">Partie du CV à modifier: </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="num_id_cv[]" value="1" id="num_id_1"/>
                <label class="form-check-label" for="num_id_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="num_id_cv[]" value="2" id="num_id_2"/>
                <label class="form-check-label" for="num_id_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="num_id_cv[]" value="3" id="num_id_3"/>
                <label class="form-check-label" for="num_id_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="num_id_cv[]" value="4" id="num_id_4"/>
                <label class="form-check-label" for="num_id_4">4</label>
            </div><br/>
            <div class="form-group mx-sm-3 mb-2">
                <label for="poste">Poste:</label>
                <input class="input-group-text" type="text" name="poste" placeholder="Poste" id="poste"/>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="entreprise">Nom de l'entreprise:</label>
                <input class="input-group-text" type="text" name="nom_entreprise" placeholder="Nom de l'entreprise" id="entreprise"/>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="description_poste">Description:</label>
                <input class="input-group-text" type="text" name="description" placeholder="Description du poste" id="description_poste"/>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="dates">Dates:</label>
                <input class="input-group-text" type="text" name="dates" placeholder="Dates" id="dates"/>
            </div>
            <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier le CV !" name="cv"/>
        </form>
    </div>
</section>

    <hr class="m-0">
<!-- Modification Diplomes -->
<section class="p-3 p-lg-5 d-flex justify-content-center" id="diplome">
    <div class="container_b w-100 form-group" align="center">
        <h2 class="mb-5">Diplômes</h2>
        <form method="POST" action="" class="form-group">
            <p class="mb-0">Partie des Diplômes à modifier: </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="num_id_dip[]" value="1" id="num_id_1"/>
                <label class="form-check-label" for="num_id_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="num_id_dip[]" value="2" id="num_id_2"/>
                <label class="form-check-label" for="num_id_2">2</label>
            </div><br/>
            <div class="form-group mx-sm-3 mb-2">
                <label for="ecole">Ecole:</label>
                <input class="input-group-text" type="text" name="ecole" placeholder="Ecole" id="ecole"/>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="diplome">Nom du diplome:</label>
                <input class="input-group-text" type="text" name="nom_diplome" placeholder="Nom du diplome" id="diplome"/>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="description_diplome">Description:</label>
                <input class="input-group-text" type="text" name="description" placeholder="Description du displome" id="description_diplome"/>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="dates">Dates:</label>
                <input class="input-group-text" type="text" name="dates" placeholder="Dates" id="dates"/>
            </div>
            <input class="btn btn-sm btn-outline-success" type="submit" value="Modifier le Diplôme !" name="diplome"/>
        </form>
    </div>
</section>

</div>

</body>

</html>
    <?php
}else {
    header('Location: ..');
}
?>