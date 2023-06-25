<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Drivers Information</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body onload="alldrivershow()";>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br>
	<div class="id100">
	<br><br><br>
	<div class="id26"><table id="table02"></table></div>
    <br> <br> <br>
    <div class="id17"><form method="POST" name="DeleteBar" onsubmit="return isDelete(this)"; action="../Control/DeleteLicense.php">
		<input type="text" id="search1" name="search1" placeholder="Enter User ID to delete">
		<input type="submit" value = "Delete">
		<div class="idjs01"><span id="delete03"></span></div>
		<div class="id07">
		<?php
			if(isset($_SESSION['error711']))
			{
				echo "<b>".$_SESSION['error711']."</b></p>";
				unset($_SESSION['error711']);
			}
		?>
		</div>
	</form></div>
	<br> <br> <br>
	<div class="id17"><form method="POST" name="StatusBar" onsubmit="return isAccept(this)";>
		<input type="text" id="search001" name="search001" placeholder="Enter License No to Approve">
		<input type="submit" value = "Accept">
		<div class="idjs01"><span id="delete04"></span></div>
		<div class="id07">
		<?php
			if(isset($_SESSION['error710']))
			{
				echo "<b>".$_SESSION['error710']."</b></p>";
				unset($_SESSION['error710']);
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
	<script src="../JavaJS/Driverdelete.js"></script>
	<script src="../JavaJS/ApproveDriver.js"></script>
	<script src="../JavaJS/Driverdelete_Ajx.js"></script>
</body>
</html>