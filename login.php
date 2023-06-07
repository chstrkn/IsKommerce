<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "iskommerce");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_SESSION['username'])) {
  header("Location: index.php");
}
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
  } else {
    echo "<script>alert('Invalid username or password.')</script>";
  }
  mysqli_close($conn);
}
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
  <script>
    function login() {
      var username = document.forms["register"]["username"].value;
      var password = document.forms["register"]["password"].value;
      if (username == "") {
        alert("Please fill out the username.");
        return false;
      } else if (password == "") {
        alert("Please fill out the password.");
        return false;
      } else {
        return true;
      }
    }
  </script>
</head>

<body>
  <header>
    <img id="logo" src="images/LOGO.png" alt="IsKommerce" />
    <h1><a href="index.html">IsKommerce</a></h1>
  </header>
  <div id="container">
    <form id="login" method="post">
      <h2>Log in to IsKommerce</h2>
      <input type="text" name="username" placeholder="Username" required />
      <br />
      <input type="password" name="password" placeholder="Password" required />
      <br />
      <input type="submit" name="login" value="Log in" onclick="return login()" />
      <p>Don't have an account? <a href="register.php">Register</a></p>
    </form>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
</body>

</html>
