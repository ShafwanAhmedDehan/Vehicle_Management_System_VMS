<?php
	//session_start();
	$value = $_SESSION['value'];
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if((empty($_REQUEST['otp'])))
		{
			$_SESSION['error6']="*Please enter OTP";
			header("Location:../View/OTP.php");
		}
		else
		{
			if($value == $_REQUEST['otp'])
			{
				unset($_SESSION['value']);
			}
			else
			{
				$_SESSION['error6']="*Wrong OTP!!";
				header("Location:../View/OTP.php");
			}
		}
	}
?>