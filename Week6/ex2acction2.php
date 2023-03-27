<?php
  // Connect to server and select database
  $servername = 'localhost';
  $db_name = 'alex_adriano';
  $username = 'root';
  $password = '';

  $conn = mysqli_connect($servername, $username, $password, $db_name);
  if(mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  //Sql query

  if($_POST['btnsubmit'] == "Save")
  {
    $sql = "UPDATE test set phone_number = '{$_POST["txttelno"]}', email = '{$_POST["txtemail"]}' where ID = '{$_COOKIE["id"]}'";
  }
  if($_POST['btnsubmit'] == "Delete")
  {
    $sql = "DELETE from test where ID = '{$_COOKIE["id"]}'";
  }

  // Execute query
  $result = mysqli_query($conn, $sql);
    if ($result)
    {
      echo "<script>window.location = 'http://localhost/OSS/Logbook6/wk6ex2.php'</script>";
    }
  else
  {
    echo "Error updating record: " . mysqli_error($conn);
  }

?>