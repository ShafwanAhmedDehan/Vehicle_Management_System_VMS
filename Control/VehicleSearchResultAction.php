<?php
	//session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBS = "vms system";
	$port = 3306; 
	$search = $_REQUEST['search'];
	$type = $_SESSION['user01'];
	$email = $_SESSION['userid'];
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(empty($search))
		{
			$_SESSION['error50']="*Enter search value!";
			if($type==="General User" or $type==="Owner")
			{
				header("Location:../Model/Users/General.php");
			}
			elseif($type==="Driver")
			{
				header("Location:../Model/Users/Driver.php");
			}
			else
			{
				header("Location:../Model/Users/Admin.php");
			}
		}
		else
		{
			unset($_SESSION['search']);
			$con = mysqli_connect($servername, $username, $password, $DBS, $port);
			if(!$con)
			{
				die("Connection Failed : ".$con->connect_error);
				header("Location:../View/Login.php");
			}
			$sql = "SELECT id, vnumber, type FROM vehicle WHERE vnumber=?";
			$stmt = $con->prepare($sql);
			$stmt->bind_param("s",$search);
			$stmt->execute();
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();
			mysqli_close($con);
			$stmt->close();
			if(mysqli_num_rows($result)== 1)
			{
				$id = $row["id"];
				$con1 = mysqli_connect($servername, $username, $password, $DBS, $port);
				if(!$con1)
				{
					die("Connection Failed : ".$con1->connect_error);
					header("Location:../View/Login.php");
				}
				$sql1 = "SELECT fname, lname, emailphn, nid FROM uservms WHERE emailphn=?";
				$stmt = $con1->prepare($sql1);
				$stmt->bind_param("s",$id);
				$stmt->execute();
				$result01 = $stmt->get_result();
				$row01 = $result01->fetch_assoc();
				mysqli_close($con1);
				$stmt->close();
			}
			else
			{
				$_SESSION['error50']="*No vehicle found";
				if($type==="General User" or $type==="Owner")
				{
					header("Location:../Model/Users/General.php");
				}
					elseif($type==="Driver")
				{
					header("Location:../Model/Users/Driver.php");
				}
				else
				{
					header("Location:../Model/Users/Admin.php");
				}
			}
		}
	}
?>