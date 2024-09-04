
<?php
include '../koneksi.php';
$conn->query("DELETE FROM kecamatan WHERE id='$_GET[id]'");
echo "<script>alert('Kecamatan Berhasil Di Hapus');</script>";
echo "<script> location ='db-kec.php';</script>"; ?>