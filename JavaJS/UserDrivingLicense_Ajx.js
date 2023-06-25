function drivershow()
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
      t += "License No";
      t += "</th>";

      t += "<th>";
      t += "Issue Date";
      t += "</th>";

      t += "<th>";
      t += "Expiry Date";
      t += "</th>";

      t += "<th>";
      t += "Per Day";
      t += "</th>";

      t += "<th>";
      t += "Per Month";
      t += "</th>";

      t += "</tr>"
      for (let i = 0; i < data.length; i++)
      {
        t += "<tr>";

        t += "<td>";
        t += data[i].licenseid;
        t += "</td>";

        t += "<td>";
        t += data[i].issue;
        t += "</td>";

        t += "<td>";
        t += data[i].expair;
        t += "</td>";

        t += "<td>";
        t += data[i].perday;
        t += "</td>";

        t += "<td>";
        t += data[i].permonth;
        t += "</td>";

        t += "</tr>"
      }
      document.getElementById("table01").innerHTML = t;
    }
  };
  xvalue.open("GET", "../Control/UserDrivingLicenseAction.php");
  xvalue.send();
  },100);
  
}
drivershow();