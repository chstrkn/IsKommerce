<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "iskommerce");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (!isset($_SESSION['username'])) {
  header("Location: register.php");
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
</head>

<body>
  <header>
    <img id="logo" src="images/LOGO.png" alt="IsKommerce" />
    <h1><a href="index.php">IsKommerce</a></h1>
    <form id="search-bar" action="products.php" method="get">
      <input type="text" name="search" placeholder="Search" />
      <input type="submit" value="Search" />
    </form>
    <nav>
      <a href="account.php">
        <img src="images/account_circle_white_48dp.svg" alt="Account" />
      </a>
      <a href="cart.php">
        <img src="images/shopping_bag_white_48dp.svg" alt="Cart" />
      </a>
    </nav>
  </header>
  <div id="cart">
    <form action="checkout.php" method="post">
      <table>
        <tr>
          <td class="cart-selector">
          </td>
          <td class="cart-product">Product</td>
          <td class="cart-price">Price</td>
          <td class="cart-quantity">Quantity</td>
          <td class="cart-subtotal">Subtotal</td>
        </tr>
      </table>
      <br />
      <table>
        <tr>
          <td class="cart-selector">
            <input type="checkbox" name="" id="">
          </td>
          <td class="cart-product">
            <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
            <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
          </td>
          <td class="cart-price">₱0.00</td>
          <td class="cart-quantity">1</td>
          <td class="cart-subtotal">₱0.00</td>
        </tr>
        <tr>
          <td class="cart-selector">
            <input type="checkbox" name="" id="">
          </td>
          <td class="cart-product">
            <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
            <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
          </td>
          <td class="cart-price">₱0.00</td>
          <td class="cart-quantity">1</td>
          <td class="cart-subtotal">₱0.00</td>
        </tr>
        <tr>
          <td class="cart-selector">
            <input type="checkbox" name="" id="">
          </td>
          <td class="cart-product">
            <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
            <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
          </td>
          <td class="cart-price">₱0.00</td>
          <td class="cart-quantity">1</td>
          <td class="cart-subtotal">₱0.00</td>
        </tr>
        <tr>
          <td class="cart-selector">
            <input type="checkbox" name="" id="">
          </td>
          <td class="cart-product">
            <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
            <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
          </td>
          <td class="cart-price">₱0.00</td>
          <td class="cart-quantity">1</td>
          <td class="cart-subtotal">₱0.00</td>
        </tr>
        <tr>
          <td class="cart-selector">
            <input type="checkbox" name="" id="">
          </td>
          <td class="cart-product">
            <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
            <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
          </td>
          <td class="cart-price">₱0.00</td>
          <td class="cart-quantity">1</td>
          <td class="cart-subtotal">₱0.00</td>
        </tr>
      </table>
      <br />
      <table>
        <tr>
          <td class="cart-selector">
          </td>
          <td class="cart-checkout" colspan="4">
            Total: <span id="cart-checkout-total-price">₱0.00</span>
            <button type="submit" name="checkout">Checkout</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
</body>

</html>
