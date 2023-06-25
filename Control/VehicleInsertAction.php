<?php	
session_start();
$email2 = $_SESSION['userid'];
$vtype = $_REQUEST['vtype'];
$vnum = $_REQUEST['vnum'];
$servername = "localhost";
$username = "root";
$password = "";
$DBS = "vms system";
$port = 3306; 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if((empty($vtype)) and (empty($vnum)))
	{
		$_SESSION['error51']="*Please select vehicle type";
		$_SESSION['error52']="*Please enter vehicle number";
		header("Location:../View/VehicleInsert.php");
	}
	elseif((empty($vtype)))
	{
		$_SESSION['error51']="*Please select vehicle type";
		header("Location:../View/VehicleInsert.php");
	}
	elseif((empty($vnum)))
	{
		$_SESSION['error52']="*Please enter vehicle number";
		header("Location:../View/VehicleInsert.php");
	}
	else
	{
		$con = mysqli_connect($servername, $username, $password, $DBS, $port);
		if(!$con)
		{
			die("Connection Failed : ".$con->connect_error);
			header("Location:../View/Login.php");
		}
		$sql = "SELECT * FROM vehicle WHERE vnumber = ?";
		$stmt = $con->prepare($sql);
		$stmt->bind_param("s",$vnum);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		if(mysqli_num_rows($result) < 1)
		{
			$sql1 = "INSERT INTO vehicle (id, vnumber, type) VALUES (?,?,?)";
			$stmt = $con->prepare($sql1);
			$stmt->bind_param("sss",$email2,$vnum,$vtype);
			if($stmt->execute())
			{
				$sql2 = "INSERT INTO notification (msg) VALUES ('New Vehicle[NO : $vnum] Inserted Please Check!!')";
				$stmt = $con->prepare($sql2);
				$stmt->execute();
				if(is_numeric($email2))
				{
					$to = "$email2";
					$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
					$message = "Your Vehicle is added successfully and admin will check. Thank you";
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
					$to = "$email2";
					$subject = "License Added";
					$body = "Your Vehicle is added successfully and admin will check. Thank you";
					$from = "From: ahmedsad0819@gmail.com";
					mail($to, $subject, $body, $from);
					header('Location:../View/Login.php');	    
				}
				header("Location:../Model/Users/General.php");
			}
		}
		else
		{
			$_SESSION['error52']="*Duplicate Vehicle Number";
			header("Location:../View/VehicleInsert.php");
		}
	}
}
else
{
	header("Location:../View/Login.php");
}
?>
