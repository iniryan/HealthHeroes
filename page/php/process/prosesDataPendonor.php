<?php

require '../class/DataPendonor.php';

$nama = $_POST['NamaLengkap'];
$date = $_POST['DateOfBirth'];
$TTL = $_POST['KotaKelahiran'];
$alamat = $_POST['alamatRumah'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$nik = $_POST['NIK'];
$kk = $_POST['KK'];
$kota = $_POST['kota'];
$gender = $_POST['gender'];

$dataPendonor = new DataPendonor($nama, $date, $TTL, $alamat, $phone, $email, $nik, $kk, $kota, $gender);
$dataPendonor->donation();
$url = 'http://localhost/HealthHeroes';
header('Location: '.$url.'/page/php/home.php');
// echo"<pre>";
// var_dump($kategori);
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