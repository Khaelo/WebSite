<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Luca BRUNO CV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Crazy developer, student at Ynov Bordeaux!">
    <meta name="keywords" content="HTML,CSS,JavaScript,C,Python,CV,developer">
    <meta name="author" content="Luca `Khaelo` Bruno">
    <meta name="robots" content="all">
    <!-- styles -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="font/css/fontello.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Add jQuery library -->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>
        $(document).ready(function() {
            $(".fancybox-thumb").fancybox({
                helpers	: {
                    title	: {
                        type: 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(1,1,1,0.65)'
                        }
                    }
                }
            });
        });
    </script>
    </head>
    <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href=".."><img src="img/user.jpg"/></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="#profile"><i class="icon-user"></i> Profile</a></li>
            <li><a href="#skills"><i class="icon-trophy"></i> Skills</a></li>
            <li><a href="#work"><i class="icon-picture"></i> Work</a></li>
            <li><a href="#resume"><i class="icon-doc-text"></i> Resume</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix">
      <!--Profile container-->
      <div id="profile" class="container">
        <div class="span3"> <img src="img/mini.png"> </div>
        <div class="span5">
          <h1>Bruno Luca</h1>
          <h3>Etudiant en programmation</h3>
          <p> Bonjour je m'appelle Luca Bruno, j'ai 20 ans, je suis passionné d'informatique, j'ai commencé mes études en 2018 chez Ynov Informatique à Bordeaux. </p>
          <a href="##myModal" role="button" data-toggle="modal" class="hire-me"><i class="icon-paper-plane"></i>Me Contacter</a>
          <div class="row social">
            <ul class="social-icons">
              <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
              <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
              <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
              <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
              <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
              <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>
            </ul>
          </div>
        </div>
        <!-- Social Icons -->
        <!-- END: Social Icons -->
      </div>
      <!--END: Profile container-->
      <!--Skills container-->
      <div id="skills" class="container">
        <h2>My Skills</h2>
        <div class="row">
          <div class="span3">
            <div class="ps">
              <h3>Ps</h3>
            </div>
          </div>
          <div class="span5">
            <h3>Photoshop <span>50%</span></h3>
            <div class="expand-bg"> <span class="expand ps2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="ai">
              <h3>Ai</h3>
            </div>
          </div>
          <div class="span5">
            <h3>Illustrator <span>10%</span></h3>
            <div class="expand-bg"> <span class="expand ai2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="html">
              <h3>HTML5</h3>
            </div>
          </div>
          <div class="span5">
            <h3>HTML5 <span>75%</span></h3>
            <div class="expand-bg"> <span class="expand html2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="css">
              <h3>CSS3</h3>
            </div>
          </div>
          <div class="span5">
            <h3>CSS3 <span>45%</span></h3>
            <div class="expand-bg"> <span class="expand css2"> &nbsp; </span> </div>
          </div>
        </div>
      </div>
      <!--END: Skills container-->
      <!-- Works container -->
      <div id="work" class="container">
        <h2>My Work</h2>
        <ul class="work-images">
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/1.jpg" title="Image 01"><img src="img/1-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/2.jpg"><img src="img/2-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/3.jpg"><img src="img/3-thumb.jpg" /></a></div>
          </li>
        </ul>
        <ul class="work-images">
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/4.jpg"><img src="img/4-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/5.jpg"><img src="img/5-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/6.jpg"><img src="img/6-thumb.jpg" /></a></div>
          </li>
        </ul>
      </div>
      <!--END: Work container-->
      <!-- Resume container -->
      <div id="resume" class="container">
        <h2>My Resume</h2>
        <h3>You can download my resume for your reference and I hope that we will meet very soon! :)</h3>
        <div class="btn-center"> <a href="#" class="hire-me"><i class="icon-download"></i> Download Resume</a>
          <h2>125kb</h2>
        </div>
      </div>
      <!--END: Resume container-->
      <!-- Social Icons -->
      <div class="row social">
        <ul class="social-icons">
          <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
          <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
          <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
          <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
          <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
          <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>
        </ul>
      </div>
      <!-- END: Social Icons -->
    </div>
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left"><a href="https://khaelo.000webhostapp.com/">Bruno Lúca</a></p>
        <p class="pull-right"><a href="##myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <!-- Modal -->
    <?php
    include ('mail.php');
    ?>
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Me Contacter</h3>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          <input type="text" name="nom" placeholder="Your Name">
          <input type="email" name="mail" placeholder="Your Email">
          <input type="text" name="website" placeholder="Website (Optional)">
          <textarea rows="3" name="message" style="width:80%"></textarea>
          <br/>
          <input type="submit" class="btn btn-large" value="Submit" name="sendmail"/>
        </form>
          <?php
          if(isset($msg))
          {
              echo $msg;
          }
          ?>
      </div>
    </div>
    <!-- Scripts -->
    <script src="js/vertical-scroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    </body>
    </html>
