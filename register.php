<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "iskommerce");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_SESSION['username'])) {
  header("Location: index.php");
}
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];
  $sql = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username already exists.')</script>";
  } else if (strlen($username) > 50) {
    echo "<script>alert('Username must be less than 50 characters.')</script>";
  } else if (strlen($password) > 50) {
    echo "<script>alert('Password must be less than 50 characters.')</script>";
  } else if ($password != $confirmPassword) {
    echo "<script>alert('Password and confirm password do not match.')</script>";
  } else {
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Account created successfully.')</script>";
      header("Location: login.php");
    } else {
      echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
    }
  }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IsKommerce</title>
  <link rel="shortcut icon" href="images/LOGO.png" type="image/x-icon" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>

<body>
  <header>
    <img id="logo" src="images/LOGO.png" alt="IsKommerce" />
    <h1><a href="index.php">IsKommerce</a></h1>
  </header>
  <div id="container">
    <form id="register" method="post">
      <h2>Sign up to IsKommerce</h2>
      <input type="text" name="username" placeholder="Username" required />
      <br />
      <input type="password" name="password" placeholder="Password" required />
      <br />
      <input type="password" name="confirmPassword" placeholder="Confirm password" required />
      <br />
      <input type="submit" name="register" value="Sign up" />
      <p>Already have an account? <a href="login.php">Log in</a></p>
    </form>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
</body>

</html>
