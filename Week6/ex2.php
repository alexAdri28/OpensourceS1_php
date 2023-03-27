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
	$sql = "SELECT * from test";
	// Execute sql statement
  $result = mysqli_query($conn, $sql);

?>
<html>
<body>

<?php

while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name]</a><br/>";
}
?>
</body>
</html>
