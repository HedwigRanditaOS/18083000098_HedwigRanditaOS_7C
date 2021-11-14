<?php
		if(isset($_POST['simpan'])){
			include '../assets/mysql_connect/koneksi.php';

			$namalengkap = $_POST["namalengkap"];
			$tempatlahir = $_POST["tempatlahir"];
			$tanggallahir = $_POST["tanggallahir"];
			$jk = $_POST["jk"];
			$agama = $_POST["agama"];
			$nim = $_POST["nim"];
			$fakultas = $_POST["fakultas"];
			$programstudi = $_POST["programstudi"];
			$email = $_POST["email"];
			$alamat = $_POST["alamat"];
			$notelepon = $_POST["notelepon"];
			$status = $_POST["status"];
			$jumlah = $_POST["jumlah"];

		
			if(!is_numeric($_POST['nim'])){
				echo 'Data Harus Numeric';
			}else{
			$simpan = mysqli_query($conn, "UPDATE pendaftaran SET namalengkap='".$namalengkap."', tempatlahir='".$tempatlahir."', tanggallahir='".$tanggallahir."', jk='".$jk."', agama='".$agama."', nim='".$nim."', fakultas='".$fakultas."', programstudi='".$programstudi."', email='".$email."', alamat='".$alamat."', notelepon='".$notelepon."', status='".$status."', jumlah='".$jumlah."' WHERE nim=".$nim);
			if($simpan){
				header('location:login-admin.php');
			}else{
				echo 'Data Tidak Tersimpan'.mysqli_error($conn);
			}
		}
	}
?>