<?php
	$nama= $_POST['nama'];
	$pass= $_POST['pass'];
	if($nama=='admin' &&$pass=='admin'){
		header("location:Admin.php");
	}else if($nama=='member' &&$pass=='member'){
		header("location:index.html");
	}else
	{
		header("location:index.php");
	}
?>