<!DOCTYPE html>
<html>
<head>
	<title>Magang Online via Patas</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1 class="text-center">Formulir Pendaftaran Magang Online 2021</h1>
		<!-- Awal Card Tabel -->
		<div class="card mt-3">
  			<div class="card-header bg-success text-white">Daftar Mahasiswa</div>
  				<div class="card-body">
  					<table class="table table-bordered table-striped">
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
	  						<th>Aksi</th>
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
							<td>

					<a href="edit.php?nim=<?php echo $row['nim']?>"><img style="height: 26px;width: 26px" src="../media/icon/edit.png" name="editcs" onclick="return confirm('Edit Data?')">
					<a href="hapus.php?nim=<?php echo $row['nim'] ?>"><img style="height: 26px;width: 26px" src="../media/icon/delete.png" onclick="return confirm('Hapus Data?')" >


				</td>
			</tr>
			<?php } ?>
		</table>
		<a type="button" class="btn btn-primary" href="../index.php">Logout</a>

  				</div>
  			</div>
  		</div>
		<!-- Akhir Card Tabel -->
</div>
<script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>