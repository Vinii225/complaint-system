<?php
$pageTitle = "Login";
define('ALLOW_INCLUDE', true);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="login">
  <div class="wrapper">
    <form action="try.php">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="username" />
        <i class="bx bxs-user"></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" />
        <i class="bx bxs-lock-alt"></i>
      </div>
      <div class="remember-forget">
        <label><input type="checkbox" /> Remember me</label>
        <a href="#"> Forget Password?</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have a account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>

</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>