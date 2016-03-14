<?php
  include '../config/database.php';

  try {
    $dbh = new PDO('mysql:host='. DB_HOST . ';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } 
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
?>