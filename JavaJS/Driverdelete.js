function isDelete(DeleteBar) 
{
	if (DeleteBar.search1.value === "")
	{
		document.getElementById("delete03").innerHTML = "Please Enter User ID";
		return false;
	}
}