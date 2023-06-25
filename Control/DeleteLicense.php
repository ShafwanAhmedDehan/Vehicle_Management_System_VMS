<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBS = "vms system";
	$port = 3306;
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(empty($_REQUEST['search1']))
		{
			$_SESSION['error71']="*Please enter email/phone";
			header("Location:../View/AllDriverInfo.php");
		}
		else
		{
			$del_value =  $_REQUEST['search1'];
			$con = mysqli_connect($servername, $username, $password, $DBS, $port);
			if(!$con)
			{
				die("Connection Failed : ".$con->connect_error);
				header("Location:../View/Login.php");
			}
			$sql = "DELETE FROM license WHERE id = ?";
			$stmt = $con->prepare($sql);
			$stmt->bind_param("s",$del_value);
			if($stmt->execute())
			{
				$first = $_SESSION['first'];
				$last = $_SESSION['last'];
				if(is_numeric($del_value))
				{
					$to = "$del_value";
					$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
					$message = "Your License Information Deleted by an Admin ($first $last) from VMS. ";
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
					header("Location:../View/AllDriverInfo.php");
				}
				else
				{
					$to = "$del_value";
					$subject = "License Information Delete";
					$body = "Your License Information Deleted by an Admin ($first $last) from VMS.";
					$from = "From: ahmedsad0819@gmail.com";
					if (mail($to, $subject, $body, $from))
					{
						header("Location:../View/AllDriverInfo.php");		
					} 
					else 
					{
						header("Location:../View/AllDriverInfo.php");    
					}
				}
			}
			else
			{
				$_SESSION['error71']="*User doesn't exist!!";
				header("Location:../View/AllDriverInfo.php");
			}
			mysqli_close($con);
			$stmt->close();
		}
	}
?>