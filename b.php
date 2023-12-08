<?php
include'koneksi.php';
$query=mysql_query("select * from tb_tiket;",$c) or die (mysql_error);
	echo"
		<html>
			<head>
				<title>Tambah Siswa</title>
			</head>
			<body background='grey' width='900px' height='900px'>
	";
	echo"
				<form action='penambahan.php' method='POST'>
				<center>
					<table border='1'>
						<tr>
							<td>kode</td>
							<td>:</td>
							<td><input type='text' name='kode' size='45' value='$kode'></td>
						<tr>
						<tr>
							<td>Jurusan</td>
							<td>:</td>
							<td>
								<select name='jurusan'>
									<option>Semarang</option>
									<option>Salatiga</option>
									<option>Tangerang</option>
								</select>
							</td>
						<tr>
						<tr>
							<td>Harga</td>
							<td>:</td>
							<td>
							<select name='harga'>
									<option>250.000</option>
									<option>200.000</option>
									<option>100.000</option>
								</select>
							</td>
						<tr>
						<tr>
							<td align='center'><a href='index.html'/><input type='button' value='CANCEL'/></td>
							<td></td>
							<td align='right'><input type='submit' value='Simpan'/></td>
						</tr>
					</table>
				</center>
				</form>
	";
	echo"
			</body>
		</html>
	";
?>