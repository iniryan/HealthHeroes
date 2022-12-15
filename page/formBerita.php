<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Berita</title>
    <link rel="stylesheet" href="../assets/css/adamn.css">
</head>
<body>
    <div class="berita">
        <h1 class="CB">Create Berita</h1>
        <form method="post" id="CreateBerita" name="CreateBerita" action="prosesformberita.php">
            <p>Judul Berita</p>
                <input type="text" name="judulBerita" id="judulBerita" placeholder="" required="required" />
                <p>thumbnail</p>
                <div class="upload">
                    <div class="imgimg">
                        <img src="../assets/img/img-2.png" alt="">
                    </div>
                <input type="file" name="thumbnail" id="thumbnail" placeholder="" required="required" />
                </div>
                <a href="">Test</a>
            <p>Kategori</p>
                <input type="text" name="kategori" id="kategori" placeholder="" required="required" />
            <p>Isi Berita</p>
                <textarea name="isiBerita" id="isiBerita" cols="30" rows="10"></textarea>
            <p>Author</p>
                <input type="text" name="author" id="author" placeholder="" required="required" />
            <p>Tanggal dan Waktu dibuat</p>
                <input type="datetime-local" name="tanggalDibuat" id="tanggalDibuat" placeholder="" required="required" />
            <p>Tag</p>
                <textarea name="tag" id="tag" cols="30" rows="10"></textarea>
            <p></p>
            <button type="submit" class="buton">Submit</button>
        </form>
    </div>
    <!-- <script src="../assets/js/News.js"></script> -->
</body>
</html>
//