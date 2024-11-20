<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

$footerLinks = [
  "Home" => "/",
  "Forum" => "/forum",
  "About" => "/about",
];
$socialMediaLinks = [
  "Jezreel" => "https://github.com/woragis",
  "Vini" => "https://github.com/Vinii225",
  "Carlos" => "https://github.com/",
  "Roberio" => "https://github.com/",
];
?>
<footer class="footer-section">
  <section class="page-links">
    <h3>Our Pages</h3>
    <ul>
      <?php
      foreach ($footerLinks as $title => $link) {
        echo "<a href='$link'><li>$title</li></a>";
      }
      ?>
    </ul>
  </section>
  <section class="social-media">
    <h3>Team Github</h3>
    <ul>
      <?php
      foreach ($socialMediaLinks as $title => $link) {
        echo "<a href='$link'><li>$title</li></a>";
      }
      ?>
    </ul>
  </section>
</footer>

</body>

</html>