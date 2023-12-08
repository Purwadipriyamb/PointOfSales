<?php
	echo"
		<html>
			<head>
				<title>Tambah Siswa</title>
			</head>
			<body background='bugattiblue2.jpg' width='900px' height='900px'>
				<form action='penambahan.php' method='POST'>
				<center>
					<table border='1'>
						<tr>
							<td>kode</td>
							<td>:</td>
							<td><input type='text' name='kode' size='1'></td>
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
							<td>Kelas</td>
							<td>:</td>
							<td>
								<select name='harga'>
									<option>250.000</option>
									<option>250.000</option>
									<option>200.000</option>
								</select>								
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
?>