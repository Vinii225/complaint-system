<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}
?>

<form method="POST" class="form register-form">
  <h1>Register</h1>
  <input type="text" id="name" name="name" placeholder="Nome Completo" required>
  <input type="email" id="email" name="email" placeholder="Email" required>
  <input type="password" id="password" name="password" placeholder="Password" required>
  <button type="submit">Register</button>
  <div class="form-helper-buttons">
    <p class="authentication-toggler">
      Already have an account?
      <a href="/login">Login Here</a>
    </p>
  </div>
</form>