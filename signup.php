<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register || New Account Chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="img/logo.png" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url('img/background.png');
            /* Ganti dengan path gambar Anda */
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
            background-image: url('img/bg-chat.jpeg');
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
        <div id="signup_form" class="well" style="color: white;">
            <h2>
                <center><span class="glyphicon glyphicon-lock"></span> Daftar || Akun </center>
            </h2>
            <hr>
            <!-- Form pendaftaran -->
            <form method="POST" action="register.php">
                Nama: <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda" autocomplete="off" required>
                <div style="height: 10px;"></div>
                Username: <input type="text" name="username" placeholder="Masukkan Username Anda" class="form-control" autocomplete="off" required>
                <div style="height: 10px;"></div>
                Password: <input type="password" name="password" placeholder="Masukkan Password" class="form-control" autocomplete="off" required>
                <div style="height: 10px;"></div>
                <center>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Daftar</button> <br> <br>
                    <a href="index.php"> 
                        <button type="button" class="btn btn-danger glyphicon glyphicon-menu-left">Kembali</button>
                    </a>
                </center>
            </form>
            <div style="height: 15px;"></div>
            <div style="color: red; font-size: 15px;">
                <center>
                    <?php
                    session_start();
                    if (isset($_SESSION['sign_msg'])) {
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