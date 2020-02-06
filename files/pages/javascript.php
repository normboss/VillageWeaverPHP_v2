<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <script>
  </script>
  </head>
  <body>
    <canvas id="mycanvas" width="800" height="300"></canvas>
    <script>src="plot.js"></script>
    
    <script>
      var mydata = new Array();
      document.write("Hello World\n");
      for ( i=0; i<100; i++ ) {
//          document.write( i + ", " );
        x = i * Math.PI/180;
        y = Math.sin(x);
        y *= 10000;
        y = Math.floor(y);
        y /= 10000;
        document.writeln("(" + i + ", " + y + ") <br>");
        mydata[i] = y;
      }
      
      var myplot = new MakeDraw();
      myplot.
      myplot.id = mycanvas;
      myplot.plotColor = 'rgba(200,230,50,1)';
      myplot.data = mydata;
      myplot.plot();
      </script>
    
    <div>
    </div>
  </body>
</html>
