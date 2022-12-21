<?php   

    require '../class/FormRS.php';

    $namaRS =  $_POST['namaRS'];
    $deskripsi =  $_POST['deskripsi'];
    $website =  $_POST['website'];
    $email =  $_POST['email'];
    $notelp =  $_POST['notelp'];
    $alamat =  $_POST['alamat'];
    $provinsi =  $_POST['provinsi'];
    $kota =  $_POST['kota'];
    $kecamatan =  $_POST['kecamatan'];
    $kelurahan =  $_POST['kelurahan'];
    $kodepos =  $_POST['kodepos'];
    $fasilitas =  $_POST['fasilitas'];

    $formRS = new FormRS($namaRS, $alamat, $fasilitas, $deskripsi, $website, $email, $notelp, $provinsi, $kota, $kecamatan, $kelurahan, $kodepos);
    // echo"<pre>";
    // var_dump($formRS);
    // echo"</pre>";
    $formRS->addRumahSakit();
    $url = 'http://localhost/HealthHeroes';
    header('Location: '.$url.'/page/php/home.php');

    // echo $namaRS.'<br>';
    // echo $deskripsi.'<br>';
    // echo $website.'<br>';
    // echo $email.'<br>';
    // echo $notelp.'<br>';
    // echo $alamat.'<br>';
    // echo $provinsi.'<br>';
    // echo $kota.'<br>';
    // echo $kecamatan.'<br>';
    // echo $kelurahan.'<br>';
    // echo $kodepos.'<br>';
    // echo $fasilitas.'<br>';

    // $formRS = $_POST;
    // var_dump($formRS);

    ?>

