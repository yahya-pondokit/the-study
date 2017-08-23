<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="tes.php" method="post">
		Total :<input type="text" name="tes">
		<input type="submit" value="Cek Diskon">
		</form>
<?php
	$total = isset($_POST['tes']) ? $_POST['tes'] : $_POST['tes'] = '';
	
	if (empty($total)) {
		echo "Silakan masukkan total belanja";
	} else{
		if ($total >= 50000){
			$total1 = $total - ((50/100) * $total);
			echo "Total harga setelah diskon : " . $total1;
		} else{
			echo "Tidak ada diskon untuk pembelian dibawah 50k<br>";
			echo "<a href='tes.php'>Cek lagi?</a>";
		}
	}
?>
</body>
</html>