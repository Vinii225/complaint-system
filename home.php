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

  <h1 class="posts-title">Posts</h1>
  <section class=posts-container>
    <?php
    $postTest = "
    <div class=\"listed-post\" onclick='readPost(2)'>
      <h1 class=\"title\">Post Title</h1>
      <p class=\"author\">Jezreel</p>
      <a href='home.php?id=1'>Entrar no Post</a>
    </div>";
    for ($i = 0; $i < 30; $i++) {
      echo $postTest;
    }
    ?>
  </section>
</section>

<?php
include './includes/footer.php';
?>