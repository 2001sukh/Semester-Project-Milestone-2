<?php

require('connection.php');

if(isset($_POST['register']))
{
$user_exist_query="SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]' ";
$result=mysqli_query($con,$user_exist_query);
}

if($result)
{
 if(mysqli_num_rows($result)>0)
 {
    $result_fetch=mysqli_fetch_assoc($result);
    if($result_fetch['username']==$_POST['username'])
    {
        echo"
        <script>
        alert('$result_fetch[username] - Username already taken');
        window.location.href='index.php';
        </script>
        ";
    }
     else
     {
        echo"
        <script>
        alert('$result_fetch[email] - E-mail already registered');
        window.location.href='index.php';
        </script>
        ";
     }
 }
 else 
 {
   $querry="INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$post[username]','$_POST[email]')";
   if(mysqli_query($con,$query))
   {
    echo"
    <script>alert('Registration successful');
    window.location.href='index.php';
    </script>
    ";
   }
   else
   {
    echo"
    <script>alert('Cannot Run Query');
    window.location.href='index.php';
    </script>
    ";
   } 
}
}

?>