function isLCSInsert(LicenseInput) 
{
	if (LicenseInput.lino.value === "" || LicenseInput.issue.value === "" || LicenseInput.expi.value === "" 
		|| LicenseInput.p_month.value === "" || LicenseInput.p_day.value === "")
	{
		if (LicenseInput.lino.value === "")
		{
			document.getElementById("L_no").innerHTML = "Please Enter License Number"
		}
		if (LicenseInput.issue.value === "")
		{
			document.getElementById("D_issue").innerHTML = "Select issue date"
		}
		if (LicenseInput.expi.value === "")
		{
			document.getElementById("D_expi").innerHTML = "Select expair date"
		}
		if (LicenseInput.p_day.value === "")
		{
			document.getElementById("perday").innerHTML = "Enter Per day Wages"
		}
		if (LicenseInput.p_month.value === "")
		{
			document.getElementById("permonth").innerHTML = "Enter Per Month Wages"
		}
		return false;
	}
}