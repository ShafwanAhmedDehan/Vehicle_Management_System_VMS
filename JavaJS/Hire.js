function isHire(HireBar) 
{
	if (HireBar.hire1.value === "" || HireBar.hire2.value === "")
	{
		if (HireBar.hire1.value === "")
		{
			document.getElementById("Hire01").innerHTML = "Please Enter License No";
		}
		if (HireBar.hire2.value === "")
		{
			document.getElementById("Hire02").innerHTML = "Please Enter Your Number ";
		}
		return false;
	}
	else
	{
		const num_regx = /(^(\+8801|8801|01))[1|3-9]{1}(\d){8}$/;
		if (!num_regx.test(HireBar.hire2.value)) 
			{
				document.getElementById("Hire02").innerHTML = "Invaild Phone no!!!";
				return false;
			}
	}
}