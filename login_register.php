<?php

require('connection.php');

# For login
if (isset($_POST['login'])) {
    $email_username = mysqli_real_escape_string($con, $_POST['email_username']);
}