<?php
include "conn.php";


$nm=$_POST['nm'];
$pil=$_POST['pil'];
$byk=$_POST['byk'];
$almt=$_POST['almt'];
$tgl=date('Y-m-d');
$query=mysql_query("INSERT INTO pesanan(nm_pemesan,menu_pesanan,banyak_pesanan,alamat,tgl) values('$nm','$pil','$byk','$almt','$tgl')",$koneksi);


echo "<script>alert('Berhasil di Tambah');window.location.href='info_pesanan.php';</script>";

?>