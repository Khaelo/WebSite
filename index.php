<?php include ("script_realtime_user.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">


    <title>Luca Bruno - Bienvenue</title>

    <meta name="description" content="Crazy developer, student at Ynov Bordeaux!">
    <meta name="keywords" content="HTML,CSS,JavaScript,C,Python,CV,developer">
    <meta name="author" content="Luca `Khaelo` Bruno">
    <meta name="robots" content="all">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Lúca Bruno</span>
        <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#education">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact Me</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-100">
            <h1 class="mb-0">Lúca
                <span class="text-primary">Bruno</span>
            </h1>
            <div class="subheading mb-5">7 Rue de Périgueux · 33700, Mérignac · 07 68 47 40 18 ·
                <a href="mailto:luca.bruno@ynov.com">luca.bruno@ynov.com</a>
            </div>
            <p class="lead mb-5">Bonjour je m'appelle Luca Bruno, j'ai <?php include ('info.php'); echo $mon_age; ?> ans, je suis passionné d'informatique, j'ai commencé mes études en 2018 chez Ynov Informatique à Bordeaux.</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/l%C3%BAca-bruno/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/Khaelo" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/_Khaelo_" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
        <div class="w-100">
            <h2 class="mb-5">Experience</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Equipier polyvalent</h3>
                    <div class="subheading mb-3">KFC</div>
                    <p>Préparation alimentaire et prise de commandes.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">Juillet 2018 - Aujourd'hui</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Technicien réseau</h3>
                    <div class="subheading mb-3">Seekat</div>
                    <p>Déploiement de réseaux spécifiques à l'évenementiel, streaming et captation vidéo.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">Juin 2017 - Janvier 2018</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Technicien réseau (stage)</h3>
                    <div class="subheading mb-3">Seekat</div>
                    <p>Déploiement de réseaux spécifiques à l'évenementiel, streaming et captation vidéo.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">Janvier 2017 - Février 2017</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                <div class="resume-content">
                    <h3 class="mb-0">Technicien réseau (stage)</h3>
                    <div class="subheading mb-3">Servitec</div>
                    <p>Déploiement de systèmes réseau et installation de serveurs.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">Mars 2016 - Avril 2016</span>
                </div>
            </div>

        </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
            <h2 class="mb-5">Education</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Ynov Informatique</h3>
                    <div class="subheading mb-3">Bachelor 1 - Informatique</div>
                    <p>Formation en cours</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">Septembre 2018 - Aujourd'hui</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                <div class="resume-content">
                    <h3 class="mb-0">Prè de Cordy</h3>
                    <div class="subheading mb-3">Bac Professionnel Systèmes  Électroniques et Numériques.</div>
                    <p>Formation achevée (Bac obtenu)</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">Septembre 2015 - Juin 2017</span>
                </div>
            </div>

        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
        <div class="w-100">
            <h2 class="mb-5">Skills</h2>

            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item">
                    <i class="fab fa-html5"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-css3-alt"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-js-square"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-php"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-bootstrap"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-node-js"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-python"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-centos"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-linux"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-npm"></i>
                </li>
            </ul>

            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Responsive Design</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Cross Functional Teams</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Agile Development</li>
            </ul>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
        <div class="w-100">
            <h2 class="mb-5">Interests</h2>
            <p>En plus de suivre des études d'informatique, la plupart de mon temps, je voyage, je tente de nouvelles expériences, pendant l'été, j'aime les sorties entre amis, les balades à cheval, faire du canoë et de l'escalade..</p>
            <p class="mb-0">Quand je suis forcé à être chez moi par le mauvais temps ou le froid, je regarde beaucoup de vidéo, séries et films, j'aime écouter de la musique (de tous les styles) et j'aime me détendre sur des jeux-vidéo, je vais aussi me documenter sur les nouvelles avancées technologique... </p>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
        <div class="w-100">
            <h2 class="mb-5">Awards &amp; Certifications</h2>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    SST</li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Test 2</li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    1<sup>st</sup>
                    Test 3</li>
            </ul>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="contact">
        <div class="w-100">
            <?php
            include ('mail.php');
            ?>
            <form method="POST" action="">
                <input type="text" name="nom" placeholder="Your Name">
                <input type="email" name="mail" placeholder="Your Email">
                <input type="text" name="website" placeholder="Website (Optional)">
                <textarea rows="3" name="message" style="width:80%"></textarea>
                <br/>
                <input type="submit" class="btn btn-large" value="Submit" name="sendmail"/>
                <?php
                if(isset($msg)) {
                    echo $msg;
                }
                ?>
            </form>
        </div>
    </section>

</div>

<!-- Footer
  <div class="footer">
      <div class="container">
          <p class="pull-left"><a href="https://khaelo.000webhostapp.com/">Bruno Lúca</a></p>
          <p class="pull-right"><a href="##myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
          <p class="text-center" id="realtime">Actuellement il y a <?php /*echo $user_nbr; ?> utilisateur<?php if($user_nbr != 1) {echo "s";} */?> sur le site.</p>
      </div>
  </div>
  -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/resume.min.js"></script>

</body>

</html>
