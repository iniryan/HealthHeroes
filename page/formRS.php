<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../assets/css/damasya.css">

    
    <title>HealthHeroes</title>
    </head>
<body>
    <div class="formRs">
        <h1>Form Pendaftaran Rumah Sakit</h1>
        <form method="post" id="FormRS" action="formRS.html">
            <div class="container">
                <div class="left">
                        <!-- <input type="hidden" name="idRS" id="idRS" required/> -->
                    <p>Nama Rumah Sakit</p>
                        <input type="text" name="namaRS" id="namaRS" placeholder="" required="required" />
                    <p>Deskripsi</p>
                        <textarea name="deskripsi" id="deskripsi" rows="5" cols="40"></textarea>
                    <p>Website</p>
                        <input type="url" name="website" id="website" placeholder="" required="required" />
                    <p>Email</p>
                        <input type="email" name="email" id="email" placeholder="" required="required" />
                    <p>Telepon</p>
                        <input type="text" name="notelp" id="notelp" placeholder="" required="required" />
                    <p>Alamat</p>
                        <textarea name="alamat" id="alamat" rows="5" cols="40"></textarea>
                </div>
                <div class="right">
                        <p>Provinsi</p>
                        <select name="provinsi" id="provinsi">
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                        </select>
                    <p>Kota</p>
                        <select name="kota" id="kota">
                            <option value="Bandung">Bandung</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Cimahi">Cimahi</option>
                            <option value="Depok">Depok</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Karawang">Karawang</option>  
                            <option value="Purwakarta">Purwakarta</option>
                            <option value="Tasikmalaya">Tasikmalaya</option>
                        </select>
                    <p>Kecamatan</p>
                        <select name="kecamatan" id="kecamatan">
                            <option value="Bandung">Bandung</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Cimahi">Cimahi</option>
                            <option value="Depok">Depok</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Karawang">Karawang</option>
                            <option value="Purwakarta">Purwakarta</option>
                            <option value="Tasikmalaya">Tasikmalaya</option>
                        </select>
                    <p>Kelurahan</p>
                        <select name="kelurahan" id="kelurahan">
                            <option value="Bandung">Bandung</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Cimahi">Cimahi</option>
                            <option value="Depok">Depok</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Karawang">Karawang</option>
                            <option value="Purwakarta">Purwakarta</option>
                            <option value="Tasikmalaya">Tasikmalaya</option>
                        </select>
                    <p>Kode Pos</p>
                        <input type="text" name="kodepos" id="kodepos" placeholder="" required="required" />
                    <p>Fasilitas</p>
                    <div class="check">
                        <input type="checkbox" name="fasilitas" id="fasilitas" value="ICU"> ICU <br>
                        <input type="checkbox" name="fasilitas" id="fasilitas" value="UGD"> UGD<br> 
                        <input type="checkbox" name="fasilitas" id="fasilitas" value="Laboratorium"> Laboratorium<br>
                        <input type="checkbox" name="fasilitas" id="fasilitas" value="Radiologi"> Radiologi<br>
                        <input type="checkbox" name="fasilitas" id="fasilitas" value="Rawat Inap"> Rawat Inap<br>
                        <input type="checkbox" name="fasilitas" id="fasilitas" value="Rawat Jalan"> Rawat Jalan<br>
                        <input type="checkbox" name="fasilitas" id="fasilitas" value="Ruang Operasi"> Ruang Operasi<br>
                    </div>
                    <p></p>
                </div>
                
            </div>
            <button type="submit" class="btn-regis">Register</button>
        </form>
    </div>
    <!-- 
        <script src="../assets/js/FormRS.js"></script> -->
</body>
</html>