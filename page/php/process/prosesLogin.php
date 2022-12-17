<?php 

require '../class/User.php';

$email = $_POST['email'];
$pass = $_POST['password'];
$loginUser = new User($email, '', '', $pass, '', '');
$loginUser->login();

?>