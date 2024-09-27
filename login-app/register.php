<?php
include("partials/header.php");
include("partials/navigation.php");

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

    if ($password !== $confirm_password){
        $error = "Password do not match";
    } else {

        if (user_exists($conn, $username)) {
            $error = "Username already exists. Please choose another";
        } else {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (username, password, email) VALUES ('$username','$passwordHash','$email')";
            $result = mysqli_query($conn, $query);
            if($result){
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;
                header("Location: admin.php");
                exit;
            } else {
                $error = mysqli_error($conn);
            }
        }
    }

}






?>



<div class="container">
    

        
    <div class="form-container">
        
        <form method="POST" action="">
            <h2>Create your account</h2>
            <?php if($error): ?>
                <p style="color:red">
                    <?php echo $error; ?>
                </p>
            <?php endif; ?>
            <label for="username">Username:</label>
            <input value="<?php echo isset($username) ? $username : ''; ?>"
            placeholder="Enter your username" type="text" name="username" required>

            <label for="email">Email:</label>
            <input value="<?php echo isset($email) ? $email : ''; ?>"
            placeholder="Enter your email" type="email" name="email" required>

            <label for="password">Password:</label>
            <input value="<?php echo isset($password) ? $password : ''; ?>"
            placeholder="Enter your password" type="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input value="<?php echo isset($confirm_password) ? $confirm_password : ''; ?>"
            placeholder="Confirm your password" type="password" name="confirm_password" required>

            <input type="submit" value="Register">
        </form>
    </div>
</div>

<?php include("partials/footer.php");   ?>
<?php

mysqli_close($conn);
?>