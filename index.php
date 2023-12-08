<?php
include'koneksi.php';
echo"
<html>
<head>
	<title>Website Angel Travel</title>
	<link rel='stylesheet' type='text/css' href='style.css' />
</head>
<body>
	<div id='container'>
	<div id='header'>
	<h1>ANGEL TRAVEL ._._._._._._._._._._._._._._._. HOME</h1>
	</div>
	<div id='content'>
	<div class='nav'>
	<ul>
	<li><a href='index.php'>HOME</a></li>
	<li><a href='pt.html'>PENGURUS TRAVEL</a></li>
	<li><a href='#'>GALERY</a>
	<ul>
	<li><a href='f.html'>Fasilitas</a></li>
	<li><a href='a.html'>Agen</a></li>
	</ul>
	</li>
	<li><a selected href='j.html'>JURUSAN</a></li>
	<li><a href='b.html'>BOOKING</a></li>
	<li><a href='at.html'>About TRAVEL</a></li>
	</ul>
	</div>
	<div id='main'>
	<p><h2>SELAMAT DATANG DI ANGEL TRAVEL</h2></p>
		<center></br><form method='POST' action='sign.php'>
				<table bgcolor='skyblue'>
					<tr>
						<td>Nama</td>
						<td><input type='text' name='nama'/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type='password' name='pass'/></td>
					</tr>
					<tr>
						<td colspan='2' align='right'>
							<input type='submit' value='Log in'/>
						</td>
					</tr>
				</table>
				</form>
		</center>
		</br>
	<p>Transportasi adalah hal yang sangat dibutuhkan saat ini.</p>
	<p>Masyarakat tidak ingin ambil pusing/pikir panjang.</p>
	<p>Angel Travel adalah sebuah perusahaan jasa transportasi travel (perjalanan) yang menyediakan angkutan umum bagi masyarakat yang berfikiran ingin pergi ke tempat lain.</p>
	<p>Angel travel berbiaya murah dan sebanding dengan fasilitas yang Angel Travel berikan.</p>
	<p>Di website Angel Travel, Anda dapat memesan (BOOKING) jasa transportasi untuk pulang dan kembali dari perjalanan dengan efektif, efisien dan tepat waktu.</p>
	</div>
	</div>
	<div id='footer'>
	<h3>&copy; Copyright 2016, Angel Travel All Rights Reserved.</h3>
	</div>
	</div>
</body>
</html>
";
?>