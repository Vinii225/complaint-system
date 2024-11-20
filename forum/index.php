<?php
$pageTitle = "Forum";
define('ALLOW_INCLUDE', true);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="forum-page">
  <h1>Reclamacoes</h1>
  <section class="complaints-container">

    <?php
    // Include database connection
    include 'db.php'; // Make sure you have the correct path to your db.php file

    // Query to get all posts
    $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 20";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Output data for each post
      echo "<h1>Ultimas Postagens</h1>";
      echo "<ul>";
      while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>"; // Escape HTML for safety
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>"; // Display content with line breaks
        echo "<p><em>Postado em: " . $row['created_at'] . "</em></p>";
        echo "</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>Nenhum Post Encontrado.</p>";
    }
    ?>
  </section>
</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>