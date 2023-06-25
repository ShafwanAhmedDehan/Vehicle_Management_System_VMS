<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Job Profile</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body onload="jobshow()";>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br>
	<div class="id100">
	<br><br><br>
	<div class="id26"><table id="table07"></table></div>
    <br> <br> <br>
    <div class="id17"><form method="POST" name="LeaveJob" action="../Control/LeaveJob.php">
		<input type="submit" value = "Leave">
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
	<script src="../JavaJS/JobList_Ajx.js"></script>
</body>
</html>