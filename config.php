<?php
$id=mysqli_connect("localhost", "root", "");
if (! $id)
echo "Gagal koneksi dengan Server<br>";
else
echo "Sukses koneksi dengan Server<br>";
?>