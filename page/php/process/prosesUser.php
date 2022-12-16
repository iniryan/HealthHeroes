<?php

require '../class/User.php';

$name = $_POST['fullname'];
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirm = $_POST['confirm-password'];

$signUser = new User($email, $name, $user, $pass, 'pengguna', date('Y-m-d'));
$signUser->signup();
// echo '<pre>';
// var_dump($signUser);
// echo '</pre>';
?>