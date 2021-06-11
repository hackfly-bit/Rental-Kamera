<?php 
	$host = "localhost";
	$user = "fajrun";
	$pass = "123";
	$db = "rental_kamera";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysqli_connect_error());
	}else {
		echo"nyambung";
	}
?>