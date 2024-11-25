<?php
define('ALLOW_INCLUDE', true);
// Verifica se os dados foram recebidos via POST
if (isset($_POST['post_id']) && isset($_POST['user_id'])) {
  include 'db.php';
  $post_id = $_POST['post_id'];
  $user_id = $_POST['user_id'];

  $get_like_post_id = "SELECT post_id FROM likes
    WHERE user_id = '$user_id' AND post_id = '$post_id'
    LIMIT 1;";

  $result = $conn->query($get_like_post_id);

  // User has already voted
  if ($result->num_rows > 0) {
    "Se for achado um like no post_id da request, o like sera retirado";
    $delete_post_like = "UPDATE posts SET likes = likes - 1 WHERE id = '$post_id';";
    $delete_like = "DELETE FROM likes WHERE user_id = '$user_id' AND post_id = '$post_id';";
    "Executar Queries";
    $conn->query($delete_post_like);
    $conn->query($delete_like);
    echo "Like Deletado";
  } else {
    "Situacao em que usuario nunca deu like nesse post";
    $increment_like = "UPDATE posts SET likes = likes + 1 WHERE id = '$post_id';";
    $insert_new_like = "INSERT INTO likes (user_id, post_id) VALUES ('$user_id', '$post_id');";
    "Executar Queries";
    $conn->query($increment_like);
    $conn->query($insert_new_like);
    echo "Like inserido";
  }
} else {
  echo "Erro: Dados não recebidos.";
}
