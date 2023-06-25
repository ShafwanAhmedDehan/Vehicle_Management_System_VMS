<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vehicles Information</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body onload="allvehicleshow();">
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br>
	<div class="id100">
	<br> <br> <br>
	<div class="id26"><table id="table04"></table></div>
    <br> <br> <br>
    <div class="id17"><form method="POST" name="DeletBar" onsubmit="return isDelete(this)"; action="../Control/DeleteVehicle.php">
		<input type="text" id="search1" name="search1" placeholder="Enter Vehicle Number to delete">
		<input type="submit" value = "Delete">
		<div class="idjs01"><span id="delete02"></span></div>
		<div class="id07">
		<?php
			if(isset($_SESSION['error71']))
			{
				echo "<b>".$_SESSION['error71']."</b></p>";
				unset($_SESSION['error71']);
			}
		?>
		</div>
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
	<script src="../JavaJS/Vehicledelete.js"></script>
	<script src="../JavaJS/VehicleList_Ajx.js"></script>
</body>
</html>