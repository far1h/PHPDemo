<?php

session_start();

$_SESSION['username'] = 'mo';

echo $_SESSION['username'];

?>

<br>
<a href="about.php">About</a><br>
<a href="contact.php">Contact</a>