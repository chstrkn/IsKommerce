<?php
session_start();
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
    <h1><a href="index.html">IsKommerce</a></h1>
  </header>
  <div id="container">
    <form id="login" action="index.html" method="get">
      <h2>Log in to IsKommerce</h2>
      <input type="text" name="username" placeholder="Username" required />
      <br />
      <input type="password" name="password" placeholder="Password" required />
      <br />
      <input type="submit" value="Log in" />
      <p>Don't have an account? <a href="register.html">Register</a></p>
    </form>
  </div>
  <footer>Made with love. IsKommerce © 2023.</footer>
</body>

</html>
