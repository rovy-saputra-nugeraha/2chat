<?php
    include('../conn.php');
    session_start();
    if(isset($_POST['msg'])){        
        $msg = $_POST['msg'];
        $id = $_POST['id'];
        $userId = $_SESSION['id'];

        // Assuming $conn is your database connection
        mysqli_query($conn, "INSERT INTO `chat` (chatroomid, message, userid, chat_date) VALUES ('$id', '$msg', '$userId', NOW())") or die(mysqli_error($conn));
    }
?>