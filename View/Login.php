<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VMS Log In </title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center>
	<div class="id100"><div class = "squareshape01">
		<table>
			<tr>
				<td></td>
				<td> 
					<center>
					<fieldset>
							<legend><b>Login :</b></legend>
								<form name="loginForm" onsubmit="return isLogin(this)"; action="http://localhost/WebTechProject/Control/Home.php" method="POST">
									<table>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input type="text" id="email" name="email" placeholder="Enter email or phone no   " value="<?php if (isset($_COOKIE["cookieuser1"])) {echo $_COOKIE["cookieuser1"];}?>">
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div class="idjs01"><span id="emailmsg"></span></div>
												<div class="id07">
												<?php 
													if(isset($_SESSION['error1']))
													{
														echo "<b>".$_SESSION['error1']."</b>";
														 unset($_SESSION['error1']);
													}
												?>
											</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input type="Password" id="pass" name="pass" placeholder="Enter password  " value="<?php if (isset($_COOKIE["cookiepass1"])) {echo $_COOKIE["cookiepass1"];}?>">
											</td>
											<td style="color: floralwhite;">
												<input type="checkbox" id="savelog" name="savelog" value= 1>
												<label for="vehicle1">Remember me</label><br>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div class="idjs01"><span id="passmsg"></span></div>
												<div class="id07">
												<?php 
													if(isset($_SESSION['error2']))
													{
														echo "<b>".$_SESSION['error2']."</b>";
														unset($_SESSION['error2']);
														session_destroy(); 
													}
												?>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td><a href="http://localhost/WebTechProject/View/Profilesearch.php" target="_blank"><div class="id04"><b>Forget Password</b></a>&nbsp&nbsp&nbsp<input type="submit" value="Login"></div></td>
										</tr>
									</table>
								</form>
						</fieldset>
					</center>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><center><b>Don't have an account?</b><a href="http://localhost/WebTechProject/View/Registration.php"><div class="id04"><b> Register here.</b></a></div></center></td>
			</tr>
		</table>
	</div>
    </div>
	</center>
	<script src="../JavaJS/LoginPage.js"></script>
	<div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>