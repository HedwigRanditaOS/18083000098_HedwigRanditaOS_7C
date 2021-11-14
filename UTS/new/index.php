<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/style.css" rel="stylesheet">
  <title>Magang Online via Patas</title>
</head>
<body>
	<div class="container">
        <div class="jumbotron ">
        <h1 style="font-family: Verdana">Formulir Pendaftaran Magang Online 2021</h1>
        <br>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-link btn btn-light">
                        <a class="nav-link" href="../">Home</a>
                    </li>
                    <li class="nav-link btn btn-light active">
                        <a class="nav-link active" href="#">Daftar</a>
                    </li>
                    <li class="nav-link btn btn-light">
                        <a class="nav-link" href="datauser.php">Data Pendaftar</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 btn btn-light">
                    <a class="nav-link" href="../content/signin">Login</a>
                </form>
            </div>
        </nav>
		<!-- Awal Card Form-->
		<div class="card mt-3">
  				<div class="card-body">
    				<form method="post" action="simpandata.php">
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
	</div>
<script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>