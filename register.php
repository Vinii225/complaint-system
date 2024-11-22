<?php
$pageTitle = "Registrar-se";
define('ALLOW_INCLUDE', true);
include './includes/header.php';
?>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    echo "Registration successful!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<section class="register-page">
  <?php
  include './includes/auth.php';
  if (!$isLoggedIn) {
    include './includes/auth_register_form.php';
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