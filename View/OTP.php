<?php
	session_start();
	require ('../Control/OTPcheck.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>OTP verify</title>
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
								<form name="OTPenter" onsubmit="return isotp(this)"; method="POST" action="http://localhost/WebTechProject/View/Forgetpassword.php">
									<table>
										<tr>
											<td></td>
											<td></td>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input type="text" id="otp" name="otp" placeholder="Enter the OTP  ">
											</td>
										</tr>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div class="idjs01"><span id="otpmsg"></span></div>
												<div class="id07">
												<?php 
													if(isset($_SESSION['error6']))
													{
														echo "<b>".$_SESSION['error6']."</b>";
														unset($_SESSION['error6']);
													}
												?>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Next"></td>
										</tr>
									</table>
								</form>
						</fieldset>
						</div>
					</center>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><center><div class="id02"><b>Didn't get the code? </b></div> <input type='submit' name='submitAdd' value='Resend' onclick='window.location.reload();'></td>
			</tr>
		</table>
	</center>
	</div>
	<script src="../JavaJS/OTPenter.js"></script>
	<div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>
