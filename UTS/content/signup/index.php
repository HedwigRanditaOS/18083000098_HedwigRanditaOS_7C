<?php
$conn = mysqli_connect('localhost','root','','db_admincantik');

if ($conn -> connect_error) {
	die("Database tidak terkoneksi" .$conn -> connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Magang Online via Patas</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1 class="text-center">Formulir Pendaftaran Magang Online 2021</h1>
		<!-- Awal Card Form-->
		<div class="card mt-3">
  			<div class="card-header bg-primary text-white">Form Input Data Mahasiswa</div>
  				<div class="card-body">
    				<form method="post" action="index.php">
    					<div class="form-group">
    						<label>Nama Lengkap</label>
    							<input type="text" name="namalengkap" placeholder="Input Nama Lengkap Mahasiswa" class="form-control" required>
    					</div>
    					<div class="form-group">
    						<label>Tempat Lahir</label>
    							<input type="text" name="tempatlahir" placeholder="Input Tempat Lahir Mahasiswa" class="form-control" required>
    					</div>
    					<div class="form-group">
    						<label>Tanggal Lahir </label>
    							<input type="date" name="tanggallahir" placeholder="Input Tanggal Lahir Mahasiswa" class="form-control" required>
    					</div>
    					<div class="form-group" required>
    						<label>Jenis Kelamin</label>
    							<tr></tr>
    							<input type="radio" name="jk" value="Laki-laki" >Laki-laki
								<input type="radio" name="jk" value="Perempuan">Perempuan
    					</div>
    					<div class="form-group">
    						<label>Agama</label>
    							<select class="form-control" name="agama" required>
									<option disabled="disabled" selected="selected">--Pilih Agama--</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Katholik">Katholik</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
									<option value="Kong Hu Cu">Kong Hu Cu</option>
									<option value="Kespercayaan Lainnya">Kespercayaan Lainnya</option>
								</select>
    					</div>
    					<div class="form-group">
    						<label>NIM</label>
    							<input type="text" name="nim" placeholder="Input NIM Mahasiswa" class="form-control" required>
    					</div>
    					<div class="form-group">
    						<label>Fakultas</label>
    						<select class="form-control" name="fakultas" required>
    							<option disabled="disabled" selected="selected">--Pilih Fakultas--</option>
    							<option value="Fakultas Teknologi Informasi">Fakultas Teknologi Informasi</option>
		                        <option value="Fakultas Teknik">Fakultas Teknik</option>
		                        <option value="Fakultas Psikologi">Fakultas Psikologi</option>
		                        <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
		                        <option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
		                        <option value="Fakultas Hukum">Fakultas Hukum</option>
		                        <option value="Fakultas Pariwisata">Fakultas Pariwisata</option>
		                    </select>
    					</div>
    					<div class="form-group">
    						<label>Program Studi</label>
    						<select class="form-control" name="programstudi" required>
    							<option disabled="disabled" selected="selected">--Pilih Program Studi--</option>
    							<option value="S1 Teknik Industri">S1 Teknik Industri</option>
			                    <option value="S1 Psikologi">S1 Psikologi</option>
			                    <option value="S1 Hukum">S1 Hukum</option>
			                    <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
			                    <option value="S1 Administrasi Publik">S1 Administrasi Publik</option>
			                    <option value="S1 Arsitektur">S1 Arsitektur</option>
			                    <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
			                    <option value="S1 Manajemen">S1 Manajemen</option>
			                    <option value="S1 Ekonomi Pembangunan">S1 Ekonomi Pembangunan</option>
			                    <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
			                    <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
			                    <option value="S1 Akuntansi">S1 Akuntansi</option>
			                    <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
			                    <option value="S1 Ilmu Administrasi Bisnis">S1 Ilmu Administrasi Bisnis</option>
			                </select>
    					</div>
    					<div class="form-group">
    						<label>Email</label>
    							<input type="text" name="email" placeholder="Input Email Mahasiswa" class="form-control" required>
    					</div>
    					<div class="form-group">
    						<label>Alamat</label>
    							<input type="text" name="alamat" placeholder="Input Alamat Domisili Mahasiswa Saat Ini Lengkap" class="form-control" required>
    					</div>
    					<div class="form-group">
    						<label>Nomor Telepon</label>
    							<input type="number" name="notelepon" placeholder="Input Nomor Telepon Mahasiswa" class="form-control" required>
    					</div>
    					<div class="form-group">
    						<label>Status Mahasiswa</label>
    							<input type="radio" name="status" value="Aktif">Aktif
								<input type="radio" name="status" value="Tidak Aktif">Tidak Aktif
    					</div>
    					<div class="form-group">
    						<label>Jumlah SKS Lulus</label>
    							<input type="number" name="jumlah" placeholder="Input Jumlah SKS Lulus" class="form-control" required>
    					</div>

    					<button type="submit" class="btn btn-success" name="daftar">Daftar</button>
    					<button type="reset" class="btn btn-danger" name="reset">Batal</button>
    				</form>
  				</div>
		</div>
		<!--Akhir Card Form-->


		<!-- Awal Card Tabel -->
		<div class="card mt-3">
  			<div class="card-header bg-success text-white">Daftar Mahasiswa</div>
  				<div class="card-body">
  					<table class="table table-bordered table-striped">
  						<tr>
	  						<th>Nama Lengkap</th>
	  						<th>Tempat Lahir</th>
	  						<th>Tanggal Lahir</th>
	  						<th>Jenis Kelamin</th>
	  						<th>Agama</th>
	  						<th>Nomor Induk Mahasiswa</th>
	  						<th>Fakultas</th>
	  						<th>Program Studi</th>
	  						<th>Email</th>
	  						<th>Alamat</th>
	  						<th>Nomor Telepon</th>
	  						<th>Status Mahasiswa</th>
	  						<th>Jumlah SKS Lulus</th>
  						</tr>
  						<?php
  							$no = 1;
  							$tampil = mysqli_query($conn, "SELECT * from pendaftaran order by id_user desc");
								if (isset($_POST['daftar'])) {
									include 'C:\xampp\htdocs\UTS\assets\mysql_connect\koneksi.php';
									$namalengkap 	= $_POST['namalengkap'];
									$tempatlahir 	= $_POST['tempatlahir'];
									$tanggallahir 	= $_POST['tanggallahir'];
									$jk 			= $_POST['jk'];
									$agama 			= $_POST['agama'];
									$nim 	 		= $_POST['nim'];
									$fakultas 		= $_POST['fakultas'];
									$programstudi 	= $_POST['programstudi'];
									$email 			= $_POST['email'];
									$alamat 		= $_POST['alamat'];
									$notelepon 		= $_POST['notelepon'];
									$status 		= $_POST['status'];
									$jumlah 		= $_POST['jumlah'];

									$simpan = "INSERT INTO pendaftaran(namalengkap,tempatlahir,tanggallahir,jk,agama,nim,fakultas,program_studi,email,alamat,notelepon,status,jumlah)
									VALUES('$namalengkap','$tempatlahir','$tanggallahir','$jk','$agama','$nim','$fakultas','$programstudi','$email','$alamat','$notelepon','$status','$jumlah')";
								}
							?>
  					</table>
  				</div>
  			</div>
  		</div>
		<!-- Akhir Card Tabel -->
</div>
<script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>