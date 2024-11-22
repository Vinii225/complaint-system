<?php
$pageTitle = "Post";
define('ALLOW_INCLUDE', true);
include './includes/header.php';
?>

<section class="post-page">
  <h1 class="title">Postagem</h1>
  <?php
  if (isset($_GET["id"])) {
    $postId = $_GET["id"];
    $sql = "SELECT * FROM posts WHERE id = $postId";
    include 'db.php';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<ul>";
      while ($row = $result->fetch_assoc()) {
        $sql = "SELECT * FROM users WHERE id = $row[author]";
        $authorName = $conn->query($sql)->fetch_assoc()['name'];
        echo "
          <li class='listed-post'>
            <a href='post.php?id=$row[id]'>
            <h1 class='title'>" . $row['title'] . "</h1>
            <p class='author'><strong>Autor:</strong> " . $authorName . "</p>
            <p class='created-date'><strong><em>Postado em: " . $row['created_at'] . "</em></strong></p>
            <p class='created-date'><strong><em>Ultima vez atualizado em: " . $row['updated_at'] . "</em></strong></p>
            <p>" . $row['body'] . "</p>
            </a>
          </li>";
      }
      echo "</ul>";
    } else {
      echo "<h1>Nenhum Post Encontrado.</h1>";
    }
  } else {
    echo "<section class=page-in-information-state>";
    echo "<p>Voce precisa fornecer um id para encontrar o post</p>";
    echo "</section>";
  }
  ?>
</section>

<?php
include './includes/footer.php';
?>