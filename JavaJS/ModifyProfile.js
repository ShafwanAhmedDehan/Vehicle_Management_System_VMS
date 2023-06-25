function isModify(modifyform) 
{
	if (modifyform.fname.value === "" || modifyform.lname.value === "" || modifyform.pass.value === "" 
		|| modifyform.newpass.value === "" || modifyform.email.value === "" || modifyform.address.value === ""
		|| modifyform.sos.value === "") 
	{
		if (modifyform.fname.value === "")
		{
			document.getElementById("f_name").innerHTML = "Please fill up the First Name";
		}
		if (modifyform.lname.value === "") 
		{
			document.getElementById("l_name").innerHTML = "Please fill up the Last Name";
		}
		if (modifyform.pass.value === "") 
		{
			document.getElementById("pass01").innerHTML = "Please fill up the previous password";
		}
		if (modifyform.newpass.value === "")
		{
			document.getElementById("pass02").innerHTML = "Please fill up the New Password";
		}
		if (modifyform.email.value === "")
		{
			document.getElementById("email01").innerHTML = "Please fill up the Email";
		}
		if (modifyform.address.value === "")
		{
			document.getElementById("addressregi").innerHTML = "Please fill up the Address";
		}
		if (modifyform.sos.value === "")
		{
			document.getElementById("sos01").innerHTML = "Please fill up the SOS!";
		}
		return false;

	}
}
	