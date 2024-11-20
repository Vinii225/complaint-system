<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

?>
<?php
// Iniciar a sessão e incluir o arquivo de conexão com o banco

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
  <input type="text" id="nome" name="nome" placeholder="Nome Completo" required />
  <input type="text" id="email" name="email" placeholder="Email" required />
  <label for="mensagem">Mensagem:</label>
  <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

  <input type="submit" value="Enviar" />
</form>