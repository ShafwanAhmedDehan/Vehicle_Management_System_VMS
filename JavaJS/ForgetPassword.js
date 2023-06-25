function isForgetPass(ForgetPass) 
{
	if (ForgetPass.npass.value === "" || ForgetPass.cpass.value === "")
	{
		if (ForgetPass.npass.value === "")
		{
			document.getElementById("newpass").innerHTML = "Enter new Password";
		}
		if (ForgetPass.cpass.value === "")
		{
			document.getElementById("confirmpass").innerHTML = "Enter Confirm Password";
		}
		return false;
	}
	else
	{
		const pass01 = ForgetPass.npass.value;
		const pass02 = ForgetPass.cpass.value;
		if (pass01 != pass02)
		{
			document.getElementById("confirmpass").innerHTML = "Password doest not match!!";
			return false;
		}
		else
		{
			if ((pass01.length) < 4)
			{
				document.getElementById("newpass").innerHTML = "[*Minimum length 4 character]";
				document.getElementById("confirmpass").innerHTML = "[*Minimum length 4 character]";
				return false;
			}
		}
	}
}