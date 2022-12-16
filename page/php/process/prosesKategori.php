<?php

require '../class/Kategori.php';

$name = $_POST['nama_kategori'];
$desc = $_POST['deskripsi_kategori'];

$kategori = new Kategori($name, $desc, date('Y-m-d'));
    echo"<pre>";
    var_dump($kategori);
    echo"</pre>";

?>