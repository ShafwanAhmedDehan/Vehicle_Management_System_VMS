<?php
	session_start();
	$search = ($_REQUEST['search']);
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if((empty($search)))
		{
			$_SESSION['error5']="*Please enter email/phone";
			header("Location:../View/Profilesearch.php");
		}
		else
		{
			$_SESSION['srchval02'] = $search;
			header("Location:../View/OTP.php");
		}
	}
	else
	{
		$_SESSION['error5']="*Invalid Request!!!";
		header("Location:../View/Profilesearch.php");
	}
?>