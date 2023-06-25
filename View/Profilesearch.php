<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Search</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="id100">
	<center>
		<table>
			<tr>
				<td></td>
				<td> 
					<center>
						<div class="id08"><fieldset>
							<legend><b>Search your profile :</b></legend>
								<form name="prfsearch" onsubmit="return isSearch(this)"; method="POST" action="http://localhost/WebTechProject/Control/OTPaction.php">
									<table>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input type="text" id="search" name="search" placeholder="Enter email or phone no   ">
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div class="idjs01"><span id="searchjs"></span></div>
												<div class="id07">
												<?php 
													if(isset($_SESSION['error5']))
													{
														echo "<b>".$_SESSION['error5']."</b>";
														unset($_SESSION['error5']);
													}
												?>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Send OTP"></td>
										</tr>
									</table>
								</form>
						</fieldset>
						</div>
					</center>
				</td>
			</tr>
		</table>
	</center>
	</div>
	<script src="../JavaJS/ProfileSearch.js"></script>
	<div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>