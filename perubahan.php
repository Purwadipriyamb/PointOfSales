<?php
	include "koneksi.php";

	$kode= $_GET['kode'];
	$jurusan= $_POST['jurusan'];
	$harga= $_POST['harga'];

	$query=mysql_query("update tb_tiket set jurusan='$jurusan', harga='$harga' where kode like '$kode';",
	$c)or die (mysql_error());
	
	if ($query){
?>	
	<script language="JavaScript">
		document.location='index.php';
	</script>
<?php
	}
?>