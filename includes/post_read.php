<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

if (isset($postId)) {
  // Preparar a consulta para pegar os dados do post
  $sql = "SELECT * FROM posts WHERE id = $post_id";
  $result = $conn->query($sql);

  // Verificar se o post foi encontrado
  if ($result->num_rows > 0) {
    $post = $result->fetch_assoc();
  } else {
    echo "Post não encontrado!";
    exit;
  }
} else {
  echo "ID não fornecido!";
}

?>
<h1><?php echo htmlspecialchars($post['title']); ?></h1>
<p><strong>Conteúdo:</strong></p>
<p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
<p><strong>Data de Criação:</strong> <?php echo $post['created_at']; ?></p>

<!-- Link para voltar à lista de posts -->
<p><a href="/">Voltar à lista de posts</a></p>