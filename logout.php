<?php
$pageTitle = "Logout";
define('ALLOW_INCLUDE', true);
include './includes/header.php';
?>

<section class="logout-page">
  <h1>Logging out</h1>
  <?php
  include './includes/auth.php';
  if ($isLoggedIn) {
    session_destroy();
    echo "<h2>Sessao destruida com sucesso</h2>";
  } else {
    echo "<section class=page-in-information-state>";
    echo "<h1>You are not logged in</h1>";
    echo "<p>login <a href=login.php>here</a></p>";
    echo "</section>";
  }
  ?>
</section>

<?php
include './includes/footer.php';
?>