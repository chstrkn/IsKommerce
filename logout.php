<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "iskommerce");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_unset();
header("Location: login.php");
?>
