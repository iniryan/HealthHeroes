<?php

require '../class/Volunteer.php';

$nama = $_POST['FirstName'];
$kota = $_POST['kota'];
$date = $_POST['date'];
$gender = $_POST['jenis_kelamin'];
$alamat = $_POST['AlamatRumah'];
$asal = $_POST['Kota'];
$nohp = $_POST['No_Hp'];
$email = $_POST['Email'];
$nik = $_POST['nik'];
$nokk = $_POST['no_kk'];

$volunteer = new Volunteer($nama, $kota, $date, $gender, $alamat, $asal, $nohp, $email, $nik, $nokk);
$volunteer->becomeVolunteer();
$url = 'http://localhost/HealthHeroes';
header('Location: '.$url.'/page/php/home.php');
// echo"<pre>";
// var_dump($volunteer);
// echo"</pre>";

// echo $nama.'<br>';
// echo $kota.'<br>';
// echo $date.'<br>';
// echo $gender.'<br>';
// echo $alamat.'<br>';
// echo $asal.'<br>';
// echo $nohp.'<br>';
// echo $email.'<br>';
// echo $nik.'<br>';

?>