<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

$footerLinks = [
  "Home" => "home.php",
  "About" => "about.php",
];
$socialMediaLinks = [
  "Jezreel" => "https://github.com/woragis",
  "Vini" => "https://github.com/Vinii225",
  "Carlos" => "https://github.com/carlos_humberto",
  "Roberio" => "https://github.com/roberinho",
  "Daniel" => "https://github.com/daniel_onix_fala_merda",
  "Arthur" => "https://github.com/arthur",
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

<?php
include "./scripts/scripts.php";
?>

</body>

</html>