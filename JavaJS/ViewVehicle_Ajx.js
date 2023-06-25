function ViewVehicle()
{
  setInterval (function()
  {
    const xvalue = new XMLHttpRequest();
    xvalue.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        const data = JSON.parse(this.responseText);
        let t = "<tr>";

        t += "<th>";
        t += "Vehicle Number";
        t += "</th>";

        t += "<th>";
        t += "Vehicle Type";
        t += "</th>";

        t += "</tr>"
        for (let i = 0; i < data.length; i++)
        {
          t += "<tr>";

          t += "<td>";
          t += data[i].vnumber;
          t += "</td>";

          t += "<td>";
          t += data[i].type;
          t += "</td>";

          t += "</tr>"
        }
        document.getElementById("table11").innerHTML = t;
      }
    };
  xvalue.open("GET", "../Control/ViewVehicleAction.php");
  xvalue.send();
  },100);
  
}
