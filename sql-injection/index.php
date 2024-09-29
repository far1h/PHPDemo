<?php

$conn = mysqli_connect("localhost","root","","sql_injection");

$query = "SELECT * FROM users WHERE username = 'edwin' OR '1'='1'";

$result = mysqli_query($conn, $query);

var_dump($result);

?>

<ul>
    <?php while($user = mysqli_fetch_assoc( $result )) : ?>
        <li>
            <?php echo $user["username"]; ?>
        </li>
    <?php endwhile; ?>
</ul>