<html>
<head>
	<title>Aplikasi CRUD Sederhana Arkademy</title>
</head>
<body>
	<h1>Tambah Data produk</h1>
	<form method="post" action="proses_simpan.php">
		<table cellpadding="8">
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
		</table>

		<hr>
		<input type="submit" value="Simpan">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
