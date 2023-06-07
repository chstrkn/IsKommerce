<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "iskommerce");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (!isset($_SESSION['username'])) {
  header("Location: register.php");
}
$product_id = $_GET['product_id'];
$sql = "SELECT * FROM product WHERE product_id = $product_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['add-to-cart'])) {
  $quantity = $_POST['quantity'];
  $sql = "SELECT user_id FROM user WHERE username = '" . $_SESSION['username'] . "'";
  $user_id = mysqli_query($conn, $sql);
  $user_id = mysqli_fetch_assoc($user_id)['user_id'];
  $sql = "INSERT INTO cart_item (user_id, product_id, quantity, total) VALUES ($user_id, $product_id, $quantity, $quantity * " . $row['price'] . ")";
  mysqli_query($conn, $sql);
  echo "<script>alert('Added to cart!')</script>";
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
    function changeImage(n) {
      document.getElementById("main-img").src = document.getElementsByClassName("product-thumbnail")[n].src;
    }
  </script>
</head>

<body id="demo">
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
  <div id="product">
    <div id="product-image">
      <img id="main-img" src="<?php echo $row['image']; ?>" alt="" />
    </div>
    <div id="product-info">
      <div id="product-name"><?php echo $row['name']; ?></div>
      <div id="product-brand">UPBEAT</div>
      <div id="product-description"><?php echo $row['description']; ?></div>
      <div id="product-price">₱<?php echo $row['price']; ?></div>
      <form class="product-quantity" method="post">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" max="99" value="1" required />
        <br />
        <input type="submit" name="add-to-cart" value="Add to Cart" />
      </form>
    </div>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
  <script src="script.js"></script>
</body>

</html>
