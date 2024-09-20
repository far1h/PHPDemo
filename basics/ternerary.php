<?php

$is_admin = false;

echo $is_admin ?"Welcome, Admin!":"Access denied";

$is_logged_in = true;
$message = ($is_logged_in) ? "Welcome back":"Please login";

$age = 18;

$status = ($age >= 18) ?"Adult":"Minor";

echo $status;