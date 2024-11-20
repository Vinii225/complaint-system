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
</head>

<body>
  <?php
  $links = [
    "Home" => "/",
    "Forum" => "/forum",
    "Login" => "/login",
    "Register" => "/register",
    "About" => "/about",
  ];
  ?>
  <header>
    <nav>
      <ul>
        <?php
        foreach ($links as $title => $link) {
          echo "<a href='$link'><li>$title</a></a>";
        }
        ?>
      </ul>
    </nav>
  </header>