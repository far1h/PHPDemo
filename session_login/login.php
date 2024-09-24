<?php

$message = "";
    if($_SERVER['REQUEST_METHOD']=="POST"){

        $username = 'admin';
        $password = 'secret';

        $inputUsername = $_POST['username'];
        $inputPassword = $_POST['password'];
        
        if($inputUsername === $username && $inputPassword === $password){
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $inputUsername;

            header("Location: admin.php");
            exit;
        }else{
            $message = "Invalid username or password";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>

    <?php if ($message): ?>
        <p style="color:red;"><?php echo $message?></p>
    <?php endif; ?>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password</label>
        <input type="text" name="password" id="password"><br><br>

        <input type="submit" value="Login">
        
    </form>
</body>
</html>