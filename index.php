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
  <div id="featured">
    <a id="featured-image" href="product.php">
      <img src="images/UPBEAT-University of the Philippines-UP shirt 2022 BLACK.jpg" alt="Featured Product" />
    </a>
  </div>
  <div id="categories">
    <h2>Categories</h2>
    <table>
      <tr>
        <td>
          <a href="products.php">
            <img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="All Products" />
            <b>All Products</b>
          </a>
        </td>
        <td>
          <a href="products.php"><img src="images/UPBEAT-University of the Philippines-UP Iloilo Shirt 2016.jpg" alt="T-Shirts" />
            <b>T-Shirts</b>
          </a>
        </td>
        <td>
          <a href="products.php"><img src="images/UPBEAT-University of the Philippines-UP Open University Shirt.jpg" alt="Hoodies" />
            <b>Hoodies</b>
          </a>
        </td>
        <td>
          <a href="products.php"><img src="images/UPBEAT-University of the Philippines-UP shirt 2021 BLACK.jpg" alt="Jackets" />
            <b>Jackets</b>
          </a>
        </td>
        <td>
          <a href="products.php"><img src="images/UPBEAT-University of the Philippines-UP shirt 2022 BLACK.jpg" alt="Lanyards" />
            <b>Lanyards</b>
          </a>
        </td>
        <td>
          <a href="products.php"><img src="images/UPBEAT-University of the Philippines-UP Visayas Shirt 2017.jpg" alt="Cap" />
            <b>Cap</b>
          </a>
        </td>
        <td>
          <a href="products.php"><img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Sablay" />
            <b>Sablay</b>
          </a>
        </td>
        <td>
          <a href="products.php"><img src="images/UPBEAT-University of the Philippines-UP Iloilo Shirt 2016.jpg" alt="Kids" />
            <b>Kids</b>
          </a>
        </td>
      </tr>
    </table>
  </div>
  <div id="products">
    <h2>Products</h2>
    <table>
      <tr>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product 1" />
            UPBEAT-University of the Philippines-UP Baguio Shirt 2016
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP Iloilo Shirt 2016.jpg" alt="Product 2" />
            UPBEAT-University of the Philippines-UP Iloilo Shirt 2016
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP Open University Shirt.jpg" alt="Product 3" />
            UPBEAT-University of the Philippines-UP Open University Shirt
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP shirt 2021 BLACK.jpg" alt="Product 4" />
            UPBEAT-University of the Philippines-UP shirt 2021 BLACK
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP shirt 2022 BLACK.jpg" alt="Product 5" />
            UPBEAT-University of the Philippines-UP shirt 2022 BLACK
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP Visayas Shirt 2017.jpg" alt="Product 6" />
            UPBEAT-University of the Philippines-UP Visayas Shirt 2017
            <br />
            <b>₱499.00</b>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg" alt="Product 1" />
            UPBEAT-University of the Philippines-UP Baguio Shirt 2016
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP Iloilo Shirt 2016.jpg" alt="Product 2" />
            UPBEAT-University of the Philippines-UP Iloilo Shirt 2016
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP Open University Shirt.jpg" alt="Product 3" />
            UPBEAT-University of the Philippines-UP Open University Shirt
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP shirt 2021 BLACK.jpg" alt="Product 4" />
            UPBEAT-University of the Philippines-UP shirt 2021 BLACK
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP shirt 2022 BLACK.jpg" alt="Product 5" />
            UPBEAT-University of the Philippines-UP shirt 2022 BLACK
            <br />
            <b>₱499.00</b>
          </a>
        </td>
        <td>
          <a href="product.php"><img src="images/UPBEAT-University of the Philippines-UP Visayas Shirt 2017.jpg" alt="Product 6" />
            UPBEAT-University of the Philippines-UP Visayas Shirt 2017
            <br />
            <b>₱499.00</b>
          </a>
        </td>
      </tr>
    </table>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
</body>

</html>
