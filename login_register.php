<?php

require('connection.php');
# For login
if (isset($_POST['login'])) {
    $email_username = mysqli_real_escape_string($con, $_POST['email_username']);
    $password = $_POST['password'];

 // Prepared statement to prevent SQL Injection
 $stmt = $con->prepare("SELECT * FROM `registered_users` WHERE `email` = ? OR `username` = ?");
 $stmt->bind_param("ss", $email_username, $email_username);
 $stmt->execute();
 $result = $stmt->get_result();

 if ($result) {
    if ($result->num_rows == 1) {
        $result_fetch = $result->fetch_assoc();
        if (password_verify($password, $result_fetch['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $result_fetch['username'];
            header("location:index.php");
        } else {
            echo "<script>alert('Incorrect password'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('Email or Username Not Registered'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('Cannot Run Query'); window.location.href='index.php';</script>";
}
} 

# For registration
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($email) && !empty($fullname) && !empty($password)) {
       
    }
}
?>
