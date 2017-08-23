<html>
	<head>
	<style>
	
	
	
	</style>
	</head>
<body>
<?php
for ($num = 0; $num <= 18; $num+=2) {
	if (($num % 2) == 0) {
		echo "Angka ke - ".$num."<br>";
	}
}

$colors = array('32'=>"aliceblue", 'ohnoes'=>"antiquewhite", "firebrick", "sienna", "tomato");
foreach ($colors as $key => $value) {
	echo "$key => $value<br>";
}

?>