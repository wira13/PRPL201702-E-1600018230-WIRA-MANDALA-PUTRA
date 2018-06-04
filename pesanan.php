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
				<li><a href="menu.php">menu</a></li>
				<li><a href="pesanan.php">pesanan</a></li>
				<li><a href="info_pesanan.php">info pesanan</a></li>
				</ul>
		</div> <!-- end of templatemo_menu -->
		
		<div id="templatemo_header">
			<div id="site_title">
				<h1><a href="http://www.templatemo.com" rel="nofollow"></a></h1>
			</div> <!-- end of site_title -->    
			<div id="header_content">
				<p><h1 style="color:red;">Resto Wira mandala</h1>
		<p style="color:red;">Jl.Suka Maju</p>
			</div>
		</div>
		
		<div id="templatemo_main">
		
			<div id="frontpage_services">
			
				<div class="sp_services_box1">
					<h3 class="sp1">Order</h3>
					
<form name="form" method="post" action="proses.php">
  <table width="650" cellpadding="3">
    <tr>
      <th colspan="6" scope="col">Transaksi Pesanan </th>
    </tr>
    <tr>
      <td height="32">Nama Pemesan</td>
      <td colspan="5">
      <input size="40" type="text" name="nm" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required></td>
    </tr>
	<tr>
	<td height="32">Pilih Pemesanan</td>
	<td colspan="5">
	<select name="pil">
	<option value="" selected="selected"> -- Pilih-- </option>
	<?php 
	include "conn.php";
			
	$query=mysql_query("select * from menu order by nama asc");
			
	while($row=mysql_fetch_array($query))
	{
	?>
	<option value="<?php  echo $row['nama']; ?>"><?php  echo $row['nama'] ." | ". $row['harga']; ?></option>
	<?php 
	}
	?>
	</select>	
	</tr>
	  <tr>
	  <td height="32">Banyak pesan</td>
      <td colspan="5">
	 <input size="40" type="text" name="byk" onKeyPress="return goodchars(event,'0123456789',this)" title="Isi Dengan Angka" required></td>
	 </tr>
	  <tr>
    <tr>
	<tr>
      <td height="32">Alamat Pemesan</td>
      <td colspan="5">
      <input size="40" type="text" name="almt" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required></td>
    </tr>
      <td colspan="6"><input type="submit" name="simpan" id="simpan" value="simpan" />
    </tr>
  </table>
</form>

</div>

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    
       

        Copyright ? 2018 <a href="#">Resto Wira mandala
    </div> <!-- end of templatemo_footer -->
</div>


<script type='text/javascript' src='js/logging.js'></script>

	<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>

</body>
</html>