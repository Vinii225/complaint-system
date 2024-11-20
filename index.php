<?php
$pageTitle = "Home";
define('ALLOW_INCLUDE', true);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="home">
  <div class="container">
    <h1>Ouvidoria Online</h1>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/forms/post/create.php';
    ?>
    <div>
</section>

<?php
if (isset($_GET['id'])) {
  $post_id = (int)$_GET['id']; // Sanitizar o id da URL
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/post.php';
} else {
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/posts.php';
}
?>


<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>