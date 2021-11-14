<?php
include '../assets/mysql_connect/koneksi.php';
if(isset($_GET['nim'])){
	$hapus = mysqli_query($conn, "DELETE FROM pendaftaran WHERE nim = '".$_GET['nim']."'");
	if($hapus){
		header('location:login-admin.php');
	}else{
		echo 'Gagal Menghapus Data';
	}
}
?>