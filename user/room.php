<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.chat-room-panel {
			position: relative;
		}

		.chat-room-panel::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(255, 255, 255, 0.5);
			/* Ganti alpha (nilai terakhir) dengan tingkat kecerahan yang diinginkan, 0 hingga 1 */
		}
	</style>
</head>

<body>
	<div class="col-lg-8">
		<div class="panel panel-default" style="height:50px;">
			<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span id="user_details"><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($cmem); ?></span></span> <?php echo $chatrow['chat_name']; ?></strong></span>
			<div class="showme hidden" style="position: absolute; left:-120px; top:20px;">
				<div class="well">
					<strong>Room Member/s:</strong>
					<div style="height: 10px;"></div>
					<?php
					$rm = mysqli_query($conn, "select * from chat_member left join `user` on user.userid=chat_member.userid where chatroomid='$id'");
					while ($rmrow = mysqli_fetch_array($rm)) {
					?>
						<span>
							<?php
							$creq = mysqli_query($conn, "select * from chatroom where chatroomid='$id'");
							$crerow = mysqli_fetch_array($creq);

							if ($crerow['userid'] == $rmrow['userid']) {
							?>
								<span class="glyphicon glyphicon-user"></span>
							<?php
							}

							?>
							<?php echo $rmrow['uname']; ?></span><br>
					<?php
					}

					?>

				</div>
			</div>
			<div class="pull-right" style="margin-right:10px; margin-top:7px;">
				<?php
				if ($chatrow['userid'] == $_SESSION['id']) {
				?>
					<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Lobby</a>
					<a href="#delete_room" data-toggle="modal" class="btn btn-danger">Hapus Room</a>
					<a href="#add_member" data-toggle="modal" class="btn btn-primary">Tambahkan Anggota</a>
				<?php
				} else {
				?>
					<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Lobby</a>
					<a href="#leave_room" data-toggle="modal" class="btn btn-warning">Keluar Room</a>
				<?php
				}
				?>
			</div>
		</div>
		<div>
			<div class="panel panel-default chat-room-panel" style="height: 400px; background-image: url('../img/bg-chat-room.jpg');">
				<div style="height:10px;"></div>
				<span style="margin-left:10px; color:black;">Selamat Datang Di Ruang Chat</span><br>
				<span style="font-size:10px; margin-left:10px; color:red;"><i>Catatan: Hindari penggunaan bahasa kotor dan ujaran kebencian untuk menghindari pemblokiran akun</i></span>
				<div style="height:10px;"></div>
				<div id="chat_area" style="margin-left:10px; max-height:320px; overflow-y:scroll;">
				</div>
			</div>

			<div class="input-group">
				<input type="text" class="form-control" placeholder="Type message..." id="chat_msg">
				<span class="input-group-btn">
					<button class="btn btn-success" type="submit" id="send_msg" value="<?php echo $id; ?>">
						<span class="glyphicon glyphicon-comment"></span> Kirim
					</button>
				</span>
			</div>

		</div>
	</div>
</body>

</html>