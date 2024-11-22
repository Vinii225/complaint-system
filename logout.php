<?php
$pageTitle = "Logout";
define('ALLOW_INCLUDE', true);
include './includes/header.php';
?>

<section class="logout-page">
  <h1>Logging out</h1>
  <?php
  $sessionDestroyed = session_destroy();
  if ($sessionDestroyed) {
    echo "<h2>Session Destroyed Successfully</h2>";
  } else {
    echo "<h2>Failed to Destroy Session</h2>";
  }
  ?>
</section>

<?php
include './includes/footer.php';
?>