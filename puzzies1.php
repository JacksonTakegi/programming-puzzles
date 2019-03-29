<?php
$n=15;
$prime=6;

while ($prime<10001) {
$n+=2;
$m=3;	
	while ($m<=sqrt($n) {
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
		$prime++;
	}


}
echo $n;
?>