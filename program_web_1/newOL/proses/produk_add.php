<?php
include "../koneksi.php";

$produkid = getautoid('produkid','produk','prd');
$nama_produk = $_POST['nama'];
$harga = $_POST['harga'];
$QTY = $_POST['qty'];


$namafile = $_FILES['gambar']['name'];
$namasementara = $_FILES['gambar']['tmp_name'];
$dirupload = "../gambar/";

$terupload = move_uploaded_file($namasementara,$dirupload.$namafile);
$gambar = "gambar/".$namafile;


$query="INSERT INTO `olshop`.`produk` (`produkid`, `NamaProduk`, `harga`, `Qty`,`gambar`) VALUES ('$produkid', '$nama_produk', '$harga', '$QTY','$gambar')";

mysql_query($query);

header("location:../index.php?mod=produk_form");





?>
