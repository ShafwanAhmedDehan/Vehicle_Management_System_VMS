<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Drivers Information</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body onload="drivershow()";>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br>
	<div class="id100">
    <br> <br> <br>
    <div class="id26"><table id="table01"></table></div>
    <br> <br>
    <b style="color: white;">To Hire :</b>
    <br> <br>
    <div class="id17"><form method="POST" name="HireBar" onsubmit="return isHire(this)"; action="../Control/HireAction.php">
		<input type="text" id="hire1" name="hire1" placeholder="Enter License Number">
		<div class="idjs01"><span id="Hire01"></span></div>
		<div class="id07">
		<?php
			if(isset($_SESSION['error750']))
			{
				echo "<b>".$_SESSION['error750']."</b>";
				unset($_SESSION['error750']);
			}
		?>
		</div>
		<br> <br>
		<input type="text" id="hire2" name="hire2" placeholder="Enter Your Number">
		<div class="idjs01"><span id="Hire02"></span></div>
		<div class="id07">
		<?php
			if(isset($_SESSION['error751']))
			{
				echo "<b>".$_SESSION['error751']."</b>";
				unset($_SESSION['error751']);
			}
		?>
		</div>
		<br><br>
		<input type="submit" value = "Hire">
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
	<script src="../JavaJS/Hire.js"></script>
	<script src="../JavaJS/UserDrivingLicense_Ajx.js"></script>
</body>
</html>