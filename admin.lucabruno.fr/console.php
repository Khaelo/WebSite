<?php
session_start();

if(isset($_SESSION['id']) AND $_SESSION['mail']) {
    ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <title>Console Administration - LucaBruno.fr</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar fixed-top navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Console Administration</a>
    <form class="form-inline">
        <a href="logout"><input class="form-control mr-sm-2" type="button" value="Deconnexion"></a>
    </form>
</nav>

</body>
</html>
    <?php
}else {
    header('Location: ..');
}
?>