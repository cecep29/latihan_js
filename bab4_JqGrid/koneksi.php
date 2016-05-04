<?php 

	$host = "localhost";
	$username = "root";
	$pass = "";
	$db = "bengkel";

	//koneksi database dan memilih database
	$link = mysqli_connect($host, $username, $pass, $db) or die('koneksi gagal');
?>