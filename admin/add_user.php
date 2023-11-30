<?php
	include('session.php');

	if(isset($_POST['adduser'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password']; // Tanpa md5
		$access = $_POST['access'];

		// Menggunakan password_hash untuk mengenkripsi password
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($conn, "INSERT INTO `user` (uname, username, password, access) VALUES ('$name', '$username', '$hashed_password', '$access')");
	}
?>