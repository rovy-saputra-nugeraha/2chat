<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat || Client-Server</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url('img/new.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #signup_form {
					width: 350px;
					height: 430px;
					background-color: rgba(255, 255, 255, 0.8);
					border-radius: 10px;
					padding: 20px;
					position: absolute;
					top: 50%;
					left: 50%;
					transform: translate(-50%, -50%);
			}
    </style>
</head>
<body>
    <div class="container">
        <div id="signup_form" class="well">
            <h2><center><span class="glyphicon glyphicon-user"></span> Daftar || Akun </center></h2>
            <hr>
            <!-- Form pendaftaran -->
            <form method="POST" action="register.php">
                Name: <input type="text" name="name" class="form-control" required>
                <div style="height: 10px;"></div>
                Username: <input type="text" name="username" class="form-control" required>
                <div style="height: 10px;"></div>
                Password: <input type="password" name="password" class="form-control" required>
                <div style="height: 10px;"></div>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Daftar</button> <a href="index.php"> Kembali </a>
            </form>
            <div style="height: 15px;"></div>
            <div style="color: red; font-size: 15px;">
                <center>
                    <?php
                    session_start();
                    if(isset($_SESSION['sign_msg'])){
                        echo $_SESSION['sign_msg'];
                        unset($_SESSION['sign_msg']);
                    }
                    ?>
                </center>
            </div>
        </div>
    </div>
</body>
</html>
