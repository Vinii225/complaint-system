<?php
if (!defined('ALLOW_INCLUDE')) {
  die('Direct access not allowed!');
}
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "complaint_forum";

$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}

$sql_users = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
";

$sql_posts = "CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    likes INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author) REFERENCES users(id) ON DELETE CASCADE
);";

$sql_likes = "CREATE TABLE IF NOT EXISTS likes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    post_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
);";

if ($conn->query($sql_users) !== TRUE) {
  echo "Error creating users table: " . $conn->error;
}

if ($conn->query($sql_posts) !== TRUE) {
  echo "Error creating posts table: " . $conn->error;
}

if ($conn->query($sql_likes) !== TRUE) {
  echo "Error creating likes table: " . $conn->error;
}
