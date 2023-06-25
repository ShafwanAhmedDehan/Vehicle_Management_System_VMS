<?php
	session_start();
	$newpass = $_REQUEST['npass'];
	$confirm = $_REQUEST['cpass'];
	$profile = $_SESSION['srchval02'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBS = "vms system";
	$port = 3306;
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(empty($confirm) and empty($newpass))
		{
			$_SESSION['error11']="*Enter new pass";
			$_SESSION['error22']="*Enter confirm pass";
			header("Location:../View/Forgetpassword.php");
		}
		elseif(empty($confirm))
		{
			$_SESSION['error22']="*Enter confirm pass";
			header("Location:../View/Forgetpassword.php");
		}
		elseif(empty($newpass))
		{
			$_SESSION['error11']="*Enter new pass";
			header("Location:../View/Forgetpassword.php");
		}
		else
		{
			if($newpass == $confirm)
			{
				$con = mysqli_connect($servername, $username, $password, $DBS, $port);
				if(!$con)
				{
					die("Connection Failed : ".$con->connect_error);
					header("Location:../View/Login.php");
				}
				$sql = "UPDATE uservms SET password = ? WHERE emailphn= ?";
				$stmt = $con->prepare($sql);
				$stmt->bind_param("ss",$confirm,$profile);
				if ($stmt->execute()) 
				{
					mysqli_close($con);
					$stmt->close();
  					unset($_SESSION['srchval02']);
  					if(is_numeric($profile))
					{
						$to = "$profile";
						$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
						$message = "Your password changed successfully";
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
						$to = "$profile";
						$subject = "password changed";
						$body = "Your password changed successfully";
						$from = "From: ahmedsad0819@gmail.com";
						if (mail($to, $subject, $body, $from))
						{
								
						} 
						else 
						{
								    
						}
					}
				}
				unset($_SESSION['srchval02']);
				header("Location:../View/Login.php");
			} 
			else
			{
				$_SESSION['error22']="*Not matched";
				header("Location:../View/Forgetpassword.php");
			}
		}
	}
?>