<?php
	session_start();
	$userid = $_SESSION['userid'];
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
	$data = array();
	$sql1 = "SELECT * FROM vehicle WHERE id = '$userid'";
	$result = $con->query($sql1);
	while ($row = mysqli_fetch_assoc($result)) 
	{
		array_push($data, $row);
	}
	echo json_encode($data);
	mysqli_close($con);
	exit();
?>