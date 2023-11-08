<?php

require('connection.php');

if (isset($_POST['register'])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['fullname']) && !empty($_POST['password'])) {
        $user_exit_query = "SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
        $result = mysqli_query($con, $user_exit_query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $result_fetch = mysqli_fetch_assoc($result);
                if ($result_fetch['username'] == $_POST['username']) {
                    echo "
                    <script>
                    alert('$result_fetch[username] - username already taken');
                    window.location.href='index.php';
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                    alert('$result_fetch[email] - E-mail already registered');
                    window.location.href='index.php';
                    </script>
                    ";
                }
            } else {
                $query = "INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) 
                          VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$_POST[password]')";
                if (mysqli_query($con, $query)) {
                    echo "
                    <script>
                    alert('Registration');
                    window.location.href='index.php';
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                    alert('Cannot Run Query');
                    window.location.href='index.php';
                    </script>
                    ";
                }
            }
        } else {
            echo "
            <script>
            alert('Cannot Run Query');
            window.location.href='index.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
        alert('Please fill in all the required fields');
        window.location.href='index.php';
        </script>
        ";
    }
}
?>
