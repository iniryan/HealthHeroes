<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi html</title>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/yafi.css" >
</head>
<body>
	<div class="wrap">
		<div class="container">
	<h1>Form Biodata Pendonor</h1>
	<form method="post" id="DataPendonor" action="../process/prosesDataPendonor.php" >
		<div class="input-box">
			<label>Nama Lengkap</label> <br>
			<input type="text" id="NamaLengkap" name="NamaLengkap" placeholder="Nama Lengkap">
		</div>
		<div class="input-box">
			<label>Date Of Birth</label> <br>
			<input type="date" id="DateOfBirth" name="DateOfBirth" placeholder="Date Of Birth">
		</div>
		
		<div class="input-box">
			<label>kota kelahiran</label> <br>
			<input type="text" id="KotaKelahiran" name="KotaKelahiran" placeholder="kota Kelahiran">
		</div>
		<div class="input-box">
			<label>Alamat Rumah</label> <br>
			<textarea type="text" name="alamatRumah" id="Alamat" cols="30" rows="10"></textarea>
		</div>
		
		<div class="input-box">
			<label>Phone</label> <br>
			<input type="text" id="Phone" name="Phone" placeholder="Phone">
		</div>
		<div class="input-box">
			<label>Email</label> <br>
			<input type="email" id="Email" name="Email" placeholder="Email">
		</div>
		<div class="input-box">
			<label>NIK</label> <br>
			<input type="text" id="NIK" name="NIK" placeholder="NIK">
		</div> 
		<div class="input-box">
			<label>No. Kartu Keluarga</label> <br>
			<input type="text" id="KK" name="KK" placeholder="NO Kartu Keluarga">
		</div>
		<div class="input-box">
			<label>Kota</label> <br>
			<select name="kota" id="Kota" class="input-field">
				<option value="---Pilih Kota---">---Pilih Kota---</option>
				<option value="Sidoarjo">Sidoarjo</option>
				<option value="Surabaya">Surabaya</option>
				<option value="Gresik">Gresik</option>
				<option value="Lamongan">Lamongan</option>
				<option value="Pasuruan">Pasuruan</option>
				<option value="Malang">Malang</option>
				<option value="Kediri">Kediri</option>
				<option value="Nganjuk">Nganjuk</option>
			</div>
			</select>

			<div class="input-box">
			<label>Gender</label>
			<div class="radio-wrap">
				<div class="radio-box">Laki-Laki<input type="radio" name="gender" value="Laki-Laki" class="radio"></div> 
				<div class="radio-box">Perempuan</div><input type="radio" name="gender" value="Perempuan" class="radio"></div>
			</div>
			</div>
		<div class="button-wrap">
			<button type="submit" name="submit" class="daftar">Daftar</button>
			<button type="reset" name="reset" class="batal">Reset</button>
		</div>
	</form>

</div>
</div>
<!-- <script src="../assets/js/DataPendonor.js"></script> -->
</body>
</html>
