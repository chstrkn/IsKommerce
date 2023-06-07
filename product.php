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
  <div id="product">
    <div id="product-image">
      <img id="main-img" src="images/UPBEAT-University of the Philippines-UP Iloilo Shirt 2016.jpg" alt="" />
    </div>
    <div id="product-info">
      <div id="product-name">UPBEAT-University of the Philippines-UP Iloilo Shirt 2016</div>
      <div id="product-brand">UPBEAT</div>
      <div id="product-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, autem.</div>
      <div id="product-price">₱250.00</div>
      <div id="product-variant">
        <label for="color">Color: </label>
        <input type="radio" name="color" id="maroon" />
        <label for="maroon">Maroon</label>
        <input type="radio" name="color" id="blue" />
        <label for="blue">Blue</label>
        <input type="radio" name="color" id="yellow" />
        <label for="yellow">Yellow</label>
        <input type="radio" name="color" id="biege" />
        <label for="biege">Biege</label>
        <input type="radio" name="color" id="olive" required />
        <label for="olive">Olive</label>
      </div>
      <div class="product-size">
        <label for="size">Size: </label>
        <input type="radio" name="size" id="small" />
        <label for="small">Small</label>
        <input type="radio" name="size" id="medium" />
        <label for="medium">Medium</label>
        <input type="radio" name="size" id="large" />
        <label for="large">Large</label>
      </div>
      <div class="product-quantity">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" max="99" required />
      </div>
      <input type="button" value="Add to Cart" id="add-to-cart" />
    </div>
    <div id="product-thumbnails">
      <img class="product-thumbnail" src="images/UPBEAT-University of the Philippines-UP Iloilo Shirt 2016.jpg" alt="" onclick="changeImage(0)" />
      <img class="product-thumbnail" src="images/UPBEAT-University of the Philippines-UP Open University Shirt.jpg" alt="" onclick="changeImage(1)" />
      <img class="product-thumbnail" src="images/UPBEAT-University of the Philippines-UP shirt 2021 BLACK.jpg" alt="" onclick="changeImage(2)" />
      <img class="product-thumbnail" src="images/UPBEAT-University of the Philippines-UP Visayas Shirt 2017.jpg" alt="" onclick="changeImage(3)" />
    </div>
  </div>
  <footer>Made with love. IsKommerce © 2023.</footer>
  <script src="script.js"></script>
</body>

</html>
