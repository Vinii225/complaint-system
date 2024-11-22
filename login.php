<?php
$pageTitle = "Login";
define('ALLOW_INCLUDE', true);
include './includes/header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email'";
  include 'db.php';
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['logged_in'] = true;
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_name'] = $user['name'];
      echo "Login successful! Welcome, " . $_SESSION['user_name'];
    } else {
      echo "Invalid password.";
    }
  } else {
    echo "No user found with that email.";
  }
}
?>

<section class="login-page">
  <?php
  include './includes/auth.php';
  if (!$isLoggedIn) {
    include './includes/auth_login_form.php';
  } else {
    echo "<section class=page-in-information-state>";
    echo "<h1>You are already logged in</h1>";
    echo "</section>";
  }
  ?>
</section>

<?php
include './includes/footer.php';
?>