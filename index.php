<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "iskommerce");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (!isset($_SESSION['username'])) {
  header("Location: register.php");
}
$sqlFeatured = "SELECT * FROM product WHERE product_id=6";
$resultFeatured = mysqli_query($conn, $sqlFeatured);
$rowFeatured = mysqli_fetch_assoc($resultFeatured);
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
    <a id="featured-image" href="product.php?product_id=<?php echo $rowFeatured['product_id']; ?>">
      <img src="<?php echo $rowFeatured['image']; ?>" alt="Featured Product" />
    </a>
  </div>
  <div id="categories">
    <h2>Categories</h2>
    <table>
      <td>
        <a href="products.php">
          <img src="<?php echo $rowFeatured['image']; ?>" alt="All Products" />
          <b>All Products</b>
        </a>
      </td>
      <?php
      $sql = "SELECT * FROM product_category INNER JOIN product ON product_category.category_id = product.category_id GROUP BY product_category.category_id";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<td>";
        echo "<a href='products.php?category_id=" . $row['category_id'] . "'>";
        echo "<img src='" . $row['image'] . "' />";
        echo "<b>" . $row['category_name'] . "</b>";
        echo "</a>";
        echo "</td>";
      }
      ?>
    </table>
  </div>
  <div id="products">
    <h2>Products</h2>
    <table>
      <?php
      $sql = "SELECT * FROM product";
      $result = mysqli_query($conn, $sql);
      $count = 0;
      while ($row = mysqli_fetch_assoc($result) and $count < 12) {
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
      ?>
    </table>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
</body>

</html>
