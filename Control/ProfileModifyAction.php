<?php	
session_start();
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$pass = $_REQUEST['pass'];
$newpass = $_REQUEST['newpass'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$sos = $_REQUEST['sos'];
$servername = "localhost";
$username = "root";
$password = "";
$DBS = "vms system";
$port = 3306; 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if((empty($fname)) and (empty($lname)) and (empty($pass)) and (empty($newpass)) and (empty($email)) and (empty($address)) and (empty($sos)))
	{
		$_SESSION['error101']="*Please enter first name";
		$_SESSION['error102']="*Please enter last name";
		$_SESSION['error103']="*Please enter password";
		$_SESSION['error104']="*Please enter new password";
		$_SESSION['error105']="*Please enter email/phone number";
		$_SESSION['error106']="*Please enter address";
		$_SESSION['error107']="*Please enter emergency contact";
		header("Location:../View/ModifyProfile.php");
	}
	if((empty($fname)))
	{
		$_SESSION['error101']="*Please enter first name";
		header("Location:../View/ModifyProfile.php");
	}
	if((empty($lname)))
	{
		$_SESSION['error102']="*Please enter last name";
		header("Location:../View/ModifyProfile.php");
	}
	if((empty($pass)))
	{
		$_SESSION['error103']="*Please enter password";
		header("Location:../View/ModifyProfile.php");
	}
	if((empty($newpass)))
	{
		$_SESSION['error104']="*Please enter new password";
		header("Location:../View/ModifyProfile.php");
	}
	if((empty($email)))
	{
		$_SESSION['error105']="*Please enter email/phone number";
		header("Location:../View/ModifyProfile.php");
	}
	if((empty($address)))
	{
		$_SESSION['error106']="*Please enter address";
		header("Location:../View/ModifyProfile.php");
	}
	if((empty($sos)))
	{
		$_SESSION['error107']="*Please enter emergency contact";
		header("Location:../View/ModifyProfile.php");
	}
	else
	{
		
		$con = mysqli_connect($servername, $username, $password, $DBS, $port);
		if(!$con)
		{
			die("Connection Failed : ".$con->connect_error);
			header("Location:../View/Login.php");
		}
		$sql = "SELECT password FROM uservms WHERE password= ?";
		$stmt = $con->prepare($sql);
		$stmt->bind_param("s",$pass);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		$stmt->close();
		if(mysqli_num_rows($result) > 0)
		{
			$pass01 = $_SESSION['userid'];
			$sql1="UPDATE uservms SET fname= ?, lname= ?, password= ?, emailphn= ?, address= ?, sos= ? WHERE emailphn= ?";
			$stmt1 = $con->prepare($sql1);
			$stmt1->bind_param("sssssss",$fname,$lname,$newpass,$email,$address,$sos,$pass01);
			$stmt1->execute();
			$result = $stmt1->get_result();
			$stmt1->close();
			header("Location:../View/Login.php");
		}
		else
		{
			$_SESSION['error103']="*Wrong password";
			header("Location:../View/ModifyProfile.php");
		}
	}
}
else
{
	header("Location:../View/Login.php");
}
?>