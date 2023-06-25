function isDelete(DeleteBar) 
{
	let str = DeleteBar.search1.value;
	if (DeleteBar.search1.value === "")
	{
		document.getElementById("delete02").innerHTML = "Please Enter User ID";
		return false;
	}
}