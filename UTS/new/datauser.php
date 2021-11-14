<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <title>Magang Online via PatasPatas</title>
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
                    <li class="nav-link btn btn-light">
                        <a class="nav-link " href="index.php">Daftar</a>
                    </li>
                    <li class="nav-link btn btn-light active">
                        <a class="nav-link active" href="#">Data Pendaftar</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 btn btn-light">
                    <a class="nav-link" href="../content/signin">Login</a>
                </form>
            </div>
        </nav>
		<!-- Awal Card Tabel -->
		<div class="card mt-3">
  			<div class="card-header bg-success text-white">Daftar Mahasiswa</div>
  				<div class="card-body">
  					<table class="table table-bordered table-striped table-hover">
  						<tr>
  							<th>No</th>
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
  							include '../assets/mysql_connect/koneksi.php';
  							$no = 1;
  							$data = mysqli_query($conn, "SELECT * from pendaftaran");
  							while ($row = mysqli_fetch_array($data)) {
							?>	
							<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['namalengkap'] ?></td>
							<td><?php echo $row['tempatlahir'] ?></td>
							<td><?php echo $row['tanggallahir'] ?></td>
							<td><?php echo $row['jk'] ?></td>
							<td><?php echo $row['agama'] ?></td>
							<td><?php echo $row['nim'] ?></td>
							<td><?php echo $row['fakultas'] ?></td>
							<td><?php echo $row['programstudi'] ?></td>
							<td><?php echo $row['email'] ?></td>
							<td><?php echo $row['alamat'] ?></td>
							<td><?php echo $row['notelepon'] ?></td>
							<td><?php echo $row['status'] ?></td>
							<td><?php echo $row['jumlah'] ?></td>
						
			</tr>
			<?php } ?>
		</table>

  				</div>

  			</div>
  		
  		</div>

		<!-- Akhir Card Tabel -->
</div>
<script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>