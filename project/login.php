<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_id = $_POST['role'];

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `role_id`= '$role_id' AND `username` = '$username' AND `password` ='$password'  ");
    
    $stmt->execute();
    $stmt->bind_result( $role_id, $username, $password);
    $stmt->fetch();

    if (password_verify($password, $username)) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role_id'] = $role_id;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login credentials.";
        
    }

    $stmt->close();
}

$conn->close();
?>
