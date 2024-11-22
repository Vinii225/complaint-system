<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

?>
<?php
// Iniciar a sessão e incluir o arquivo de conexão com o banco
include './db.php';

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanitizar e pegar os dados do formulário
  $title = htmlspecialchars(trim($_POST['title']));
  $body = htmlspecialchars(trim($_POST['body']));
  $author = $_SESSION['user_id'];

  // Verificar se os campos não estão vazios
  if (!empty($title) && !empty($body)) {
    // Preparar a query para inserir o post no banco de dados
    $sql = "INSERT INTO posts (author, title, body) VALUES ('$author', '$title', '$body')";

    if ($conn->query($sql) === TRUE) {
      $last_inserted_id = $conn->insert_id; // Função para obter o ID do último registro inserido

      // Redirecionar para a página do post, passando o ID via URL
    } else {
      echo "Erro ao criar post: " . $conn->error;
    }
  } else {
    echo "Por favor, preencha todos os campos!";
  }
}
?>
<form method="POST" class="form post-form">
  <h1>Criar Post</h1>
  <input type="text" id="title" name="title" placeholder="Titulo" required />
  <textarea id="body" name="body" placeholder="Mensagem" rows="5" required></textarea>
  <button type="submit">Enviar Post</button>
</form>