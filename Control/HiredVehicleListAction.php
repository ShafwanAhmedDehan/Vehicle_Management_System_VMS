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
	$sql = "SELECT * FROM license WHERE id= ? AND assign != 5";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("s",$userid);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	$data = array();
	if (mysqli_num_rows($result) == 1)
	{
		$id = $row["assign"];
		$_SESSION['ownerid'] = $id;
		$sql1 = "SELECT * FROM vehicle WHERE id = '$id'";
		$result = $con->query($sql1);
		while ($row = mysqli_fetch_assoc($result)) 
		{
			array_push($data, $row);
		}
		echo json_encode($data);
		mysqli_close($con);
		$stmt->close();
		exit();
	}
	else
	{
		$_SESSION['error777']="*No Job Assigned";
		header("Location:../Model/Users/Driver.php");
	}
	mysqli_close($con);
	$stmt->close();

?>