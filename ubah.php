<?php
	include "koneksi.php";
	
	$kode = $_POST['kode'];
	$query=mysql_query("select *from tb_tiket where kode='$kode'",$c)or die (mysql_error());
	while($row=mysql_fetch_array($query)){
	$jurusan = $row['jurusan'];
	$harga = $row['harga'];
	echo"
		<html>
			<head>
				<title>Tambah Siswa</title>
				
			</head>
			<body background='bugattiblue2.jpg'>
				<form action='perubahan.php?kode=$kode' method='POST'>
				<center>
					<table border='1'>
						<tr>
							<td>kode</td>
							<td>:</td>
							<td>$kode</td>
						<tr>
						<tr>
							<td>jurusan</td>
							<td>:</td>
							<td><input type='text' name='jurusan' size='45' value='$jurusan'></td>
						<tr>
						<tr>
							<td>harga</td>
							<td>:</td>
							<td><input type='text' name='harga' size='45' value='$harga'></td>
						<tr>
							</td>
						<tr>
						<tr>
							<td align='center'><a href='index.php'>Cancel</td>
							<td></td>
							<td align='right'><input type='submit' value='Simpan'/></td>
						</tr>
					</table>
				</center>
				</form>
			</body>
		</html>
	";
	}
?>