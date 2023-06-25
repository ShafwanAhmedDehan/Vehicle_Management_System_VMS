<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBS = "vms system";
	$port = 3306;

	$con = mysqli_connect($servername, $username, $password, $DBS, $port);
	if(!$con)
	{
		die("Connection Failed : ".$con->connect_error);
		header("Location:../View/Login.php");
	}
	$sql = "SELECT * FROM notification";
	$result = $con->query($sql);
	mysqli_close($con);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) 
	{
		array_push($data, $row);
	}
	echo json_encode($data);
	exit();
?>