<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link type="text/javascript" href="app.js">
  </head>
  <body>
    <div class="container">
      <div class="content">
        Set light: <span id="lys">
        <input type="range" id="range" style="width: 50%" min="0" max="100" value="0" step="1" />
        <span id="light">0</span>
        <script type="text/javascript">
        </script>
        <br>

        <br>

        Set temperature: <span id="temp">

        <br><br>

        Set CO2: <span id="co2">

        <br><br>

        Set Noise level: <span id="lyd">

      </span></span></span></span></div>

      <br>

      <form action="index.php">

        <div>
          <br>
          <p> Temperature warning levels:</p>
          <input type="textbox" name="tempmin" placeholder="min">
          <input type="textbox" name="tempmax" placeholder="max">
        </div>
        <div>
          <br>
          <p> Light warning levels: </p>
          <input type="textbox" name="lysmin" placeholder="min">
          <input type="textbox" name="lysmax" placeholder="max">
      </div>
      <div>
        <br>
        <p> CO2 warning levels:</p>
        <input type="textbox" name="co2min" placeholder="min">
        <input type="textbox" name="co2max" placeholder="max">
      </div>
      <div>
        <br>
        <p> Noise warning levels: </p>
        <input type="textbox" name="lydmin" placeholder="min">
        <input type="textbox" name="lydmax" placeholder="max">
      </div>
      <br>
        <input type="submit" class="btn-danger" value="submit">
      </form>

      <script>

      $('#range').bind('input', function() {

        $('#light').html($(this).val());

        if ($(this).val()><?php echo $_GET['tempmax']; ?>) {
          $("#light").css('color', 'red');
        }
        else if($(this).val()<<?php echo $_GET['tempmin']; ?>) {
          $("#light").css('color', 'blue');
        } else {
          $("#light").css('color', 'black');
        }
      });

      </script>

      <div class="footer">
        Made by Emil, Mathias og Bjarke - Industriteknologi 03-05-2017
      </div>
    </div>
  </body>
</html>
