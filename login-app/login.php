<?php
include("db.php");

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);   
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            $user['id']
    } else {

    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Register</h2>

    <?php if($error): ?>
        <p style="color:red">
            <?php echo $error; ?>
        </p>
    <?php endif; ?>
<div class="container">
    <div class="form-container">
        <form method="POST" action="">
            <h2>Create your Account</h2>

            <!-- Error message placeholder -->
            <p style="color:red">
                <!-- Error message goes here -->
            </p>

            <label for="username">Username:</label><br>
            <input placeholder="Enter your username" type="text" name="username" required><br><br>

            <label for="password">Password:</label><br>
            <input placeholder="Enter your password" type="password" name="password" required><br><br>

            <input type="submit" value="Register">
        </form>
    </div>
</div>
</body>
</html>

<?php

mysqli_close($conn);
?>