<?php
	include "koneksi.php";

	$kode= $_GET['kode'];		
	$query=mysql_query("delete from tb_tiket where kode like '$kode'",
	$c)or die (mysql_error());
	if ($query){
		header("location:admin.php");
		}
	else{			
	echo"gagal menyimpan </br> <a href='index.php'>Kembali Ke Halaman Awal</a> </br> <a href='index.php'>Ulangi menyimpan</a>";
	}
?>