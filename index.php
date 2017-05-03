<html>
  <head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link type="text/javascript" href="app.js">
  </head>
  <body>
    <div class="container">
      <div class="content">
        lys: <span id="lys">
        <input type="range" style="width: 50%" min="0" max="100" value="0" step="1" onchange="showValue(this.value)" />
        <span id="light">0</span>
        <script type="text/javascript">
        function showValue(newValue)
        {
          document.getElementById("light").innerHTML=newValue;

          if (newValue>50) {
            document.body.style.background = "red";
          }
          else {
            document.body.style.background = "white";
          }
        }
        </script>
        <br>

        <br>

        temp: <span id="temp">

        <br><br>

        Co2: <span id="co2">

        <br><br>

        lyd: <span id="lyd">

      </span></span></span></span></div>

      <br>

      <form action="index.php">

        <div>
          <br>
          <p> temperature </p>
          <input type="textbox" name="tempmin" placeholder="min">
          <input type="textbox" name="tempmax" placeholder="max">
        </div>
        <div>
          <br>
          <p> lys </p>
          <input type="textbox" name="lysmin" placeholder="min">
          <input type="textbox" name="lysmax" placeholder="max">
      </div>
      <div>
        <br>
        <p> Co2</p>
        <input type="textbox" name="co2min" placeholder="min">
        <input type="textbox" name="co2max" placeholder="max">
      </div>
      <div>
        <br>
        <p> lyd </p>
        <input type="textbox" name="lydmin" placeholder="min">
        <input type="textbox" name="lydmax" placeholder="max">
      </div>
      <br>
        <input type="submit" class="btn-danger" value="submit">
      </form>

      <div class="footer">
        Made by Emil, Mathias og Bjarke - Industriteknologi 03-05-2017
      </div>
    </div>
  </body>
</html>
