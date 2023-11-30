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
            background-image: url('img/new.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0; /* Hapus margin bawaan body */
            height: 100vh; /* Set tinggi body 100% dari tinggi viewport */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #login_form {
            width: 350px;
            height: 350px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="login_form" class="well">
        <h2><center><span class="glyphicon glyphicon-lock"></span> Login || Chat</center></h2>
        <hr>
        <!-- Form login -->
        <form method="POST" action="login.php">
            Username: <input type="text" name="username" class="form-control" required>
            <div style="height: 10px;"></div>
            Password: <input type="password" name="password" class="form-control" required>
            <div style="height: 10px;"></div>
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button> Belum Punya Akun? <a href="signup.php"> Daftar</a>
        </form>
        <div style="height: 15px;"></div>
        <div style="color: red; font-size: 15px;">
            <center>
                <?php
                session_start();
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </center>
        </div>
    </div>
</body>
</html>
