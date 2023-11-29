<?php
// Define the project root directory
$proj_root = "/dgl123/project/";

session_start();
session_unset();
session_destroy();
header("location: " . $proj_root . "index.php");
?>
