<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}
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
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/navbar.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/forms.css">
</head>

<body>
  <?php
  $links = [
    "Home" => "/",
    "Forum" => "/forum",
    "About" => "/about",
  ];
  $unloggedAuthLinks = [
    "Login" => "/login",
    "Register" => "/register",
  ];
  $loggedAuthLinks = [
    "Profile" => "/profile",
    "Logout" => "/logout",
  ];
  ?>
  <header class="navbar-container">
    <img src="oi" alt="Ouvidoria Logo">
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
        $session_status = session_status();
        if ($session_status) {
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