function isInsert(VehicleInput) 
{
	if (VehicleInput.vtype.value === "" || VehicleInput.vnum.value === "")
	{
		if (VehicleInput.vtype.value === "")
		{
			document.getElementById("v_type").innerHTML = "Please choose vehicle type"
		}
		if (VehicleInput.vnum.value === "")
		{
			document.getElementById("v_num").innerHTML = "Please Enter Vehicle Number"
		}
		return false;
	}
}