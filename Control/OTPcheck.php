<?php
	//session_start();
	$locksearch = $_SESSION['srchval02'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBS = "vms system";
	$port = 3306;
	$value = mt_rand(1000,9999);
	if(!isset($_SESSION['value']))
	{
		$_SESSION['value'] = $value;
	}
	$lockvalue = $_SESSION['value'];
	if(empty($locksearch))
	{
		header("Location:../View/Profilesearch.php");
	}
	else
	{
		$con = mysqli_connect($servername, $username, $password, $DBS, $port);
		if(!$con)
		{
			die("Connection Failed : ".$con->connect_error);
			header("Location:../View/Login.php");
		}
		$sql = "SELECT emailphn FROM uservms WHERE emailphn= ?";
		$stmt = $con->prepare($sql);
		$stmt->bind_param("s",$locksearch);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		if(mysqli_num_rows($result)== 1)
		{
			if(is_numeric($locksearch))
			{
				$to = "$locksearch";
				$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
				$message = "Your verification code $lockvalue";
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
			}
			else
			{
				$to = "$locksearch";
				$subject = "OTP Code";
				$body = "Your verification code $lockvalue";
				$from = "From: ahmedsad0819@gmail.com";
				if (mail($to, $subject, $body, $from))
				{
					
				} 
				else 
				{
					
				}
			}
		}
		else
		{
			$_SESSION['error5']="*No profile found";
			header("Location:../View/Profilesearch.php");
		}
		mysqli_close($con);
		$stmt->close(); 
	}
?>