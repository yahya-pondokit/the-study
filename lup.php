Contoh penggunaan :<br>
	1. Aritmethic operator<br>
	2. Assignment operator<br>
	3. Comparison operator<br>
	4. Increment / decrement operator<br>
	5. Logical operator<br>
	6. String operator<br>
	Masing masing 5<br><br>
	
<?php
	$a = 50;
	$b = 70;
	$c = 100;
	$j = 7;
	$k = 8;
	$l = 9;
	$x = 2;
	$y = 3;
	$z = 10;
	$sa = 50;
	$sb = 50.0;
	
		// arithmetic operator
		
		echo "Arithmetic operator :<br>";
		echo $j + $k . "<br>";
		echo $z - $y;
		echo "<br>" . $l / $y;
		echo "<br>" . $l * $z;
		echo "<br>" . $l % $x;
		echo "<br><br><br>";
	
		// assignment operator
		echo "Assignment operator :<br>";
		$c -= 30;
		echo $c;
		$c += 30;
		echo "<br>" . $c;
		$c *= 3;
		echo "<br>" . $c;
		$c /= 3;
		echo "<br>" . $c;
		$c %= 9;
		echo "<br>" . $c;
		$c = 100;
		echo $c . "<br><br><br>";
		
		// comparison operator
		echo "Comparison operator :<br>";
		var_dump($a == $sb);
		echo "<br>";
		var_dump($a ===$sb);
		echo "<br>";
		var_dump($c >= $z);
		echo "<br>";
		var_dump($j != $x);
		echo "<br>";
		var_dump($sa <> $a);
		echo "<br><br><br>";
		
		// Increment decrement operator
		echo "Increment Decrement operator<br>";
		echo ++$a . "<br>";
		echo $a++ . "<br>";
		echo --$a . "<br>";
		echo $a-- . "<br>";
		--$a;
		echo ++$a . "<br><br><br>";
		
		//  Logical operator
		echo "Logical operator<br>";
		if ($j == 7 && $k == 8){
			echo "This statement is true<br>";
		}else{ echo "This statement is false<br>";}
		if ($j == 7 || $k == 9){
			echo "This statement is true<br>";
		}else{ echo "This statement is false<br>";}
		if ($j == 7 xor $k == 8){
			echo "This statement is true<br>";
		}else{ echo "This statement is false<br>";}
		if ($j != 7){
			echo "This statement is true<br>";
		}else{ echo "This statement is false<br>";}
		if ($j == 7 or $k == 8){
			echo "This statement is true<br>";
		}else{ echo "This statement is false<br>";}
		echo "<br><br>";
		
		// String operator
		echo "String operator<br><br>";
		$t1 = "This";
		$t2 = " Is";
		$t3 = " Statement";
		$t4 = " True";
		$t2a = ",";
		$t1a = " But"; $t1b = " something"; $t1c = " broken";
		echo $t1 . $t3;
		$t2 .= $t4 ;
		echo $t2;
		echo "<br>" . $t1a . $t2a;
		$t1b .= $t1c;
		echo $t1b . "<br>";
		echo $t1 .  $t3 . $t2 . $t2a . $t1a . $t1b;	
?>