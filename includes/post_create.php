<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

include './db.php';

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanitizar e pegar os dados do formulário
  $title = htmlspecialchars(trim($_POST['title']));
  $body = htmlspecialchars(trim($_POST['body']));
  $author = $_SESSION['user_id'];

  if (!$isLoggedIn) {
    echo "<span class=unlogged-warn>Faca Login Antes de Criar uma Votacao</span>";
  } else if (!empty($title) && !empty($body)) {
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
<section class="hero-section">
  <img src="hero-image.jpg" alt="Foto de Trabalhadores">
  <form method="POST" class="form" id="post-form">
    <h1>Criar Post</h1>
    <?php
    if (!$isLoggedIn) {
      echo "<span class=unlogged-warn><a href=login.php>Faca Login</a> Antes de Criar uma Votacao</span>";
    }
    ?>
    <input type="text" id="title" name="title" placeholder="Titulo" required
      <?php echo $isLoggedIn ? "" : $disabledString; ?> />
    <textarea id="body" name="body" placeholder="Mensagem" rows="5" required
      <?php echo $isLoggedIn ? "" : $disabledString; ?>>
  </textarea>
    <button type="submit"
      <?php echo $isLoggedIn ? "" : $disabledString; ?>>
      Enviar Post</button>
  </form>
</section>