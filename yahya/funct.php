<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>
	<?php
		function penjumlahan ($p1, $p2, $p3){
			echo $p1 + $p2 + $p3;
		}
		
		function pengurangan ($min1, $min2, $min3){
			echo $min1 - $min2 - $min3;
		}
		
		function perkalian ($m1, $m2, $m3){
			echo $m1 * $m2 * $m3;
		}
		
		function pembagian ($d1, $d2, $d3){
			echo $d1 / $d2 / $d3;
		}
		
		penjumlahan (1209,109,666); echo "<br>";
		pengurangan (1984,1209,109); echo "<br>";
		perkalian (8,4,62); echo "<br>";
		pembagian (107136,6,9); echo "<br>";
	?>
</body>