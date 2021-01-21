<?php
include 'koneksi.php';
?>
<table border="1">
	<tr>
		<td>no</td>
		<td>nama</td>
		<td>jumlah</td>
		<td>tanggal</td>
		<td>harga</td>
	</tr>
	<?php
	$no=1;
	$data = mysqli_query($koneksi, "SELECT * FROM transaksi");
	while ($d = mysqli_fetch_array($data)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d[ 'nama' ]; ?></td>
		<td><?php echo $d[ 'jumlah' ]; ?></td>
		<td><?php echo $d[ 'tanggal' ]; ?></td>
		<td><?php echo $d[ 'harga' ]; ?></td>
	</tr>
	<?php
	}
	?>