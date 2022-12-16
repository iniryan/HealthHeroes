<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata Pendonor</title>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/yafi.css">
</head>
<body>
	<div class="wrap">
	<div class="container">
	<h1>Form Biodata Pendonor</h1>
	<form method="post" id="FormPencariDonor" action="prosesPencari.php" >

		<div>
			<div class="input-box">
				<span class="details">Nama Lengkap</span>
				<input type="Text" id="NamaLengkap" name="NamaLengkap" placeholder="Nama Lengkap" class="input-field" autocomplete="off" required>
			</div>
			<div class="input-box">
				<span class="details">Date Of Birth</span>
				<input type="date" id="DateOfBirth" name="DateOfBirth" placeholder="Date Of Birth" required>
			</div>
			
				<div class="input-box">
				<span>Kota Kelahiran</span>
				<input type="text" id="KotaKelahiran" name="KotaKelahiran" placeholder="kota kelahiran">
			</div>
			<div class="input-box">
				<span class="details">Alamat Rumah</span>
				<textarea type="text" id="Alamat" name="AlamatRumah" placeholder="Alamat Rumah" class="input-field" ></textarea>
			</div>
			
			<div class="input-box">
				<span class="details">Phone</span>
				<input type="Phone" id="Phone" name="Phone" placeholder="Masukan No Handphone">
			</div>
			<div class="input-box">
				<span class="details">No Kartu Keluarga</span>
				<input type="text" id="KK" name="NoKartuKeluarga" placeholder="Masukan No Kartu Keluarga">
			</div>
			<div class="input-box">
				<span class="details">Email</span>
				<input type="text" id="Email" name="Email" placeholder="Email">
			</div>
			<div class="input-box">
				<span class="details">NIK</span>
				<input type="nik" id="NIK" name="NIK" placeholder="Masukan NIK">
			<div class="input-box">
				<span class="details">Kota</span>
				<select name="Kota" id="Kota" class="input-field">
					<option value="Pilih kota">---Pilih Kota---</option>
					<option value="Sidoarjo">Sidoarjo</option>
					<option value="Surabaya">Surabaya</option>
					<option value="Gresik">Gresik</option>
					<option value="Lamongan">Lamongan</option>
					<option value="Pasuruan">Pasuruan</option>
					<option value="Malang">Malang</option>
					<option value="kediri">Kediri</option>
					<option value="Nganjuk">Nganjuk</option>
				</select>
			</div>

			<div class="input-box">
						<span class="details">Gender</span>
						<div class="radio-wrap">
				<div class="radio-box">Laki Laki<input type="radio" name="jenis_kelamin" value="Laki Laki" class="radio"></div>  
				<div class="radio-box">Perempuan<input type="radio" name="jenis_kelamin" value="Perempuan" class="radio"></div>
			</div>
			</div>

			<div class="button-wrap">
			<button type="submit" name="submit" class="daftar">Daftar</button>
			<button type="reset"  name="reset" class="batal"> batal</button></div>
		</table>
	</form>
</div>
</div>
<!-- <script src="../assets/js/PencariDonor.js"></script> -->
</body>
</html>
