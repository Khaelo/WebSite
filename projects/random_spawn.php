<?php
$bdd = new PDO('mysql:host=127.0.0.1; dbname=', '', '');

$reqid = $bdd->query('SELECT COUNT(id) as countid FROM spawn');
$numberid = $reqid->fetch();
$getid = rand(1, $numberid['countid']);
$reqspawn = $bdd->prepare('SELECT * FROM spawn WHERE id = ?');
$reqspawn->execute(array($getid));
$spawninfo = $reqspawn->fetch();
?>