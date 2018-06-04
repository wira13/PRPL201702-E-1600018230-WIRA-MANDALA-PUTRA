<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resto Wira Mandala</title>
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
				<li><a href="menu.php">menu</a></li>
				<li><a href="pesanan.php">pesanan</a></li>
				<li><a href="info_pesanan.php">info pesanan</a></li>
				</ul>
		</div> <!-- end of templatemo_menu -->
		
		<div id="templatemo_header">
			<div id="site_title">
				<h1><a href="http://www.templatemo.com" rel="nofollow">></a></h1>
			</div> <!-- end of site_title -->    
			<div id="header_content">
				<p><h1 style="color:yellow;">Resto Wira Mandala </h1>
		<p style="color:yellow;">Jl. Suka Maju</p>
			</div>
		</div>
		
		<div id="templatemo_main">
		
			<div id="frontpage_services">
			
<?php 
	include "conn.php";
		
		//untuk menampilkan
		$view=mysql_query("select * from pesanan order by id_pesanan asc");
		
		
		
		// membuat koneksi
$konek = new mysqli("localhost","root","","transorder");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}


$sql = "SELECT * FROM pesanan";

if(isset($_POST['search_query'])){
  $qcari=$_POST['search_query'];
  $sql="SELECT * FROM  customer where nm_pemesan like '%$qcari' or alamat like '%$qcari' ";
}
/*
if(isset($_POST['submit2'])){
  $qcari=$_POST['tglawal'];
  $qcari2=$_POST['tglakhir'];
  $sql="SELECT * FROM  customer where tanggal between '$qcari' and '$qcari2'";
}
*/
if(isset($_POST['reset'])){
  
  $sql="SELECT * FROM  pesanan ";
}
		?>
		
	

<div id="sidebar">
<h3>Search Box</h3>
<form action=" " method="POST" class="searchform">
<p> <input name="search_query" class="textbox" type="text" /> <input name="search" class="button" value="Search" type="submit" /> </p>
<br><input name="reset" class="button" value="Reset" type="submit" /> 
</form>
<!-- footer-columns ends --> </div>
		
<br /><center>
		<table style="border: 1px solid #D6DDE6;border-collapse: collapse;width: 100%;">
		<tr style="background-color: #DFE7F2;color: #000000;">
			<th style="border: 1px solid #828282;background-color: #BCBCBC;font-weight: bold;text-align: left; padding-left: 4px;padding-right: 0px;text-align:center;">No Pemesanan</th>
			<th style="border: 1px solid #828282;background-color: #BCBCBC;font-weight: bold;text-align: left; padding-left: 4px;padding-right: 0px;text-align:center;">Nama Pemesan</th>
			<th style="border: 1px solid #828282;background-color: #BCBCBC;font-weight: bold;text-align: left; padding-left: 4px;padding-right: 0px;text-align:center;">Menu Pesanan</th>
			<th style="border: 1px solid #828282;background-color: #BCBCBC;font-weight: bold;text-align: left; padding-left: 4px;padding-right: 0px;text-align:center;">Banyak Pesanan</th>
			<th style="border: 1px solid #828282;background-color: #BCBCBC;font-weight: bold;
			text-align: left; padding-left: 4px;padding-right: 0px;text-align:center;">Alamat Pesanan</th>
			<th style="border: 1px solid #828282;background-color: #BCBCBC;font-weight: bold;
			text-align: left; padding-left: 4px;padding-right: 0px;text-align:center;">Tanggal Pemesanan</th>
		</tr>
		<?php
		$i=1;
		while($row=mysql_fetch_array($view)){
		?>
		<tr>
			<td align="center" style="border: 1px solid #D6DDE6;padding: 4px;"><?php echo $i;?></td>
			<td align="center" style="border: 1px solid #D6DDE6;padding: 4px;"><?php echo $row['nm_pemesan'];?></td>
			<td align="center" style="border: 1px solid #D6DDE6;padding: 4px;"><?php echo $row['menu_pesanan'];?></td>
			<td align="center" style="border: 1px solid #D6DDE6;padding: 4px;"><?php echo $row['banyak_pesanan'];?></td>
			<td style="border: 1px solid #D6DDE6;padding: 4px;"><?php echo $row['alamat'];?></td>
			<td style="border: 1px solid #D6DDE6;padding: 4px;"><?php echo $row['tgl'];?></td>
		</tr>
		<?php
		$i++;
		}
		?>
		</table></center>
				</div>
			
			
				
			
			<div class="cleaner"></div>
		</div>
		
	</div> <!-- end of wrapper -->
</div>

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    

        Copyright ? 2018 <a href="#">Resto Wira Mandala
    </div> <!-- end of templatemo_footer -->
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>