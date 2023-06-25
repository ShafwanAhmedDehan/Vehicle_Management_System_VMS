function isRegi(regiForm) 
{
	if (regiForm.fname.value === "" || regiForm.lname.value === "" || regiForm.Gender.value === ""
		|| regiForm.email.value === "" || regiForm.pass.value === "" || regiForm.nid.value === ""
			|| regiForm.User.value === "" || regiForm.address.value === "") 
	{
		if (regiForm.fname.value === "")
		{
			document.getElementById("f_name").innerHTML = "Please fill up the First Name";
		}
		if (regiForm.lname.value === "") 
		{
			document.getElementById("l_name").innerHTML = "Please fill up the Last Name";
		}
		if (regiForm.Gender.value === "") 
		{
			document.getElementById("genderjs").innerHTML = "Please select the Gender";
		}
		if (regiForm.email.value === "") 
		{
			document.getElementById("email/phone").innerHTML = "Please fill up the email/phone";
		}
		if (regiForm.pass.value === "")
		{
			document.getElementById("passregi").innerHTML = "Please fill up the Password";
		}
		if (regiForm.nid.value === "")
		{
			document.getElementById("nidregi").innerHTML = "Please fill up the NID";
		}
		if (regiForm.User.value === "")
		{
			document.getElementById("usertype").innerHTML = "Please select User Type";
		}
		if (regiForm.address.value === "")
		{
			document.getElementById("addressregi").innerHTML = "Please fill up the Address";
		}
		return false;

	}
}
	