<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="register.php" method="post">
            <h2>Register</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <label for="role">Select :</label>
            <select name="role" required>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
            </select>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>

<?php


if (isset($_POST['register'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role) VALUES ('$u', '$p', '$role')";
    
    //if ($conn->query($sql) ===  TRUE) {
      // echo "Registration successful!";
   //} else {
     //  echo "Error: " . $sql . "<br>" . $conn->error;
 // }
}
?>
