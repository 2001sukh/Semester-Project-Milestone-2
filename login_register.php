<?php

require('connection.php');
# For login
if (isset($_POST['login'])) {
    $email_username = mysqli_real_escape_string($con, $_POST['email_username']);
    $password = $_POST['password'];

 // Prepared statement to prevent SQL Injection
 $stmt = $con->prepare("SELECT * FROM `registered_users` WHERE `email` = ? OR `username` = ?");
 $stmt->bind_param("ss", $email_username, $email_username); 
}