<!DOCTYPE html>
<html>
<body>
<?php
	echo "<h1>Konstanta yg diperbarui</h1>"."<br>";
	const c1 = 3000;
	echo c1, "<br>";
	const c1 = 2999;
	echo c1, "<br>THE END"
?>
<p>
<h1>Konstanta</h1>
<br>
<?php
	define("konstanta", 109);
	echo "Konstanta : ".konstanta;
?>
