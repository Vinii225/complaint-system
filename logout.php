<?php
$pageTitle = "Logout";
define('ALLOW_INCLUDE', true);
include './includes/header.php';
?>

<section class="logout-page">
  <h1>Logging out</h1>
  <?php
  if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    session_destroy();
    echo "<h2>Sessao destruida com sucesso</h2>";
  } else {
    echo "<h2>Sessao nao iniciada ainda</h2>";
  }
  ?>
</section>

<?php
include './includes/footer.php';
?>