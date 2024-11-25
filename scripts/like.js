function like(post_id, user_id) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "like.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("post_id=" + post_id + "&user_id=" + user_id);
  console.log("post id: " + post_id);
  console.log("user id: " + user_id);

  xhr.onload = function () {
    if (xhr.status == 200) {
      alert("Voto enviado com sucesso: " + xhr.responseText);
      location.reload();
    } else {
      alert("Erro ao salvar like.");
    }
  };
}
