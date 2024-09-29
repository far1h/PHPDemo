<?php

$username = 'john_doe';
$conn = mysqli_connect("localhost","root","","sql_injection");

$query = "SELECT * FROM users WHERE username = '$username' OR '1'='1'";

$result = mysqli_query($conn, $query);

// AVOID SQL INJECTION with prepared stmts

$query = "SELECT * FROM users WHERE username = ?";

$stmt = mysqli_prepare($conn, $query);

// Bind the param

mysqli_stmt_bind_param($stmt,"s", $username);

// execute

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

?>

<ul>
    <?php while($user = mysqli_fetch_assoc( $result )) : ?>
        <li>
            <?php echo $user["username"]; ?>
        </li>
    <?php endwhile; ?>
</ul>