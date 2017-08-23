<html>
	<head>
		<title>proses nilai</title>
	</head>
	<body><?php
$nilai = $_POST['nilai'];

if ($nilai >= 80 and $nilai <= 100) {
	echo "Anda mendapatkan A";
}elseif ($nilai >= 70 and $nilai <= 79) {
	echo "Anda mendapatkan B";
}elseif ($nilai >= 60 and $nilai <= 69) {
	echo "Anda mendapatkan C";
}elseif ($nilai >= 30 and $nilai <= 59) {
	echo "Anda mendapatkan D";
}elseif ($nilai >= 0 and $nilai <= 29) {
	echo "Anda mendapatkan E";
}else{
	echo "Anda tidak mengerjakan";
}
?>
		<br>
		<a href="tugas.luping.php">Kembali</a>
	</body>
</html>