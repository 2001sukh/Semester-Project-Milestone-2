connection.php:- 

<?php

mysqli_connect("localhost","root","","hungerhub");

if (mysqli_connect_errno()){
    echo"<script>alert('cannot connect to the database');</script>";
    exit();
}