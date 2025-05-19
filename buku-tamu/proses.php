<?php
include 'koneksi.php';

$nama     = $_POST['nama'];
$instansi = $_POST['instansi'];
$tujuan   = $_POST['tujuan'];
$tanggal  = date('Y-m-d');
$waktu    = date('H:i:s');

$query = "INSERT INTO buku_tamu (nama, instansi, tujuan, tanggal, waktu) 
          VALUES ('$nama', '$instansi', '$tujuan', '$tanggal', '$waktu')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>
            alert('Data berhasil disimpan!');
            window.location='index.php';
          </script>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>

