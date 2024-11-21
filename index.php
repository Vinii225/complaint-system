<?php
$pageTitle = "Home";
define('ALLOW_INCLUDE', true);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="home">
  <?php
  if (isset($_GET['id'])) {
    $post_id = (int)$_GET['id'];
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/post_read.php';
  } else {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/post_create.php';
  }
  ?>

  <h1 class="posts-title">Posts</h1>
  <section class=posts-container>
    <?php
    $postTest = "
    <div class=\"listed-post\" onclick='readPost(2)'>
      <h1 class=\"title\">Post Title</h1>
      <p class=\"author\">Jezreel</p>
      <a href='/?id=1'>Entrar no Post</a>
    </div>";
    for ($i = 0; $i < 30; $i++) {
      echo $postTest;
    }
    ?>
  </section>
</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>