<?php
// Load file koneksi.php
include "connect.php";

// Ambil data ID yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menghapus data produk berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM produk WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query

if($execute){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo "<script>alert('Hapus Data Produk Berhasil');</script>";
	echo "<script>location='index.php';</script>"; // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
