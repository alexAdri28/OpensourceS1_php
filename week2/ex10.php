<?php

  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  // foreach loop here…

  foreach ($mymarks as $year => $grade)
  {
    echo "for  $year  my grade was  $grade <br/>";
  }
  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];

?>