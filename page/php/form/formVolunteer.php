<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Volunteer</title>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/michael.css">
</head>
<body>
	<div class="wrap">
	<div class="container">
	<h1>Form Biodata Volunteer</h1>
	
	<Form method="post" id="Volunteer" name='formVolunteer' action="../process/prosesVolunteer.php">
			<div class="input-label">
				<label>Nama Lengkap</label> <br>
				<input type="Text" id="nama" name="FirstName" placeholder="Nama Lengkap">
			</div>
					<div class="input-label">
				<label>Kota Kelahiran</label> <br>
				<input type="text" id="kota_kelahiran" name="kota" placeholder="Kota Kelahiran">
			<div class="input-label">
				<label>Date Of Birth</label> <br>
				<input type="date" id="tanggal_lahir" name="date" placeholder="Date Of Birth">
			</div>
			<div class="input-radio">
				<label>Gender</label><br>
				<div class="radio-box">Laki laki<input type="radio" name="jenis_kelamin" value="Laki Laki"></div>   
				<div class="radio-box">Perempuan<input type="radio" name="jenis_kelamin" value="Perempuan"></div>
				</div>
			<div class="input-label">
				<label>Alamat Rumah</label> <br>
				<textarea type ="text" id="alamat_rumah" name="AlamatRumah" placeholder="Masukkan Alamat Rumah" class="input-field"></textarea>
			</div>
			<div class="input-label">
				<label>Kota</label> <br>
				<select name="Kota" id="kota" class="input-field">
					<option value="--Pilih Kota---">---Pilih Kota---</option>
					<option value="Sidoarjo">Sidoarjo</option>
					<option value="Surabaya">Surabaya</option>
					<option value="Gresik">Gresik</option>
					<option value="Lamongan">Lamongan</option>
					<option value="Pasuruan">Pasuruan</option>
					<option value="Malang">Malang</option>
					<option value="Kediri">Kediri</option>
					<option value="Nganjuk">Nganjuk</option>

				</select>
			</div> 
			<div class="input-label">
				<label>No Hp</label> <br>
				<input type="No Hp" id="no_hp" name="No_Hp" placeholder="No Hp">
			</div>
			<div class="input-label">
				<label>Email</label> <br>
				<input type="text" id="email" name="Email" placeholder="Email">
			</div> 
			<div class="input-label">
				<label>NIK</label> <br>
				<input type="nik" id="nik" name="nik" placeholder="Masukan NIK">
			</div> 
	
			<div class="input-label">
				<label>No Kartu Keluarga</label> <br>
				<input type="text" id="no_kk" name="no_kk" placeholder="Masukkan No Kartu Keluarga">
			</div>
			<div class="button-wrap">
			<button type="Submit" name="Submit" class="Register" >Register</button>

			<button type="Batal" name="Batal" class="Batal">Batal</button>
		</div>
		</fieldset>
	</Form>
</div>
</div>

<!-- <script src="../assets/js/Volunteer.js"></script> -->
</body>
</html>
