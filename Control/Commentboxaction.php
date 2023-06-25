<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBS = "vms system";
	$port = 3306;
	$complaint = $_REQUEST['complaint'];

	$con = mysqli_connect($servername, $username, $password, $DBS, $port);
	if(!$con)
	{
		die("Connection Failed : ".$con->connect_error);
		header("Location:../View/Login.php");
	}
	$sql = "INSERT INTO notification (msg) VALUES (?)";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("s",$complaint);
	$stmt->execute();
	echo "Submitted To Admin";
	echo "<br>"."</br>";
	echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
?>