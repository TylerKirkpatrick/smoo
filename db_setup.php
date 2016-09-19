<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h1>Creating tables</h1>

<?php // Example 26-3: setup.php
  require_once 'functions.php';

  createTable('sessions',
              'ses_id CHAR(8),
              INDEX(user(6))');

  createTable('posts', 
              'posts_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              
              INDEX(auth(6)),
              INDEX(recip(6))');

  createTable('mentions',
              'user VARCHAR(16),
              text VARCHAR(4096),
              INDEX(user(6))');
?>
    <p>Done</p>
    <br>
  </body>
</html>
