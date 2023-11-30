<?php
	include('conn.php');
	session_start();

	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = check_input($_POST['username']);

		if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
			$_SESSION['sign_msg'] = "Nama pengguna tidak boleh mengandung spasi dan karakter khusus!";
			header('location: signup.php');
		} else {

			$fusername = $username;

			$password = check_input($_POST["password"]);
			$fpassword = password_hash($password, PASSWORD_DEFAULT); // Menggunakan password_hash untuk mengenkripsi password

			$fname = check_input($_POST["name"]);

			mysqli_query($conn, "INSERT INTO `user` (uname, username, password, access) VALUES ('$fname', '$fusername', '$fpassword', '2')");

			$_SESSION['msg'] = "Pendaftaran berhasil. Anda dapat login sekarang!";
			header('location: index.php');
		}
	}
?>