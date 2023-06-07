<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "iskommerce");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_destroy();
header("Location: login.php");
?>
