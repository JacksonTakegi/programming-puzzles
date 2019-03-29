<?php
// finding the sum of all primes under 2 million.
$n=5;
$m=3;
$v=10;
while ($n<=2000000) {
	$n+=2;
	$m=3;
	$primeFound=true;
	while ($m<=sqrt($n)) {
		$primeFound=true;
		if ($n%$m!=0) {
		$m+=2;
		}
		else {
			$primeFound=false;
			break;
		}
	}
	if ($primeFound) {
		// echo $n."<br>";
		$v=$v+$n;
	}


}
echo $v;
?>