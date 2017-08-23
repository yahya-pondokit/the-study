<?php

$a = 0;
while ($a < 12) {
	echo $a."	";
	$a += 2;	
}
echo "<br>";
$b = 3;
$i = 1;
while ($i <= 0) {
	echo $b * $i."  ";
	$i++;
}
echo "<br>";

$x = 1;
$z = 100;
echo "<table>";
while (($x < 101)&&($z > 0)) {
	echo "<tr><td>Angka ke - ".$x."</td><td>Angka ke - ".$z."</td></tr>";
	$x++;
	$z--;
}
?>