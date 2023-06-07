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
    <form id="search-bar" action="products.html" method="get">
      <input type="text" name="search" placeholder="Search" />
      <input type="submit" value="Search" />
    </form>
    <nav>
      <a href="account.html">
        <img src="images/account_circle_white_48dp.svg" alt="Account" />
      </a>
      <a href="cart.html">
        <img src="images/shopping_bag_white_48dp.svg" alt="Cart" />
      </a>
    </nav>
  </header>
  <div id="account">
    <form id="account-form" action="account.html" method="post">
      <h2>My Account</h2>
      <label for="username">Username:</label>
      <input type="text" name="username" placeholder="Username" />
      <br />
      <label for="password">Current Password:</label>
      <input type="password" name="password" placeholder="Current Password" />
      <br />
      <label for="password">New Password:</label>
      <input type="password" name="password" placeholder="New Password" />
      <br />
      <label for="password">Confirm New Password:</label>
      <input type="password" name="password" placeholder="New Password" />
      <br />
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="Name" />
      <br />
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="Email" />
      <br />
      <label>Gender:</label>
      <input type="radio" name="gender" value="Male" />
      <label for="gender">Male</label>
      <input type="radio" name="gender" value="Female" />
      <label for="gender">Female</label>
      <input type="radio" name="gender" value="Other" />
      <label for="gender">Other</label>
      <br />
      <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday" />
      <br />
      <div id="submit">
        <input type="button" value="Back" onclick="history.back()" />
        <input type="submit" value="Save" />
      </div>
    </form>
  </div>
  <footer>Made with love. IsKommerce © 2023.</footer>
</body>

</html>
