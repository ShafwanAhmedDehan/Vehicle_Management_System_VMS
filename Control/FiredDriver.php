<?php
	session_start();
	$userid = $_SESSION['userid'];
	$value = $_SESSION['driverid'];
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
	$sql = "UPDATE license SET assign = 5 WHERE assign= ?";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("s",$userid);
	$stmt->execute();
	if(is_numeric($value))
	{
		$to = "$value";
		$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
		$message = "Owner Fired Your Job. Thank You";
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
		header("Location:../View/HiredDriver.php");
	}
	else
	{
		$to = "$value";
		$subject = "Fired Job";
		$body = "Owner Fired Your Job. Thank You";
		$from = "From: ahmedsad0819@gmail.com";
		if (mail($to, $subject, $body, $from))
		{
			header("Location:../View/HiredDriver.php");					
		} 
		else 
		{
			header("Location:../View/HiredDriver.php");				    
		}
	}
	mysqli_close($con);
	$stmt->close();

?>