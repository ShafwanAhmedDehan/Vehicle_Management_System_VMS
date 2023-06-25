function isComment(Complaint01) 
{
	if (Complaint01.complaint.value === "")
	{
		document.getElementById("comment01").innerHTML = "*Can not submit empty"
		return false;
	}
}