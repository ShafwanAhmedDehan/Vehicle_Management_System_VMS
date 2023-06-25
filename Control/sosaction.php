<?php
	session_start();
	$email1 = $_SESSION['userid'];
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
	$sql = "SELECT sos FROM uservms WHERE emailphn=?";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("s",$email1);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	$to_num = $row["sos"];
	$length = strlen($to_num);
	if($length !=0)
	{
		$to = "$to_num";
		$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
		$message = "ALERT!! Your friend need your help or he/she in danger. Contact info : $email1";
		$url = "http://api.greenweb.com.bd/api.php?json";
		$data= array('to'=>"$to",'message'=>"$message",'token'=>"$token"); 
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_ENCODING, '');
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$smsresult = curl_exec($ch);
		header('Location:../View/Login.php');
	}
	else
	{
		$type = $_SESSION['user01'];
		if($type==="General User" or $type==="Owner")
		{
			$_SESSION['error302']="*No sos number found";
			header("Location:../Users/General.php");
		}
		elseif($type==="Driver")
		{
			$_SESSION['error302']="*No sos number found";
			header("Location:../Users/Driver.php");
		}
		else
		{
			$_SESSION['error302']="*No sos number found";
			header("Location:../Users/Admin.php");
		}
		$stmt->close();
		mysqli_close($con);
			
	}
?>