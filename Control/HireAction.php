<?php	
session_start();
$l_no = $_REQUEST['hire1'];
$phn = $_REQUEST['hire2'];
$servername = "localhost";
$username = "root";
$password = "";
$DBS = "vms system";
$port = 3306; 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if((empty($l_no)) and (empty($phn)))
	{
		$_SESSION['error750']="*Please Enter License No";
		$_SESSION['error751']="*Please Enter Phone No";
		header("Location:../View/UserDrivingLicense.php");
	}
	elseif((empty($l_no)))
	{
		$_SESSION['error750']="*Please Enter License No";
		header("Location:../View/UserDrivingLicense.php");
	}
	elseif((empty($phn)))
	{
		$_SESSION['error751']="*Please Enter Phone No";
		header("Location:../View/UserDrivingLicense.php");
	}
	else
	{
		$con = mysqli_connect($servername, $username, $password, $DBS, $port);
		if(!$con)
		{
			die("Connection Failed : ".$con->connect_error);
			header("Location:../View/Login.php");
		}
		$stmt = $con->prepare("SELECT * FROM license WHERE licenseid= ?");
		$stmt->bind_param("s",$l_no);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		if(mysqli_num_rows($result)== 1)
		{
			$boss = ($_SESSION['userid']);
			$sql1 = "UPDATE license SET assign = '$boss' WHERE licenseid = $l_no";
			$result1 = $con->query($sql1);
			$value=$row["id"];
			if(is_numeric($value))
			{
				$to = "$value";
				$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
				$message = "Hire Request : You got a hire request. Contact : $phn";
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
				$_SESSION['error751']="*Notification Sent To Driver";
				header("Location:../View/UserDrivingLicense.php");
			}
			else
			{
				$to = "$value";
				$subject = "Hire Request";
				$body = "Hire Request : You got a hire request. Contact : $phn";
				$from = "From: ahmedsad0819@gmail.com";
				if (mail($to, $subject, $body, $from))
				{
								
				} 
				else 
				{
								    
				}
				$_SESSION['error751']="*Notification Sent To Driver";
				header("Location:../View/UserDrivingLicense.php");
			}
		}
		else
		{
			$_SESSION['error750']="*Please check License No";
			header("Location:../View/UserDrivingLicense.php");
		}
		mysqli_close($con);
		$stmt->close();
	}
}
else
{
	$_SESSION['error01']="Invail Request Method";
	header("Location:../View/Login.php");
}
?>