<?php
$n=0;
$f=1;
$factors=0;
$t=0;
while ($factors<=400) {
	// echo "aaa";
	// if ($factors>=500) {
	// 	break;
	// }
	$factors=1;
	$f=1;
	$n++;
	$t=$n+$t;
	// echo $t."<br>";
	while ($f<=$t/2) {
		// echo($f<=$t/2);
		// echo($f." ".$t." ");
		// echo "<br>"."<br>";
		if ($t%$f==0) {
			$factors++;
			// echo $factors;
			if ($factors>400) {
				// echo $t."<br>";
				break 2;
			}
			
		}

		$f++;
			// echo $f."<br>";

	}





}
echo $t;
?>