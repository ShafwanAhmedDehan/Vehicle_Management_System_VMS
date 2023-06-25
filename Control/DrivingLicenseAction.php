<?php	
session_start();
$lino = $_REQUEST['lino'];
$issue = date('Y-m-d', strtotime($_REQUEST['issue']));
$expi = date('Y-m-d', strtotime($_REQUEST['expi']));
$perday = $_REQUEST['p_day'];
$permonth = $_REQUEST['p_month'];
$servername = "localhost";
$username = "root";
$password = "";
$DBS = "vms system";
$port = 3306; 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if((empty($lino)))
	{
		$_SESSION['error201']="*Please enter your license number";
		header("Location:../View/DrivingLicense.php");
	}
	if((empty($_REQUEST['issue'])))
	{
		$_SESSION['error202']="*Please enter issue date";
		header("Location:../View/DrivingLicense.php");
	}
	if((empty($_REQUEST['expi'])))
	{
		$_SESSION['error203']="*Please enter expiry date";
		header("Location:../View/DrivingLicense.php");
	}
	if((empty($_REQUEST['p_day'])))
	{
		$_SESSION['error204']="*Please enter Per day wages";
		header("Location:../View/DrivingLicense.php");
	}
	if((empty($_REQUEST['p_month'])))
	{
		$_SESSION['error205']="*Please enter Per day wages";
		header("Location:../View/DrivingLicense.php");
	}
	else
	{
		$con = mysqli_connect($servername, $username, $password, $DBS, $port);
		if(!$con)
		{
			die("Connection Failed : ".$con->connect_error);
			header("Location:../View/Login.php");
		}
		$sql = "SELECT licenseid from license WHERE licenseid = ?";
		$stmt = $con->prepare($sql);
		$stmt->bind_param("s",$lino);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		if(mysqli_num_rows($result) > 0)
		{
			$_SESSION['error201']="*Duplicate entry detected";
			header("Location:../View/DrivingLicense.php");
		}
		else
		{
			$email1= $_SESSION['userid'];
			$sql = "INSERT INTO license (id,licenseid,issue,expair,perday,permonth) VALUES (?,?,'$issue','$expi',?,?)";
			$stmt = $con->prepare($sql);
			$stmt->bind_param("ssii",$email1,$lino,$perday,$permonth);
			if ($stmt->execute()) 
			{
				$sql2 = "INSERT INTO notification (msg) VALUES ('New License[NO : $lino] Inserted Please Check!!')";
				$stmt = $con->prepare($sql2);
				$stmt->execute();
				mysqli_close($con);
				$stmt->close();
  				if(is_numeric($email1))
				{
					$to = "$email1";
					$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
					$message = "Your license is added successfully and wait for admin approval. Thank you";
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
					$to = "$email1";
					$subject = "License Added";
					$body = "Your license is added successfully and wait for admin approval. Thank you";
					$from = "From: ahmedsad0819@gmail.com";
					mail($to, $subject, $body, $from);
					header('Location:../View/Login.php');	    
				}

			}
		}
	}
}
else
{
	header("Location:../View/Login.php");
}
?>