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
  }
  if ($post['author'] != $user['username']) {
    echo "Esse post nao /e de sua autoria, voce nao pode edita-lo";
  }
}
// Iniciar a sessão e incluir o arquivo de conexão com o banco
session_start();
include 'db.php'; // Caminho correto para o seu db.php

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanitizar e pegar os dados do formulário
  $title = htmlspecialchars(trim($_POST['title']));
  $content = htmlspecialchars(trim($_POST['content']));

  // Verificar se os campos não estão vazios
  if (!empty($title) && !empty($content)) {
    // Preparar a query para inserir o post no banco de dados
    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
      $last_inserted_id = $conn->insert_id; // Função para obter o ID do último registro inserido

      // Redirecionar para a página do post, passando o ID via URL
      header("Location: view_post.php?id=$last_inserted_id");
      exit; // Garantir que o código posterior não seja executado
    } else {
      echo "Erro ao criar post: " . $conn->error;
    }
  } else {
    echo "Por favor, preencha todos os campos!";
  }
}
?>

<form method="POST">
  <div>
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required>
  </div>
  <div>
    <label for="content">Conteúdo:</label>
    <textarea name="content" id="content" rows="5" required></textarea>
  </div>
  <div>
    <button type="submit">Criar Post</button>
  </div>
</form>