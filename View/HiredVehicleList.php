<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vehicle List</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body onload="HiredVehicleshow()";>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br>
	<div class="id100">
	<br><br><br>
	<div class="id26"><table id="table10"></table></div>
    <br> <br> <br>
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

	<div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
	<script src="../JavaJS/HiredVehicle_Ajx.js"></script>
</body>
</html>