<?php
	include('../conn.php');
	$id=$_REQUEST['id'];
	$user=$_POST['user'];
	
	if (empty($user)){
	?>
		<script>
			window.alert('Pilih Pengguna');
			window.history.back();
		</script>
	<?php
	}
	else{
	mysqli_query($conn,"insert into chat_member (userid, chatroomid) values ('$user','$id')");
	
	?>
		<script>
			window.alert('Anggota Berhasil Ditambahkan');
			window.history.back();
		</script>
	<?php
	}
?>