function isSearch(prfsearch)
{
	if (prfsearch.search.value === "")
	{
		document.getElementById("searchjs").innerHTML = "Please Enter Search Value";
		return false;
	}
	else
	{
		const num_regx = /(^(\+8801|8801|01))[1|3-9]{1}(\d){8}$/;
		const email_regx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		if (isNaN(prfsearch.search.value)) 
		{
			if (!email_regx.test(prfsearch.search.value))
			{
				document.getElementById("searchjs").innerHTML = "Invaild email!!!";
				return false;
			}
		}
		else
		{
			if (!num_regx.test(prfsearch.search.value)) 
			{
				document.getElementById("searchjs").innerHTML = "Invaild Phone no!!!";
				return false;
			}
		}
	}
}