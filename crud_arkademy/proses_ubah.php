<?php
// Load file koneksi.php
include "connect.php";

// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE produk SET nama_produk=:nama_produk, keterangan=:keterangan, harga=:harga, jumlah=:jumlah WHERE id=:id");
$sql->bindParam(':nama_produk', $nama_produk);
$sql->bindParam(':keterangan', $keterangan);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':jumlah', $jumlah);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query

if($execute){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo "<script>alert('Edit Data Produk Berhasil');</script>";
	echo "<script>location='index.php';</script>"; // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_ubah.php?id='>Kembali Ke Form</a>";
}
?>
