<?php
  $id = $_GET['id'];
  //Cookie to save id
  setcookie('id', $id);
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
	$sql = "SELECT * from test where ID = $id ";

	// Execute query
  $result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action="wk6ex2action2.php" method="post">

	Name :
	<input type=text name=txtname value="<? echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<? echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<? echo $row['email'] ?>" />
	</br>
	<input type=submit name=btnsubmit value="Save"/>
  <input type=submit name=btnsubmit value="Delete"/>
</form>
</body>
</html>
