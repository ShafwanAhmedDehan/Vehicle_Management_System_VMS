<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBS = "vms system";
	$port = 3306;
	$value = $_GET['q'];
	if (empty($value))
	{
		$_SESSION['error710']="*Please enter License No";
		header("Location:../View/AllDriverInfo.php");
	}
	else
	{
		$con = mysqli_connect($servername, $username, $password, $DBS, $port);
		if(!$con)
		{
			die("Connection Failed : ".$con->connect_error);
			header("Location:../View/Login.php");
		}
		$stmt = $con->prepare("SELECT * FROM license WHERE licenseid = ?");
		$stmt->bind_param("s",$value);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		if (mysqli_num_rows($result)== 1) 
		{
			$sql1 = "UPDATE license SET status = '1' WHERE licenseid = '$value'";
			$result = $con->query($sql1);
			echo "Approved";
		}
		else
		{
			echo "*Wrong License no";
			/*$_SESSION['error710']="*Wrong License No";
			header("Location:../View/AllDriverInfo.php");*/
		}
		mysqli_close($con);
		$stmt->close();
	}
?>