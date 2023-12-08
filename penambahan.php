<?php
	include "koneksi.php";
	
	$kode= $_POST['kode'];
	$jurusan= $_POST['jurusan'];
	$harga= $_POST['harga'];
	
	$query=mysql_query("insert into tb_tiket values('$kode','$jurusan','$harga');",
	$c)or die (mysql_error());
	
	if ($query)
	{
?>	
	<script language="JavaScript">
		document.location='admin.php';
	</script>
<?php
	}
?>