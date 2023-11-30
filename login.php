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
			$_SESSION['msg'] = "Nama pengguna tidak boleh mengandung spasi dan karakter khusus!";
			header('location: index.php');
		} else {

			$fusername = $username;

			$password = check_input($_POST["password"]);

			$query = mysqli_query($conn, "SELECT * FROM `user` WHERE username='$fusername'");

			if (mysqli_num_rows($query) == 0) {
				$_SESSION['msg'] = "Login Gagal, Invalid Input!";
				header('location: index.php');
			} else {

				$row = mysqli_fetch_array($query);
				$hashed_password = $row['password'];

				if (password_verify($password, $hashed_password)) {
					$_SESSION['id'] = $row['userid'];

					if ($row['access'] == 1) {
						?>
						<script>
							window.alert('Login Berhasil, Welcome Admin!');
							window.location.href = 'admin/';
						</script>
						<?php
					} else {
						?>
						<script>
							window.alert('Login Berhasil, Welcome User!');
							window.location.href = 'user/';
						</script>
						<?php
					}
				} else {
					$_SESSION['msg'] = "Login Gagal, Invalid Input!";
					header('location: index.php');
				}
			}
		}
	}
?>