<?php
	$Hostname = "localhost";  //it2.sut.ac.th
	$Username = "root";  //webdb159g31
	$Password = "12345678";  //passwdg31
	$Database = "ressup";  //webdb159g31
	$Connection = mysqli_connect($Hostname , $Username , $Password , $Database);
	if ($Connection->connect_error) {
		die("Connection_failed: ". $Connection->connect_error);
	}
	mysqli_query($Connection,"SET NAMES UTF8");
?>
