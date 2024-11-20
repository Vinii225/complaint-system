<?php
$pageTitle = "Home";
define('ALLOW_INCLUDE', true);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="home">
  <h1>Ouvidoria Online</h1>
  <?php
  if (isset($_GET['id'])) {
    $post_id = (int)$_GET['id'];
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/post_read.php';
  } else {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/post_create.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/posts_read.php';
  }
  ?>
</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>