<html>
<head>
<title>Article</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$Hostname = "localhost"; 
	$Username = "root";  
	$Password = ""; 
	$Database = "ressup";  
	$Connection = mysqli_connect($Hostname , $Username , $Password , $Database);
	if ($Connection->connect_error) {
		die("Connection_failed: ". $Connection->connect_error);
	}
	mysqli_query($Connection,"SET NAMES UTF8");

	$sql = "INSERT INTO article (A_Name, A_Post, A_Update, A_Order, A_Content, A_Description, A_Image, A_Status) 
		VALUES (
		'".$_POST["A_Name"]."',
		'".$_POST["A_Post"]."',
		'".$_POST["A_Update"]."',
		'".$_POST["A_Order"]."',
		'".$_POST["A_Content"]."',
		'".$_POST["A_Description"]."',
		'".$_POST["A_Image"]."',
		'".$_POST["A_Status"]."')";

	$query = mysqli_query($Connection,$sql);

	if($query) {
		echo "Record add successfully";
	}

	mysqli_close($Connection);
?>
</body>
</html>