function isLogin(loginForm) 
{
	if (loginForm.email.value === "" || loginForm.pass.value === "") 
	{
		if (loginForm.email.value === "")
		{
			document.getElementById("emailmsg").innerHTML = "Please fill up the Email";
		}
		if (loginForm.pass.value === "") 
		{
			document.getElementById("passmsg").innerHTML = "Please fill up the Password";
		}
		return false;
	}
	else
	{
		const num_regx = /(^(\+8801|8801|01))[1|3-9]{1}(\d){8}$/;
		const email_regx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		if (isNaN(loginForm.email.value)) 
		{
			if (!email_regx.test(loginForm.email.value))
			{
				document.getElementById("emailmsg").innerHTML = "Invaild email!!!";
				return false;
			}
		}
		else
		{
			if (!num_regx.test(loginForm.email.value)) 
			{
				document.getElementById("emailmsg").innerHTML = "Invaild Phone no!!!";
				return false;
			}
		}
		const pass01 = loginForm.pass.value
		if ((pass01.length) < 4)
		{
			document.getElementById("passmsg").innerHTML = "Invaild Password";
			return false;
		}
	}
}
	