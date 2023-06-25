<?php	
	session_start();
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$Gender = $_REQUEST['Gender'];
	$pass = $_REQUEST['pass'];
	$email = $_REQUEST['email'];
	$nid = $_REQUEST['nid'];
	$user = $_REQUEST['User'];
	$address = $_REQUEST['address'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBS = "vms system";
	$port = 3306; 
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(empty($fname))
		{
			$_SESSION['error100']="*Please enter first name";
			header("Location:../View/Registration.php");
		}
		if(empty($lname))
		{
			$_SESSION['error200']="*Please enter last name";
			header("Location:../View/Registration.php");
		}
		if(empty($Gender))
		{
			$_SESSION['error300']="*Please enter Gender";
			header("Location:../View/Registration.php");
		}
		if(empty($email))
		{
			$_SESSION['error400']="*Please enter email";
			header("Location:../View/Registration.php");
		}
		if(empty($nid))
		{
			$_SESSION['error500']="*Please enter nid";
			header("Location:../View/Registration.php");
		}
		if(empty($user))
		{
			$_SESSION['error600']="*Please enter user mode";
			header("Location:../View/Registration.php");
		}
		if(empty($address))
		{
			$_SESSION['error700']="*Please enter your address";
			header("Location:../View/Registration.php");
		}
		if(empty($pass))
		{
			$_SESSION['error800']="*Please enter your password";
			header("Location:../View/Registration.php");
		}
		else
		{
			$con = mysqli_connect($servername, $username, $password, $DBS, $port);
			if(!$con)
			{
				die("Connection Failed : ".$con->connect_error);
				header("Location:../View/Ragistration.php");
			}
			$sql = "SELECT emailphn FROM uservms WHERE emailphn= ?";
			$stmt = $con->prepare($sql);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$result = $stmt->get_result();
			$stmt->close();
			if(mysqli_num_rows($result) == 0)
			{
				$sql1 = "INSERT INTO uservms (emailphn, password, fname, lname, gender, nid, usertype, address) VALUES (?,?,?,?,?,?,?,?)"; 
				$stmt1 = $con->prepare($sql1); 
				$stmt1->bind_param("ssssssss",$email,$pass,$fname,$lname,$Gender,$nid,$user,$address);
				if ($stmt1->execute()) 
				{
					mysqli_close($con);
					$stmt1->close();
  					if(is_numeric($email))
					{
						$to = "$email";
						$token = "83861845311678452331e08b5ad6d2717b20d9206dc4fa0f819e";
						$message = "Your account is created successfully. Thank you";
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
						$to = "$email";
						$subject = "Account created";
						$body = "Your account is created successfully. Thank you";
						$from = "From: ahmedsad0819@gmail.com";
						mail($to, $subject, $body, $from);
						header('Location:../View/Login.php');	    
					}
				}
			}
			else
			{
				$_SESSION['error400']="*Duplicate value enter new";
				header("Location:../View/Registration.php");
			}
		}
	}
	else
	{
		$_SESSION['error01']="Invail Request Method";
		header("Location:../View/Registration.php");
	}
?>

