<?php
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
	$sql = "SELECT * FROM uservms WHERE emailphn= ?";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("s",$userid);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	mysqli_close($con);
	$stmt->close();
?>