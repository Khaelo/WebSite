<?php
require "config/config.php";

//get_URLs
$getid = '1';
$requrl = $bdd->prepare('SELECT * FROM social WHERE id = ?');
$requrl->execute(array($getid));
$url = $requrl->fetch();

//get_Description
$getid = '1';
$reqdesc = $bdd->prepare('SELECT * FROM description WHERE id = ?');
$reqdesc->execute(array($getid));
$description = $reqdesc->fetch();

//get_CVs
$getid = '1';
$reqcv_1 = $bdd->prepare('SELECT * FROM cv WHERE id = ?');
$reqcv_1->execute(array($getid));
$cv_1 = $reqcv_1->fetch();

$getid = '2';
$reqcv_2 = $bdd->prepare('SELECT * FROM cv WHERE id = ?');
$reqcv_2->execute(array($getid));
$cv_2 = $reqcv_2->fetch();

$getid = '3';
$reqcv_3 = $bdd->prepare('SELECT * FROM cv WHERE id = ?');
$reqcv_3->execute(array($getid));
$cv_3 = $reqcv_3->fetch();

$getid = '4';
$reqcv_4 = $bdd->prepare('SELECT * FROM cv WHERE id = ?');
$reqcv_4->execute(array($getid));
$cv_4 = $reqcv_4->fetch();

//get_Diplomes
$getid = '1';
$reqdip_1 = $bdd->prepare('SELECT * FROM diplomes WHERE id = ?');
$reqdip_1->execute(array($getid));
$diplome_1 = $reqdip_1->fetch();

$getid = '2';
$reqdip_2 = $bdd->prepare('SELECT * FROM diplomes WHERE id = ?');
$reqdip_2->execute(array($getid));
$diplome_2 = $reqdip_2->fetch();
?>