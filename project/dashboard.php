<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$role_id = $_SESSION['role_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to the Dashboard</h2>
        <?php if ($role_id == 1): ?>
            <p>Hello, Teacher!</p>
        <?php elseif ($role_id == 2): ?>
            <p>Hello, Student!</p>
        <?php endif; ?>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
