<?php
  if ($_POST["txtage"] < 21) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }

  if ($_POST["txtgender"] == "MALE" || $_POST["txtgender"] == "male" || $_POST["txtgender"] == "Male")
  {
    echo "You are a Male";
  }
  elseif ($_POST["txtgender"] == "FEMALE" || $_POST["txtgender"] == "female" || $_POST["txtgender"] == "Female")
  {
    echo "You are a Female";
  }
  else 
  {
    echo "You haven't added a gender";
  }
?>