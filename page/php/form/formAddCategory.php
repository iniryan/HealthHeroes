<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="../../../assets/css/ryan.css">
</head>
<body>
    <div class="formKategori">
        <div class="wrape">
            <h1>Form Kategori</h1>
            <form method="post" action="../process/prosesKategori.php">
                <div class="input-wrap kategori-wrap">
                    <input type="text" class="input-field kategori" name="nama_kategori" id="nama_kategori" placeholder="Contoh: Donor Darah" required="required" />
                </div>
                <div class="input-wrap kategori-wrap">
                    <textarea class="input-field kategori" name="deskripsi_kategori" id="deskripsi_kategori" cols="30" rows="10" required="required" placeholder="Contoh: Kategori donor darah adalah kategori yang berkaitan mengenai donor darah"></textarea>
                </div>
                <div class="input-wrap">
                    <button type="submit" class="btn-kategori">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>