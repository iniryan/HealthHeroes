<?php

$judul = $_POST['judulBerita'];
$thumb = $_POST['thumbnail'];
$kategori = $_POST['kategori'];
$berita = $_POST['isiBerita'];
$author = $_POST['author'];
$tanggal = $_POST['tanggalDibuat'];
$tag = $_POST['tag'];


echo $judul.'<br>';
echo $thumb.'<br>';
echo $kategori.'<br>';
echo $berita.'<br>';
echo $author.'<br>';
echo $tanggal.'<br>';
echo $tag.'<br>';

//get all form data
// $regForm = $_POST;
// var_dump($regForm);
?>