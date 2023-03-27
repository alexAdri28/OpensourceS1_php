<?php

  $servername = 'localhost';
  $db_name = 'alex_adriano';
  $username = 'root';
  $password = '';

  $conn = mysqli_connect($servername, $username, $password, $db_name);

  // Obtain the file sent to the server within the response.
  $image = $_FILES['monsterimage']['tmp_name'];
  $audio = $_FILES['monsteraudio']['tmp_name'];

  // Get the file binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
  $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));


  $name = $_POST['txtname'];

  $sql = "INSERT INTO monster";
  $sql .= "(Name, Image, Audio) ";
  $sql .= "VALUES ('$name', '$imagedata','$audiodata');";
                 £

  $result = mysqli_query($conn, $sql);

  mysqli_close($conn);
?>