<?php
include("script_login.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <!-- styles -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../font/css/fontello.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Add jQuery library -->
    <script type="text/javascript" src="../js/jquery-1.10.1.min.js"></script>
</head>
<body>
<h1 class="text-center">Login</h1>
<div class="login-body">
    <form method="POST" action="">
        <input type="text" name="nom" placeholder="Your Name">
        <input type="email" name="mail" placeholder="Your Email">
        <input type="text" name="website" placeholder="Website (Optional)">
        <textarea rows="3" name="message" style="width:80%"></textarea>
        <br/>
        <input type="submit" class="btn btn-large" value="Submit" name="sendmail"/>
    </form>
</div>
</body>
</html>
