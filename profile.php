<?php
$pageTitle = "Perfil";
define('ALLOW_INCLUDE', true);
include './includes/header.php';
?>

<section class="profile-page">
  <?php
  include "./includes/auth.php";
  if ($isLoggedIn) {
    include "./includes/logged_in_profile.php";
  } else {
    include "./includes/unlogged_profile.php";
  }
  ?>
</section>

<?php
include './includes/footer.php';
?>