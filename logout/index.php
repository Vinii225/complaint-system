<?php
$pageTitle = "Register";
define('ALLOW_INCLUDE', true);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>


<h1>Logging out</h1>
<?php
$sessionDestroyed = session_destroy();
if ($sessionDestroyed) {
  echo "<h2>Session Destroyed Successfully</h2>";
} else {
  echo "<h2>Failed to Destroy Session</h2>";
}
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>