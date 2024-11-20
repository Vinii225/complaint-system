<?php
// Iniciar a sessão e incluir o arquivo de conexão com o banco
session_start();
include 'db.php'; // Caminho correto para o seu db.php

// Verificar se o ID foi passado na URL
if (isset($_GET['id'])) {
  $post_id = (int)$_GET['id']; // Sanitizar o id da URL

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
  exit;
}
