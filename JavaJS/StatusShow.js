function Statusshow()
{
  setInterval (function()
  {
    const xvalue = new XMLHttpRequest();
    xvalue.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        const status = this.responseText;
        if (status == 1)
        {
          document.getElementById("status01").innerHTML = "Approved";
        }
        else
        {
          document.getElementById("status01").innerHTML = "Pending";
        }
        
      }
    };
  xvalue.open("GET", "../../Control/StatusControl.php");
  xvalue.send();
  },100);
  
}

Statusshow();