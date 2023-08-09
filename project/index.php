<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login System</title>
</head>

<body>
    <div class="login-container">
        <form action="login.php" method="post">
            <label for="role">Login as:</label>
            <select id="role" name="role">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
            </select>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <button><a type="button" href="register.php">Register</a></button>
        </form>
    </div>
</body>
</html>
