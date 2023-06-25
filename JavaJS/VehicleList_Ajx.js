function allvehicleshow()
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
        t += "ID";
        t += "</th>";

        t += "<th>";
        t += "Vehicle No";
        t += "</th>";

        t += "<th>";
        t += "Type";
        t += "</th>";

        t += "</tr>"
        for (let i = 0; i < data.length; i++)
        {
          t += "<tr>";

          t += "<td>";
          t += data[i].id;
          t += "</td>";

          t += "<td>";
          t += data[i].vnumber;
          t += "</td>";

          t += "<td>";
          t += data[i].type;
          t += "</td>";

          t += "</tr>"
        }
        document.getElementById("table04").innerHTML = t;
      }
    };
  xvalue.open("GET", "../Control/AllVehicleInfoAction.php");
  xvalue.send();
  },100);
  
}
allvehicleshow();