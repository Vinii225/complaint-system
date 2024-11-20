<p class="authentication-toggler">
  <?php
  echo $pageTitle == "Login" ? "Don't have an account?" : "Already have an account?";
  ?>
  <a href='<?php echo $pageTitle == "Login" ? "/register" : "login" ?>'>
    <?php
    echo $pageTitle == "Login" ? "Register Here" : "Login Here";
    ?>
  </a>
</p>