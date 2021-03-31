<html>
<head>
	<title>Aplikasi CRUD Sederhana Arkademy</title>
</head>
<body>
	<h1>Ubah Data Produk</h1>

	<?php
	// Load file koneksi.php
	include "connect.php";

	// Ambil data ID yang dikirim oleh index.php melalui URL
	$id = $_GET['id'];

	// Query untuk menampilkan data produk berdasarkan ID yang dikirim
	$sql = $pdo->prepare("SELECT * FROM produk WHERE id=:id");
	$sql->bindParam(':id', $id);
	$sql->execute();
	$data = $sql->fetch();
	?>

	<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
		<table cellpadding="8">
			<tr>
				<td>nama produk</td>
				<td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>
                <input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
			</tr>
		</table>

		<hr>
		<input type="submit" value="Ubah">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
