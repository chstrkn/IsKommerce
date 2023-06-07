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
  <div id="cart">
    <table>
      <tr>
        <td class="cart-selector">
          <button type="button">
            <img src="images/check_box_outline_blank_white_48dp.svg" alt="Select
              All" />
          </button>
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
          <button type="button">
            <img src="images/check_box_outline_blank_white_48dp.svg" alt="Select" />
          </button>
        </td>
        <td class="cart-product">
          <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
          <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
        </td>
        <td class="cart-price">₱0.00</td>
        <td class="cart-quantity">
          <input type="number" name="quantity" min="1" max="99" value="1" />
        </td>
        <td class="cart-subtotal">₱0.00</td>
      </tr>
      <tr>
        <td class="cart-selector">
          <button type="button">
            <img src="images/check_box_outline_blank_white_48dp.svg" alt="Select" />
          </button>
        </td>
        <td class="cart-product">
          <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
          <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
        </td>
        <td class="cart-price">₱0.00</td>
        <td class="cart-quantity">
          <input type="number" name="quantity" min="1" max="99" value="1" />
        </td>
        <td class="cart-subtotal">₱0.00</td>
      </tr>
      <tr>
        <td class="cart-selector">
          <button type="button">
            <img src="images/check_box_outline_blank_white_48dp.svg" alt="Select" />
          </button>
        </td>
        <td class="cart-product">
          <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
          <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
        </td>
        <td class="cart-price">₱0.00</td>
        <td class="cart-quantity">
          <input type="number" name="quantity" min="1" max="99" value="1" />
        </td>
        <td class="cart-subtotal">₱0.00</td>
      </tr>
      <tr>
        <td class="cart-selector">
          <button type="button">
            <img src="images/check_box_outline_blank_white_48dp.svg" alt="Select" />
          </button>
        </td>
        <td class="cart-product">
          <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
          <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
        </td>
        <td class="cart-price">₱0.00</td>
        <td class="cart-quantity">
          <input type="number" name="quantity" min="1" max="99" value="1" />
        </td>
        <td class="cart-subtotal">₱0.00</td>
      </tr>
      <tr>
        <td class="cart-selector">
          <button type="button">
            <img src="images/check_box_outline_blank_white_48dp.svg" alt="Select" />
          </button>
        </td>
        <td class="cart-product">
          <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product" />
          <p>UPBEAT-University of the Philippines-UP Baguio Shirt 2016</p>
        </td>
        <td class="cart-price">₱0.00</td>
        <td class="cart-quantity">
          <input type="number" name="quantity" min="1" max="99" value="1" />
        </td>
        <td class="cart-subtotal">₱0.00</td>
      </tr>
    </table>
    <br />
    <table>
      <tr>
        <td class="cart-selector">
          <button type="button">
            <img src="images/check_box_outline_blank_white_48dp.svg" alt="Select
                All" />
          </button>
        </td>
        <td class="cart-checkout" colspan="4">
          Total: <span id="cart-checkout-total-price">₱0.00</span>
          <button type="button" onclick="location.href='checkout.html'">Checkout</button>
        </td>
      </tr>
    </table>
  </div>
  <footer>Made with love. IsKommerce © 2023.</footer>
</body>

</html>
