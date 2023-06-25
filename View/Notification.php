<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body onload="notificationshow();">
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br>
	<div class="id100">
	<br> <br> <br>
	<div class="id26"><table id="table06"></table></div>
    <br> <br> <br>
    <div class="id17"><form method="POST" name="NotiClear" action="../Control/ClearNotification.php">
		<input type="submit" value = "CLear">
	</form></div>
	<br> <br> <br>
		<div class="id02">
        <?php
            if($_SESSION['login']==1)
            {
                echo "<a href=\"http://localhost/WebTechProject/Model/Users/Admin.php\">Back</a>";
            }
            elseif($_SESSION['login']==2)
            {
                echo "<a href=\"http://localhost/WebTechProject/Model/Users/Driver.php\">Back</a>";
            }
            else
            {
                echo "<a href=\"http://localhost/WebTechProject/Model/Users/General.php\">Back</a>";
            }
            
        ?>
        </div>
    	</div>

	<div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
	<script src="../JavaJS/Notification.js"></script>
</body>
</html>