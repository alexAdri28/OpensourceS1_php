
<?php
$mymarks = [10, 20, 30, 30,30,50
];

  $total = 0;

  for ($i = 0; $i<6; $i++)
  {
    $total = $total + $mymarks[$i]; 
  }
  $average = $total /  6;
  echo $average
  
?>