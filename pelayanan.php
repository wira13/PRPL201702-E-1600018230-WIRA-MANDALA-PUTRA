<?php
error_reporting(0);
include "conn.php";

$query = "SELECT * FROM pelayanan";
$hasil = mysql_query($query);

echo "<div style='margin: 0; width: 200; float: left;'>
	<img src='gambar/dok-animasi.jpg' width='50' height='50'></div>
	<div style='font-size: 2em;'>Pelayanan SIAP ANTAR</div>";

while ($data = mysql_fetch_array($hasil))
{
echo "
<div style='font-size: 1.75em; clear: both;'>
<img src='gambar/6.jpg' width='100'>".$data['namarm']."</div>
<p>Buka ".$data['hari']."<br/>
Waktu :<br/>
Pagi pukul ".$data['jampagi']." WIB.<br/>
Sore pukul ".$data['jamsore']." WIB.<br/>
</p>";
echo "<hr color='#345678'/>";
}
echo "<div>Untuk Permintaan antar Harap  ke menu Daftar Order, Terima kasih.</div>";

?>
