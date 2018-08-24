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

	$sql = "INSERT INTO catagory (C_Name, C_Order, C_Status) 
		VALUES (
		'".$_POST["C_Name"]."',
		'".$_POST["C_Order"]."',
		'".$_POST["C_Status"]."' )";

	$query = mysqli_query($Connection,$sql);

	if($query) {
		echo "Record add successfully";
		echo "";
	}

	mysqli_close($Connection);
?>

</body>
</html>