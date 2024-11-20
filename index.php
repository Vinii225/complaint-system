<?php
$pageTitle = "Home";
define('ALLOW_INCLUDE', true);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="home">
  <div class="container">
    <h1>Ouvidoria Online</h1>
    <form action="try.php" method="POST">
      <label for="nome">Seu Nome:</label>
      <input type="text" id="nome" name="nome" required />

      <label for="email">Seu Email:</label>
      <input type="text" id="email" name="email" required />

      <label for="mensagem">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

      <input type="submit" value="Enviar" />
    </form>
  </div>
</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>