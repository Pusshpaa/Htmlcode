<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role_id = $_POST['role'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $query = "INSERT INTO `users`(`role_id`,`username`, `password`) VALUES ('$role_id','$username','$password'); ";
    $result = mysqli_query($conn,$query);
    if($result){
        echo "<h1>A new user created successfully.</h1>";
        echo "<script>setTimeout(\"location.href = 'index.php'; \",2000); </script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <table>
        <form action="register.php" method="POST">
        <tr><label for="role">Role:</label>
        <td><select name="role">
                <option value="1">Teacher</option>
              <option value="2">Student</option>
            </select><br></td>
        </tr>
        <tr>
            <td><label for="username">Username:</label>
            <input type="text" name="username"></td>
        </tr>
          <td> <label for="password">Password:</label>
            <input type="password" name="password"></td>
        </tr>
           <td> <input type="submit" value="Register"></td>
        </form>
        </table>
    </div>
</body>
</html>
