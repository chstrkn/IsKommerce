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
  </header>
  <div id="successful-transaction">
    <img src="images/check_circle_white_48dp.svg" alt="Check" />
    <p id="message">You have successfully placed your order!</p>
    <hr />
    <?php
    if (isset($_POST['address'])) {
      $address = $_POST['address'];
      $payment_method = $_POST['payment-method'];
      $total = $_POST['total'];
      $sql = "SELECT user_id FROM user WHERE username = '" . $_SESSION['username'] . "'";
      $user_id = mysqli_query($conn, $sql);
      $user_id = mysqli_fetch_assoc($user_id)['user_id'];
      $sql = "INSERT INTO order_details (user_id, total, payment_method, delivery_address) VALUES ($user_id, $total, '$payment_method', '$address')";
      mysqli_query($conn, $sql);
      $order_id = mysqli_insert_id($conn);
      if (isset($_POST['cart-item'])) {
        $selectedItems = $_POST['cart-item'];
        $sql = "SELECT * FROM cart_item WHERE cart_item_id IN ($selectedItems)";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $sql = "DELETE FROM cart_item WHERE cart_item_id = " . $row['cart_item_id'];
          mysqli_query($conn, $sql);
        }
      }
    }
    ?>
    <p>Order ID: <?php echo $order_id; ?></p>
    <hr />
    <p>Order Total: ₱<?php echo $total; ?></p>
    <hr />
    <p>Payment Method: <?php echo $payment_method; ?></p>
    <hr />
    <p>Delivery Address: <?php echo $address; ?></p>
    <hr />
    <p>For updates, please contact 09876298700.</p>
    

    <br />
    <button type="button" onclick="location.href='index.php'">Home</button>
  </div>
  <footer>Made with love and PHP. IsKommerce © 2023.</footer>
</body>

</html>
