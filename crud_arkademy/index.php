<html>
<head>
	<title>Aplikasi CRUD Sederhana Arkademy</title>
</head>
<body>
	<h1>Data Produk</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>Nama Produk</th>
		<th>Keterangan</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Include / load file koneksi.php
	include "connect.php";

	// Buat query untuk menampilkan semua data produk
	$sql = $pdo->prepare("SELECT * FROM produk");
	$sql->execute(); // Eksekusi querynya

	while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['nama_produk']."</td>";
		echo "<td>".$data['keterangan']."</td>";
		echo "<td>".$data['harga']."</td>";
		echo "<td>".$data['jumlah']."</td>";
		echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
