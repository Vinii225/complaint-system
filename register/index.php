<?php
$pageTitle = "Register";
define('ALLOW_INCLUDE', true);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    echo "Registration successful!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<section class="register-page">
  <h2>Register</h2>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/auth_register.php';
  ?>
</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>