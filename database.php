<?php 
  try {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=kt_vegmart','praba','praba123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException) {
    die('Connection Failed!');
  }
?>
