<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}

$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
$disabledString = "disabled style=cursor:not-allowed";
