<?php
include("db.php");

session_start();

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
      header("Location: admin.php");
      exit;
}

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);   
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);

            if(password_verify($password, $user["password"])){
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $user['username'];
                header("Location: admin.php");
                exit;
            } else {
                $error = "Invalid password";
            }

    } else {
            $error = "Invalid user";
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
    <h2>Login</h2>

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

            <input type="submit" value="Login">
        </form>
    </div>
</div>
<?php include("partials/footer.php");   ?>

<?php

mysqli_close($conn);
?>