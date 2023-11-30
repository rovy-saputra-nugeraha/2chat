<?php
	include('session.php');

	$mname = $_POST['mname'];
	$cpassword = $_POST['cpassword'];
	$apassword = $_POST['apassword'];
	$mpassword = $_POST['mpassword'];
	$musername = $_POST['musername'];

	$myq = mysqli_query($conn, "SELECT * FROM `user` WHERE userid='" . $_SESSION['id'] . "'");
	$myqrow = mysqli_fetch_array($myq);

	if ($cpassword != $apassword) {
		?>
		<script>
			window.alert('Kata Sandi Verifikasi tidak cocok!');
			window.history.back();
		</script>
		<?php
	} elseif (!password_verify($cpassword, $myqrow['password'])) {
		?>
		<script>
			window.alert('Kata Sandi Saat Ini tidak cocok!');
			window.history.back();
		</script>
		<?php
	} else {
		$newpassword = ($mpassword == $myqrow['password']) ? $mpassword : password_hash($mpassword, PASSWORD_DEFAULT);

		mysqli_query($conn, "UPDATE `user` SET username='$musername', password='$newpassword', uname='$mname' WHERE userid='" . $_SESSION['id'] . "'");
		?>
		<script>
			window.alert('Perubahan tersimpan!');
			window.history.back();
		</script>
		<?php
	}
?>