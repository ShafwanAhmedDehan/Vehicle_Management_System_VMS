function isAccept(StatusBar)
{
	let str = StatusBar.search001.value;
	if (StatusBar.search001.value === "")
	{
		document.getElementById("delete04").innerHTML = "Please Enter License No";
		return false;
	}
	else
	{
		const xvalue = new XMLHttpRequest();
		xvalue.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById("delete04").innerHTML = this.responseText;
			}
		};
		xvalue.open("GET", "../Control/ApproveDriver.php?q="+str);
		xvalue.send();
	}
}