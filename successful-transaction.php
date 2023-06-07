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
  <div id="successful-transaction">
    <img src="images/check_circle_white_48dp.svg" alt="Check" />
    <p id="message">You have successfully placed your order!</p>
    <hr />
    <p>Payment Amount: ₱0.00</p>
    <hr />
    <p>Payment Method: Cash on Delivery</p>
    <hr />
    <p>Delivery Address: UP Visayas, Miagao, Iloilo</p>
    <hr />
    <p>Transaction ID: 1234567890</p>
    <hr />
    <p>Order Details</p>
    <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016 (1 pc)</p>
    <br />
    <button type="button" onclick="location.href='index.html'">Home</button>
  </div>
  <footer>Made with love. IsKommerce © 2023.</footer>
</body>

</html>
