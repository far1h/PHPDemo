<?php
include("partials/header.php");
include("partials/navigation.php");

if (is_logged_in()) {
      redirect("admin.php");
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
                redirect('admin.php');
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
    

<div class="container">
    <div class="form-container">
        
        <form method="POST" action="">
            <h2>Login</h2>

            <?php if($error): ?>
                <p style="color:red">
                    <?php echo $error; ?>
                </p>
            <?php endif; ?>
            <label for="username">Username:</label>
            <input placeholder="Enter your username" type="text" name="username" required>

            <label for="password">Password:</label>
            <input placeholder="Enter your password" type="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
</div>
<?php include("partials/footer.php");   ?>

<?php

mysqli_close($conn);
?>