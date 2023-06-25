function isotp(OTPenter) 
{
	if (OTPenter.otp.value === "")
	{
		document.getElementById("otpmsg").innerHTML = "Please Enter OTP";
		return false;
	}
	else
	{
		if(isNaN(OTPenter.otp.value))
		{
			document.getElementById("otpmsg").innerHTML = "[Invalid OTP]";
			return false;
		}
		else
		{
			const OTP_code = OTPenter.otp.value
			if ((OTP_code.length) != 4)
			{
				document.getElementById("otpmsg").innerHTML = "*Enter 4 digit OTP";
				return false;
			}
		}
	}
}