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
      <a href="checkout.php">
        <img src="images/shopping_bag_white_48dp.svg" alt="checkout" />
      </a>
    </nav>
  </header>
  <div id="checkout">
    <form action="successful-transaction.php" method="post">
      <table>
        <tr>
          <td id="checkout-address" colspan="4">
            <label for="address">Delivery Address</label>
            <br />
            <input type="text" name="address" id="address" placeholder="Address" required />
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
        <?php
        if (isset($_POST['cart-item'])) {
          $cart_item = $_POST['cart-item'];
          // pass cart_item to checkout.php
          echo "<input type='text' name='cart-item' value='" . implode(",", $cart_item) . "' hidden>";
          $sql = "SELECT * FROM cart_item INNER JOIN product ON cart_item.product_id = product.product_id WHERE cart_item_id IN (" . implode(",", $cart_item) . ")";
          $result = mysqli_query($conn, $sql);
          $total = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='checkout-product'>";
            echo "<img src='" . $row['image'] . "' />";
            echo "<p>" . $row['name'] . "</p>";
            echo "</td>";
            echo "<td class='checkout-price'>" . $row['price'] . "</td>";
            echo "<td class='checkout-quantity'>" . $row['quantity'] . "</td>";
            echo "<td class='checkout-subtotal'>₱" . $row['total'] . "</td>";
            echo "</tr>";
            $total += $row['total'];
          }
        } else {
          header("Location: cart.php");
        }
        ?>
      </table>
      <br />
      <table>
        <tr>
          <td class="checkout-payment-method">
            <label for="payment-method">Payment Method</label>
            <input type="radio" name="payment-method" value="Cash on Delivery" checked />
            <label for="cash-on-delivery">Cash on Delivery</label>
            <input type="radio" name="payment-method" value="GCash" />
            <label for="gcash">GCash</label>
          </td>
        </tr>
        <tr>
          <td class="checkout-checkout" colspan="4">
            Total: <span id="checkout-checkout-total-price">₱<?php echo $total; ?></span>
            <input type="text" name="total" value="<?php echo $total; ?>" hidden>
            <input type="submit" value="Place Order">
          </td>
        </tr>
      </table>
    </form>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
</body>

</html>
