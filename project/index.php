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
        <table>
        <form action="login.php" method="post">
            <tr><label for="role">Login as:</label>
            <td><select id="role" name="role">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
            </select></td>
            </tr>
            <tr>
            <td><input type="text" name="username" placeholder="Username" ></td>
            </tr>
            <tr>
           <td> <input type="password" name="password" placeholder="Password"></td>
           </tr>
            <tr>
            <td><button type="submit">Login</button></td>
            <td><button><a type="button" href="register.php">Register</a></button></td>
            </tr>
        </form>
        </table>
    </div>
</body>
</html>
