<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

if (isset($postId)) {
  // Preparar a consulta para pegar os dados do post
  $postSql = "SELECT * FROM posts WHERE id = $post_id";
  $postResult = $conn->query($postSql);
  $post = $postResult->fetch_assoc();
  $userSql = "SELECT * FROM posts WHERE id = $post_id";
  $userResult = $conn->query($userSql);
  $user = $postResult->fetch_assoc();

  // Verificar se o post foi encontrado
  if ($postResult->num_rows > 0) {
  } else {
    echo "Post não encontrado!";
  }
  if ($post['author'] != $user['id']) {
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
  $body = htmlspecialchars(trim($_POST['body']));

  // Verificar se os campos não estão vazios
  if (!empty($title) && !empty($body)) {
    // Preparar a query para inserir o post no banco de dados
    $sql = "INSERT INTO posts (title, body) VALUES ('$title', '$body')";

    if ($conn->query($sql) === TRUE) {
      $last_inserted_id = $conn->insert_id; // Função para obter o ID do último registro inserido

      // Redirecionar para a página do post, passando o ID via URL
      header("Location: /?id=$last_inserted_id");
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
  <h1>Editar Post</h1>
  <input type="text" name="title" id="title" placeholder="Titulo" required>
  <textarea name="content" id="content" placeholder="Mensagem" rows="5" required></textarea>
  <button type="submit">Atualizar Post</button>
</form>