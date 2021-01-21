<?php
$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "uts" ;

$koneksi = mysqli_connect($host, $user, $pass, $db);

if ($koneksi->connect_error) {
	echo 'koneksi database gagal';
}
else {
	echo '';
}

?>