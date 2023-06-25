function HiredDrivershow()
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
        t += "First Name";
        t += "</th>";

        t += "<th>";
        t += "Last Name";
        t += "</th>";

        t += "<th>";
        t += "NID";
        t += "</th>";

        t += "<th>";
        t += "Gender";
        t += "</th>";

        t += "<th>";
        t += "Address";
        t += "</th>";

        t += "</tr>"
        for (let i = 0; i < data.length; i++)
        {
          t += "<tr>";

          t += "<td>";
          t += data[i].emailphn;
          t += "</td>";

          t += "<td>";
          t += data[i].fname;
          t += "</td>";

          t += "<td>";
          t += data[i].lname;
          t += "</td>";

          t += "<td>";
          t += data[i].nid;
          t += "</td>";

          t += "<td>";
          t += data[i].gender;
          t += "</td>";

          t += "<td>";
          t += data[i].address;
          t += "</td>";

          t += "</tr>"
        }
        document.getElementById("table08").innerHTML = t;
      }
    };
  xvalue.open("GET", "../Control/HiredDriver.php");
  xvalue.send();
  },10);
  
}
HiredDrivershow();