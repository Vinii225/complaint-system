<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

session_start();

include './includes/auth.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    echo "Ouvidoria Online";
    echo isset($pageTitle) ? " - $pageTitle" : "";
    ?>
  </title>
  <!--
  Erro ao usar no XAMPP
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/navbar.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/forms.css">
  <link rel="stylesheet" href="styles/posts.css">
  <link rel="stylesheet" href="styles/about.css">
  -->
  <style>
    <?php
    include "./styles/styles.php";
    echo isset($styles_import) ? $styles_import : "* {margin: 0;}";
    ?>
  </style>
</head>

<body>
  <?php
  $links = [
    "Home" => "home.php",
    "About" => "about.php",
  ];
  $unloggedAuthLinks = [
    "Login" => "login.php",
    "Register" => "register.php",
  ];
  $loggedAuthLinks = [
    "Profile" => "profile.php",
    "Logout" => "logout.php",
  ];
  ?>
  <header class="navbar-container">
    <img src="" alt="Ouvidoria Logo">
    <nav class="navbar">
      <ul class="nav-links">
        <?php
        foreach ($links as $title => $link) {
          echo "<a href='$link'><li>$title</a></a>";
        }
        ?>
      </ul>
      <ul class="auth-links">
        <?php
        if ($isLoggedIn) {
          foreach ($loggedAuthLinks as $title => $link) {
            echo "<a href='$link'><li>$title</a></a>";
          }
        } else {
          foreach ($unloggedAuthLinks as $title => $link) {
            echo "<a href='$link'><li>$title</a></a>";
          }
        }
        ?>
      </ul>
    </nav>
  </header>