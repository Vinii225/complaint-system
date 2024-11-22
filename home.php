<?php
$pageTitle = "Home";
define('ALLOW_INCLUDE', true);
include './includes/header.php';
?>

<section class="home">
  <?php
  include './includes/post_create.php';
  include './includes/posts_read.php';
  ?>
</section>

<?php
include './includes/footer.php';
?>