<?php
include'koneksi.php';
$query=mysql_query("select * from tb_tiket;",$c) or die (mysql_error);
	echo"
		<html>
			<body>
				SELAMAT DATANG ADMINISTRATOR
				<br/><br/>
			</body>
			<td style='background-color:#ADFF2F;height:200px;width:400px;vertical-align:top;'>
		<table border='1'>
		<tr>
			<td><center>Kode</center></td>
			<td><center>jurusan</center></td>
			<td><center>Harga</center></td>
			<td><center>Pilihan</center></td>
		</tr>
		<form method='POST' action='penambahan.php' ENCTYPE='MULTIPART/FORM-DATA'>
		<input type='hidden' name='MAX FILE SIZE' value='3000000'/>
	 <tr>
		<td><input type='text' name='kode'/></td>
		<td><input type='text' name='jurusan'/></td>
		<td><input type='text' name='harga'/></td>
		<center><td>
		<input type='submit' value='Tambah' /></center></td>
	 </tr>
	 </form>
";
while ($row=mysql_fetch_array($query)){
	echo"
	<form method='POST' action='ubah.php'>
	 <tr>
		<td><input type='text' value='".$row['kode']."' name='kode'/></td>
		<td><input type='text' value='".$row['jurusan']."' name='jurusan'/></td>
		<td><input type='text' value='".$row['harga']."' name='harga'/></td>
		<td>
		<input type='submit' value='Ubah' /> 
			<a href='hapus.php?kode=".$row['kode']."'><input type='button' value='Hapus'></a></td>
	 </tr>
	 </form>
	";
}
echo"
	
		</table>
		</td>
		</tr>
		
		<tr>
		<td colspan='2' style='background-color:#ADFF2F;text-align:center;'>
		<font size='3'><b>Purwadi Priyambodo</b></font><a href='index.php'><input type='button' value='Log Out'></a>
		</td>
		</tr>
		</table>
		</html>
	";
?>