<?php
session_start();

  $qty = $_SESSION['selqty'];
  $colour = $_POST['selcolour'];
  $size = $_SESSION['selsize'];
  $price = 0; 
  switch ($size) {

    case 'Small':

      $price = 15.75;
      break;

    case 'Medium':
      $price =  16.75;
      break;

    case 'Large':
      $price=  17.75;
      break;

    case 'Extra Large':
      $price  =  18.75;
      break;

    default:
      $total = $qty * $price;
      
  }

  if(isset($_SESSION['selqty']))
  {
    echo "<h2> Number of widgets: " . intval($qty) . "</h2>";
  }

  if(isset($_SESSION['selsize']))
  {
    echo "<h2> Size of widgets: $size </h2>";
  }

  if(isset($_POST['selcolour']))
  {
    echo "<h2> Selected colour: $colour</h2>";
  }
  if(isset($total) && $total != "Undefined")
  {
    echo "<h2><hr/> Total price: £" . $total . "</h2>";
  }
?>