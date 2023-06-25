<?php
	session_start();
	if($_SESSION['login']==1)
	{
		
	}
	else
	{
		header("Location:../../View/Login.php");
	}
?>

<!DOCTYPE html>
<html>
<head><title>Home Page</title></head>
<link rel="stylesheet" href="../../Design/design.css">
<center>
	<body>
		<div class="id01"><header><?php include "../../Top/Top.html" ?> </header></div>
		<div class="navigation">
			<div class="id13">
				<?php
					echo "<b>"."Welcome , ".$_SESSION['first']." ".$_SESSION['last']."</b>";
				?>
			</div>
			<button onclick="document.location='http://localhost/WebTechProject/Control/Logout.php'"><b>Log Out</b></button>
		</div>
			<div class="boxinfo">
        		<div class="id14"><button onclick="document.location='http://localhost/WebTechProject/View/Profile.php'"><b>Profile</b></button></div>

        		<div class="id15"><button onclick="document.location='http://localhost/WebTechProject/View/ModifyProfile.php'"><b>Modify Profile</b></button></div>

				<div class="id16"><button onclick="document.location='http://localhost/WebTechProject/View/UserInfoDisplay.php'" ><b>User Information Display</b></button>
					<button id="v_info" onclick="document.location='http://localhost/WebTechProject/View/AllVehicleInfo.php'" ><b>Vehicle Info</b></button>
					<button id="v_info" onclick="document.location='http://localhost/WebTechProject/View/AllDriverInfo.php'" ><b>Drivers Info</b></button>
					<button id="v_info" onclick="document.location='http://localhost/WebTechProject/View/Notification.php'" ><b>Notification</b></button>
				</div>
		<br><br>
		<div class="id17">
			<form method="POST" name="SearchBar" onsubmit="return isSearch(this)"; action="../../View/vehiclepage.php">
			<input type="text" id="search" name="search" placeholder="Enter vehicle number">
			<input type="submit" value = "Search">
			<div class="idjs01"><span id="searchjs01"></span></div>
			<div class="id07">
				<?php
					if(isset($_SESSION['error50']))
					{
						echo "<b>".$_SESSION['error50']."</b></p>";
						unset($_SESSION['error50']);
					}
				?>
			</div>
			</form></div>
		<br>
		<div class="id18"><button onclick="document.location='http://localhost/WebTechProject/Control/sosaction.php'" ><b>SOS</b></button></div>
		<div class="id07">
			<?php
				if(isset($_SESSION['error302']))
				{
					echo "<b>".$_SESSION['error302']."</b></p>";
					unset($_SESSION['error302']);
				}
			?>
		</div>
		<br> <br>
		<div class="id19">
			<form method="post" name="Complaint01" onsubmit="return isComment(this)"; action="http://localhost/WebTechProject/Control/Commentboxaction.php">
    			<textarea name="complaint" id="complaint" placeholder="Enter Complaint " autocomplete="off"></textarea><br>
    			<div class="idjs01"><span id="comment01"></span></div>
    			<input type="submit" value="Submit">
			</form>
		</div>
	</div>
	<script src="../../JavaJS/SearchBar.js"></script>
	<script src="../../JavaJS/Commentjs.js"></script>
	<div class="id01"><footer> <?php include "../../Bottom/End.html" ?> </footer></div>
</body>
</center>
</html>