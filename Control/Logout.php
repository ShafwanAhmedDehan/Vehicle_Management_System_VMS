<?php   
session_start();
unset($_SESSION['email']);
unset($_SESSION['pass']);
unset($_SESSION['login']);
unset($_SESSION['first']);
unset($_SESSION['last']);
setcookie("cookiefname1", "", time() - (3600*24), "/"); 
setcookie("cookielname1", "", time() - (3600*24), "/");
setcookie("cookieaddress1", "", time() - (3600*24), "/");
setcookie("cookieid1", "", time() - (3600*24), "/");
setcookie("cookiesos1", "", time() - (3600*24), "/");
session_destroy();
header("Location:../View/Login.php");
exit();
?>