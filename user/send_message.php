<?php
	include('../conn.php');
	session_start();
	if(isset($_POST['msg'])){		
		$msg = $_POST['msg'];
		$id = $_POST['id'];
		$userId = $_SESSION['id'];

		// Assuming $conn is your database connection
		$query = "INSERT INTO `chat` (chatroomid, message, userid, chat_date) VALUES ('$id', '$msg', '$userId', NOW())";
		mysqli_query($conn, $query) or die(mysqli_error($conn));
	}
?>
