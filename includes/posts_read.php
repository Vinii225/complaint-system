<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}
?>

<section class="posts">
  <h1>Posts</h1>
  <?php
  // Include database connection

  // Query to get all posts
  $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 20";
  include 'db.php'; // Make sure you have the correct path to your db.php file
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Output data for each post
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
      echo "<a href=" . $row['id'] . "><li>";
      echo "<h2>" . htmlspecialchars($row['title']) . "</h2>"; // Escape HTML for safety
      echo "<p><strong>Autor: " . $row['author'] . "</strong></p>";
      echo "<p><em>Postado em: " . $row['created_at'] . "</em></p>";
      echo "</li></a>";
    }
    echo "</ul>";
  } else {
    echo "<h1>Nenhum Post Encontrado.</h1>";
  }
  ?>

</section>