<?php

require('connection.php');
session_start();

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
        $user_exit_query = $con->prepare("SELECT * FROM `registered_users` WHERE `username` = ? OR `email` = ?");
        $user_exit_query->bind_param("ss", $username, $email);
        $user_exit_query->execute();
        $result = $user_exit_query->get_result();

        if ($result) {
            if ($result->num_rows > 0) {
                $result_fetch = $result->fetch_assoc();
                if ($result_fetch['username'] == $username) {
                    echo "<script>alert('Username already taken'); window.location.href='index.php';</script>";
                } else {
                    echo "<script>alert('E-mail already registered'); window.location.href='index.php';</script>";
                }
            } else {
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                $insert_stmt = $con->prepare("INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES (?, ?, ?, ?)");
                $insert_stmt->bind_param("ssss", $fullname, $username, $email, $hashed_password);
                if ($insert_stmt->execute()) {
                    echo "<script>alert('Registration Successful'); window.location.href='index.php';</script>";
                } else {
                    echo "<script>alert('Cannot Run Query'); window.location.href='index.php';</script>";
                }
            }
        } else {
            echo "<script>alert('Cannot Run Query'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('Please fill in all the required fields'); window.location.href='index.php';</script>";
    }
}
?>
