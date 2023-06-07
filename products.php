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
  <div id="products">
    <h2>Products</h2>
    <table>
      <th style="visibility: hidden"></th>
      <th style="visibility: hidden"></th>
      <th style="visibility: hidden"></th>
      <th style="visibility: hidden"></th>
      <th style="visibility: hidden"></th>
      <th style="visibility: hidden"></th>
      <?php
      if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $sql = "SELECT * FROM product WHERE category_id = $category_id";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          if ($count % 6 == 0) {
            echo "<tr>";
          }
          echo "<td>";
          echo "<a href='product.php?product_id=" . $row['product_id'] . "'>";
          echo "<img src='" . $row['image'] . "' />";
          echo $row['name'];
          echo "<br />";
          echo "<b>₱" . $row['price'] . "</b>";
          echo "</a>";
          echo "</td>";
          if ($count % 6 == 5) {
            echo "</tr>";
          }
          $count++;
        }
        if ($count < 6) {
          echo "<tr style='visibility: hidden; height: 310px'></tr>";
          $count++;
        }
      } elseif (isset($_GET['search'])) {
        $search = $_GET['search'];
        $sql = "SELECT * FROM product WHERE name LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          if ($count % 6 == 0) {
            echo "<tr>";
          }
          echo "<td>";
          echo "<a href='product.php?product_id=" . $row['product_id'] . "'>";
          echo "<img src='" . $row['image'] . "' />";
          echo $row['name'];
          echo "<br />";
          echo "<b>₱" . $row['price'] . "</b>";
          echo "</a>";
          echo "</td>";
          if ($count % 6 == 5) {
            echo "</tr>";
          }
          $count++;
        }
        if ($count < 6) {
          echo "<tr style='visibility: hidden; height: 310px'></tr>";
          $count++;
        }
      } else {
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          if ($count % 6 == 0) {
            echo "<tr>";
          }
          echo "<td>";
          echo "<a href='product.php?product_id=" . $row['product_id'] . "'>";
          echo "<img src='" . $row['image'] . "' />";
          echo $row['name'];
          echo "<br />";
          echo "<b>₱" . $row['price'] . "</b>";
          echo "</a>";
          echo "</td>";
          if ($count % 6 == 5) {
            echo "</tr>";
          }
          $count++;
        }
      }
      ?>
    </table>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
</body>

</html>
