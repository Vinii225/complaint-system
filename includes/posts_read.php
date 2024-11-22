<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}
?>

<section class="posts">
  <h1 class="posts-title">Posts</h1>
  <section class=posts-container>
    <?php
    $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 20";
    include 'db.php';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<ul>";
      while ($row = $result->fetch_assoc()) {
        $sql = "SELECT * FROM users WHERE id = $row[author]";
        $authorName = $conn->query($sql)->fetch_assoc()['name'];
        echo "
          <li class='listed-post'>
            <a href='$row[id]'>
            <h1 class='title'>" . $row['title'] . "</h1>
            <p class='author'><strong>Autor:</strong> " . $authorName . "</p>
            <p class='created-date'><strong><em>Postado em: " . $row['created_at'] . "</em></strong></p>
            </a>
          </li>";
      }
      echo "</ul>";
    } else {
      echo "<h1>Nenhum Post Encontrado.</h1>";
    }
    ?>
  </section>

</section>