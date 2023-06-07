<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "iskommerce");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (!isset($_SESSION['username'])) {
  header("Location: register.php");
}
if (isset($_POST['account'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_SESSION['username'];
  $sql = "UPDATE user SET name='$name', email='$email' WHERE username='$username'";
  if (mysqli_query($conn, $sql)) {
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    echo "<script>alert('Account updated successfully.')</script>";
  } else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
  }
  mysqli_close($conn);
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
    function account() {
      var name = document.forms["account-form"]["name"].value;
      var email = document.forms["account-form"]["email"].value;
      if (name) {
        if (name.length > 50) {
          alert("Name must be less than 50 characters.");
          return false;
        }
      }
      if (email) {
        if (email.length > 50) {
          alert("Email must be less than 50 characters.");
          return false;
        }
      }
      return true;
    }
  </script>
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
  <div id="account">
    <form id="account-form" method="post">
      <h2>My Account</h2>
      <label for="username">Username:</label>
      <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" disabled />
      <br />
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="Name" value="<?php echo $_SESSION['name']; ?>" />
      <br />
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" />
      <br />
      <div id="submit">
        <input type="button" value="Back" onclick="history.back()" />
        <input type="submit" name="account" value="Save" onclick="return account()" />
        <input type="button" value="Log Out" onclick="location.href='logout.php'" />
      </div>
    </form>
  </div>
  <footer>Made with love. IsKommerce © 2023.</footer>
</body>

</html>
