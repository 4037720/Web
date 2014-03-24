<!DOCTYPE HTML>
<html>
  <head>
    <style>
      body {
        margin: 0px;
        padding: 0px;
      }
    </style>
  </head>
  <body>
    <canvas id="myCanvas" width="500" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(20, 150);
      context.quadraticCurveTo(40, 60, 70, 150);
      context.lineWidth = 4;


      context.fillStyle = '#8ED6FF';
      context.fill();
      
      // line color
      context.strokeStyle = '#8ED6FF';
      context.stroke();
    </script>
  </body>
</html>