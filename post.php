<?php
$nama = $_POST['nama'];

if (empty($nama)||(trim($nama) == "")) {
	echo "Silahkan masukkan nama anda";
}else {
	echo "Selamat datang mas ".$nama;
}
// if(empty($nama)){
	// echo "nama sudah diset<br>";
// }else{ "???<br>";
// }
// if(!isset($nama) || empty($nama)){
	// echo "silahkan isikan nama anda<br>";
// } else {
	// echo "selamat datang mas ". $nama."<br>";
// }
// if (empty($nama))
// {echo "Silakan Isi Nama Anda";
// }
// else if (strpos($nama, ' ') !== false)
// { echo "???";
// }
// else if(!empty($nama))
// {echo "Selamat datang mas " . $nama;
// }
// else { echo "???";
// }
?>