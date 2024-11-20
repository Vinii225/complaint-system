<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}
?>

<form method="POST">
  <input type="text" name="name" placeholder="Nome Completo" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Register</button>
  <p class="authentication-toggler">
    Already have an account?
    <a href="/login">Login Here</a>
  </p>
</form>