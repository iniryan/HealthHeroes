<?php

require '../class/PencariDonor.php';

$nama = $_POST['NamaLengkap'];
$date = $_POST['DateOfBirth'];
$TTL = $_POST['KotaKelahiran'];
$alamat = $_POST['AlamatRumah'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$nik = $_POST['NIK'];
$kk = $_POST['NoKartuKeluarga'];
$kota = $_POST['Kota'];
$gender = $_POST['jenis_kelamin'];

$pencariDonor = new PencariDonor($nama, $date, $TTL, $alamat, $phone, $email, $nik, $kk, $kota, $gender);
$pencariDonor->findDonation(); 
$url = 'http://localhost/HealthHeroes';
header('Location: '.$url.'/page/php/home.php');
// echo"<pre>";
// var_dump($pencariDonor);
// echo"</pre>";


// echo $nama;
// echo $date;
// echo $TTL;
// echo $alamat;
// echo $phone;
// echo $email;
// echo $nik;
// echo $kk;
// echo $kota;
// echo $gender;

?>