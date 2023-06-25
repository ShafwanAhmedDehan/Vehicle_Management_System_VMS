function notificationshow()
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
        t += "NOTIFICATION";
        t += "</th>";

        t += "</tr>"
        for (let i = 0; i < data.length; i++)
        {
          t += "<tr>";

          t += "<td>";
          t += data[i].msg;
          t += "</td>";

          t += "</tr>"
        }
        document.getElementById("table06").innerHTML = t;
      }
    };
  xvalue.open("GET", "../Control/NotificationAction.php");
  xvalue.send();
  },100);
  
}
notificationshow();