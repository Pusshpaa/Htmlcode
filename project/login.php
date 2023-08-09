<?php
session_start();

// Simulated user data (replace this with database queries)
$users = [
    "student" => ["username" => "ram123", "password" => "ram@123"],
    "teacher" => ["username" => "suta456", "password" => "sita@11"]
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $role = $_POST["role"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (array_key_exists($role, $users) && $username === $users[$role]["username"] && $password === $users[$role]["password"]) {
        $_SESSION["role"] = $role;
        header("Location: dashboard_" . $role . ".php");
        exit();
    } else {
        // Handle invalid login
        header("Location: index.php");
        exit();
    }
}
?>
