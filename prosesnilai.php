<html>
	<head>
		<title>proses angka</title>
	</head>
	<body><?php
$angka = $_POST['angka'];

if (empty($angka)) {
	echo "Silakan masukkan angka";
}else{
	if ($angka >= 80 and $angka <= 100) {
		echo "Anda mendapatkan A";
	}elseif ($angka >= 70 and $angka <= 79) {
		echo "Anda mendapatkan B";
	}elseif ($angka >= 60 and $angka <= 69) {
		echo "Anda mendapatkan C";
	}elseif ($angka >= 30 and $angka <= 59) {
		echo "Anda mendapatkan D";
	}elseif ($angka >= 0 and $angka <= 29) {
		echo "Anda mendapatkan E";
	}else{
		echo "Anda tidak mengerjakan";
	}
}
echo "<a href="tugas.luping.php">Kembali</a>";
?>
		<br>
		
	</body>
</html>