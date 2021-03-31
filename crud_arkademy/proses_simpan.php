<?php
// Load file koneksi.php
include "connect.php";

// Ambil Data yang Dikirim dari Form
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES(:nama_produk,:keterangan,:harga,:jumlah)");
$sql->bindParam(':nama_produk', $nama_produk);
$sql->bindParam(':keterangan', $keterangan);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':jumlah', $jumlah);
$sql->execute(); // Eksekusi query insert

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo "<script>alert('Tambah Data Produk Berhasil');</script>";
	echo "<script>location='index.php';</script>"; // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
