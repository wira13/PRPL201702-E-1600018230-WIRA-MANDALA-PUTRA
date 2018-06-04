<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resto Wira mandala</title>
<meta name="keywords" content="green home website, free web template, free templates, CSS, HTML" />
<meta name="description" content="Green Home - free HTML CSS template by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="templatemo_document_wrapper">
	<div id="templatemo_wrapper">
	
	
		<div id="templatemo_menu">
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="pesanan.php">Pesanan</a></li>
				<li><a href="info_pesanan.php">info pesanan</a></li>
			</ul>    	
		</div> <!-- end of templatemo_menu -->
		
		<div id="templatemo_header">
			<div id="site_title">
				<h1><a href="http://www.templatemo.com" rel="nofollow"></a></h1>
			</div> <!-- end of site_title -->    
			<div id="header_content">
			<h1 style="color:yellow;">Resto Wira mandala </h1>
		<p style="color:yellow;">Jl.Suka Maju</p>
			</div>
		</div>
		
		<div id="templatemo_main">
		
			<div id="frontpage_services">
			


<div style='margin: 0; width: 200; float: left;'>
	<img src='gambar/0.jpg' width='150' height='100'></div>
	<div style='font-size: 2em;'>Daftar Menu Paket</div>
	<br />
	<br />

<?php
include "conn.php";

        $query = "SELECT * FROM menu order by nama asc";
        $hasil = mysql_query($query);
		$i=1;
        while ($data = mysql_fetch_array($hasil))
        {
		
?>
<p><b><?php echo $i." - ".$data['nama']; ?></b></p>
<p>Rp.<?php echo number_format($data['harga'],0,',','.') ?></p>
<div style='font-size: 1.75em; clear: both;'>
<?php
$gambar=$data['gambar'];
$pic=substr($gambar,15,40); ?>
<img src="./admin/gambar/<? echo $pic; ?>" width="90" height="70" border="0">
</div>
<p><?php echo $data['deskripsi'] ?></p>
<?php
$i++;
        }
?>


<br><br>
<h3><center>Untuk Memilih Paket yang dapat di pesan diatas, Terima kasih.</h3>


<div class="cleaner"></div>
		</div>
		
	</div> <!-- end of wrapper -->
</div>

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">

        Copyright � 2018 <a href="#">Resto Wira mandala
    
    </div> <!-- end of templatemo_footer -->
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>

