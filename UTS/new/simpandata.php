<?php
include '../assets/mysql_connect/koneksi.php';
	if(isset($_POST['daftar'])){
		$simpan = mysqli_query($conn, "INSERT INTO pendaftaran VALUES (
			NULL,
		    '".$_POST['namalengkap']."',
		    '".$_POST['tempatlahir']."',
		    '".$_POST['tanggallahir']."',
		    '".$_POST['jk']."',
			'".$_POST['agama']."',
		    '".$_POST['nim']."',
		    '".$_POST['fakultas']."',
		    '".$_POST['programstudi']."',
			'".$_POST['email']."',
		    '".$_POST['alamat']."',
		    '".$_POST['notelepon']."',
		    '".$_POST['status']."',
			'".$_POST['jumlah']."')");
			if($simpan){
				header('location:datauser.php');
			}else{
				echo 'Data Tidak Tersimpan'.mysqli_error($conn);
			}
		}
?>
			