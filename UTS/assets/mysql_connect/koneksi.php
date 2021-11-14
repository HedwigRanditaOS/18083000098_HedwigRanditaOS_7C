<?php
$conn = mysqli_connect('localhost','root','','db_admincantik');

if ($conn -> connect_error) {
	die("Database tidak terkoneksi" .$conn -> connect_error);
}

?>