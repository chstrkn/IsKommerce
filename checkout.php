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
      <a href="checkout.html">
        <img src="images/shopping_bag_white_48dp.svg" alt="checkout" />
      </a>
    </nav>
  </header>
  <div id="checkout">
    <table>
      <tr>
        <td id="checkout-address" colspan="4">
          <label for="address">Delivery Address</label>
          <br />
          <input type="text" name="address" id="address" value="UP Visayas, Miagao, Iloilo" />
        </td>
      </tr>
    </table>
    <br />
    <table>
      <tr>
        <td class="checkout-product">Order Summary</td>
        <td class="checkout-price">Price</td>
        <td class="checkout-quantity">Quantity</td>
        <td class="checkout-subtotal">Subtotal</td>
      </tr>
    </table>
    <br />
    <table>
      <tr>
        <td class="checkout-product">
          <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
          <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
        </td>
        <td class="checkout-price">₱499.00</td>
        <td class="checkout-quantity">2</td>
        <td class="checkout-subtotal">998.00</td>
      </tr>
    </table>
    <br />
    <table>
      <tr>
        <td class="checkout-payment-method">
          <label for="payment-method">Payment Method</label>
          <input type="radio" name="payment-method" value="cash-on-delivery" checked />
          <label for="cash-on-delivery">Cash On Delivery</label>
          <input type="radio" name="payment-method" value="gcash" />
          <label for="gcash">GCash</label>
        </td>
      </tr>
      <tr>
        <td class="checkout-checkout" colspan="4">
          Total: <span id="checkout-checkout-total-price">998.00</span>
          <button type="button" onclick="location.href='successful-transaction.html'">Place Order</button>
        </td>
      </tr>
    </table>
  </div>
  <footer>Made with love. IsKommerce © 2023.</footer>
</body>

</html>
