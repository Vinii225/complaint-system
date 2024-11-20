<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "complaint-forum";

$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}
