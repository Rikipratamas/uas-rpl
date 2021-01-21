<?php
include_once 'login_session.php';
include_once 'koneksi.php';

$no = $_GET['no'];
$sql = "DELETE FROM transaksi WHERE no = '{$no}'";
$result = mysqli_query($koneksi, $sql);

header('location: transaksi.php');
?>