<?php

  header("Content-type: image/jpeg");

  $servername = 'localhost';
  $db_name = 'alex_adriano';
  $username = 'root';
  $password = '';

  $conn = mysqli_connect($servername, $username, $password, $db_name);

  $id = $_GET['id'];
  $sql = "SELECT image FROM monster WHERE id= '$id'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $jpg = $row["image"];

  echo $jpg;