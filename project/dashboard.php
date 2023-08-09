<?php
session_start();
if ($_SESSION["role"] !== "student") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Dashboard</title>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome, Student!</h1>
        <p>This is your dashboard.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
