function isDelete(DeleteBar) 
{
	const str = DeleteBar.search1.value;	
	if (DeleteBar.search1.value === "")
	{
		document.getElementById("delete01").innerHTML = "Please Enter email/phone";
		return false;
	}
	else
	{
		const xvalue = new XMLHttpRequest();
  		xvalue.onreadystatechange = function()
  		{
   	 		document.getElementById("delete01").innerHTML = this.responseText;
  		}
  		xvalue.open("GET", "../Control/Deleteuser.php?q="+str);
  		xvalue.send();
	}
}