<html>
<head>
	<title>My Website</title>
</head>
<body>

	<center>

		<h4>Cetak Data Penjualan</a></h4>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Nama</th>
			<th>Nama Buku</th>
			<th>Kategori</th>
			<th>Jumlah</th>
			<th>Tanggal</th>
			<th>Harga</th>
			
		</tr>
	 <?php 
            $no = 1;
            $transaksi = mysqli_query($koneksi,"select * from transaksi");
			while($data = mysqli_fetch_array($transaksi)){
            ?>
            <tr>
                <td align="center"><?php echo $no++; ?></td>
                <td align="center"><?php echo $data['nama']; ?></td>
                <td align="center"><?php echo $data['nama_buku']; ?></td>
                <td align="center"><?php echo $data['kategori']; ?></td>
				<td align="center"><?php echo $data['jumlah']; ?></td>
				<td align="center"><?php echo $data['tanggal']; ?></td>
				<td align="center"><?php echo $data['harga']; ?></td>
            </tr> 
            <?php 
            }
            ?>
	</table>

<table width="100%">
	<tr>
		<td></td>
		<td></td>
		<br/><br/><br/>
		<td width="200px">
			<p> gramedia bekasi, <?php echo date('d-m-y') ?><br/>
			Adminitrasi,</p>
			<br/>
			<br/>
			<p>__________________</p>
		</td>
	</tr>
</table>
	<script>
		window.print();
	</script>

</body>
</html>