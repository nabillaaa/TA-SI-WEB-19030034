<?php
	error_reporting(0);

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "parkir";

	$con = mysqli_connect($host, $user, $pass, $db) or DIE("<script>alert('Gagal Koneksi Ke Database !!')</script>");
 ?>