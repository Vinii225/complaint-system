<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}
?>

<form method="POST" class="form login-form">
  <h1>Login</h1>
  <input type="email" name="email" placeholder="Email" required autocomplete="email">
  <input type="password" name="password" placeholder="Password" required autocomplete="off">
  <button type="submit">Login</button>
  <div class="form-helper-buttons">
    <p><a href="/forgot-password">Esqueceu a senha?</a></p>
    <p class="authentication-toggler">
      Don't have an account?
      <a href="/register">Register Here</a>
    </p>
  </div>
</form>