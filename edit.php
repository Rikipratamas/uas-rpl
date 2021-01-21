
<?php include('koneksi.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['no'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$no = $_GET['no'];

			//query ke database SELECT tabel databarang berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE no='$no'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$no				= $_POST['no'];
			$nama			= $_POST['nama'];
			$nama_buku		= $_POST['nama_buku'];
			$kategori 	 	= $_POST['kategori'];
			$jumlah 		= $_POST['jumlah'];
			$tanggal 		= $_POST['tanggal'];
			$harga			= $_POST['harga'];

			$sql = mysqli_query($koneksi, "UPDATE transaksi SET nama='$nama', nama_buku='$nama_buku', kategori='$kategori', jumlah='$jumlah', tanggal='$tanggal', harga='$harga' WHERE no='$no'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="transaksi.php?page=transaksi";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="transaksi.php?page=transaksi&no=<?php echo $no; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">nama</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">nama_buku</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama_buku" class="form-control" value="<?php echo $data['nama_buku']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">kategori</label>
				<div class="col-md-6 col-sm-6">
					 <select name="kategori">
            <option value="Dongeng">Dongeng</option>
            <option value="Cerpen">Cerpen</option>
            <option value="Novel">Novel</option>
            <option value="Sejarah">Sejarah</option>
            <option value="Biografi">Biografi</option>
        </select> 


				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">jumlah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="jumlah" class="form-control" value="<?php echo $data['jumlah']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">harga</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" required>
				</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="transaksi.php?page=transaksi" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
