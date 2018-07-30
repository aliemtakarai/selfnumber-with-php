<!DOCTYPE html>
<html>
<head>
	<title>Sum Self Number</title>
</head>
<body>
<h3>Sum Self Number</h3>
<?php
$notSelfNumbers = array();
$allNumbers = array();
for($i=1; $i<=5000; $i++){
	$n=$i;
	$n= (string)$n ;
	$allNumbers[] = $i;
	$number = strlen($i);
	if ($number == 1){ 
		$sumNumbers = $i+$n[0];
		$notSelfNumbers[] = $sumNumbers; 
	} elseif ($number == 2){ 
		$sumNumbers = $i+$n[0]+$n[1];
		$notSelfNumbers[] = $sumNumbers; 
	} elseif ($number == 3){ 
		$sumNumbers = $i+$n[0]+$n[1]+$n[2];
		$notSelfNumbers[] = $sumNumbers; 
	} elseif ($number == 4){ 
		$sumNumbers = $i+$n[0]+$n[1]+$n[2]+$n[3];
		$notSelfNumbers[] = $sumNumbers; 
	}
}
$selfNumbers = array_diff($allNumbers, $notSelfNumbers);
$sumSelfNumbers = 0;
$numbering = 1;
foreach($selfNumbers as $eachSelfNumber) {
	echo "<pre>". $numbering++ .". ".$eachSelfNumber;
	$sumSelfNumbers+= $eachSelfNumber;
}
echo "<p>Sum of all self-numbers from bigger than 0 and smaller than 5000 is: <strong>" . number_format($sumSelfNumbers)."</strong></p>";
?>
</body>
</html>