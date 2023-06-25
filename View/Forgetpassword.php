<?php
	session_start();
	require ('../Control/OTPcheckAction.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Password set</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center>
		<div class="id100">
		<table>
			<tr>
				<td></td>
				<td> 
					<center>
						<div class="id08"><fieldset>
							<legend><b>Reset your password :</b></legend>
								<form name="ForgetPass" onsubmit="return isForgetPass(this)"; method="POST" action="http://localhost/WebTechProject/Control/Forgetpassaction.php">
									<table>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input type="Password" id="npass" name="npass" placeholder="Enter new password   ">
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div class="idjs01"><span id="newpass"></span></div>
												<div class="id07">
												<?php 
													if(isset($_SESSION['error11']))
													{
														echo "<b>".$_SESSION['error11']."</b>";
														 unset($_SESSION['error11']);
													}
												?>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input type="Password" id="cpass" name="cpass" placeholder="Confirm your password  ">
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div class="idjs01"><span id="confirmpass"></span></div>
												<div class="id07">
												<?php 
													if(isset($_SESSION['error22']))
													{
														echo "<b>".$_SESSION['error22']."</b>";
														unset($_SESSION['error22']);
													}
												?>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Confirm"></td>
										</tr>
									</table>
								</form>
						</fieldset>
						</div>
					</center>
				</td>
			</tr>
		</table>
		</div>
	</center>
	<script src="../JavaJS/ForgetPassword.js"></script>
	<div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>