<?php
$bdd = new PDO('mysql:host=127.0.0.1; dbname=cvweb', 'khaelo', 'Aspire@24');

$session_time = 15;
$actual_time = date("U");
$user_ip = $_SERVER['REMOTE_ADDR'];

$req_ip_exist = $bdd->prepare('SELECT * FROM online WHERE  user_ip = ?');
$req_ip_exist->execute(array($user_ip));
$ip_exist = $req_ip_exist->rowCount();

if($ip_exist == 0) {
    $add_ip =$bdd->prepare('INSERT INTO online(user_ip, time) VALUES (?, ?)');
    $add_ip->execute(array($user_ip, $actual_time));
} else {
    $update_ip = $bdd->prepare('UPDATE online SET time = ? WHERE user_ip = ?');
    $update_ip->execute(array($actual_time, $user_ip));
}

$session_delete_time = $actual_time - $session_time;

$delete_ip = $bdd->prepare('DELETE FROM online WHERE time < ?');
$delete_ip->execute(array($session_delete_time));

$show_user_nbr = $bdd->query('SELECT * FROM online');
$user_nbr = $show_user_nbr->rowCount();
?>
