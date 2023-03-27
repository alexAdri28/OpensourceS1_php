<?php

  //Cookie
  /*
  setcookie('selqty', $_POST['selqty']);
  */

  //Session

  session_start();
  $_SESSION['selsize'] = $_POST['selsize'];

?>

<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
	      Select the colour for the <?php echo intval($_SESSION['selqty']) ?> widgets you are ordering
       	<select name="selcolour">
       	  <option>white</option>
      	  <option>red</option>
      	  <option>yellow</option>
      	  <option>green</option>
      	  <option>blue</option>
        </select>
        <br/><br/>
        <!-- The hidden field -->
        <!--
        <input type="hidden" name="selqty" value="<?php //echo $_POST['selqty']?>"/>
        <input type="hidden" name="selsize" value="<?php //echo $_POST['selsize']?>"/>
        -->
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>