<html>
<body>
<?php
	$hourlyrate	= 5.75; //hourly rate//
	$hoursperweek = 40; 
	$gross = $hourlyrate * $hoursperweek;
	$Tax = $gross * 0.22;
	$Netwage = $gross - $Tax;
	echo $Netwage;
?>
</body>
</html>
