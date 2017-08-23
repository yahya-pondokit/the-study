<!DOCTYPE html>
<html>
<body>
<h1>Contoh penggunaan variabel<h1>
<p>
<h2>Contoh pertama</h2>
<p>
<?php
	$m1 = 'abdi';
	$m2 = 'ishmael';
	echo "murid 1 : ", $m1;
	echo "<br>";
	echo "murid 2 : ", $m2, "<br>Diatas adalah contoh variabel dengan tipe string<br>";
?>
<p>
<h2>Contoh kedua</h2>
<p>
<?php
	$value = 19999999;
	echo "isi variabel : ", $value, "<br>";
	$value = 2001;
	echo "isi variabel setelah diperbarui : ", $value, "<br>";
	echo "Data yang tersimpan dalam variabel dapat diperbarui";
?>
</body>
