<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>Test Screen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Euphoria+Script">
    <link href="./resources/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
//      $(function () {
//        $("#banner").load("banner.html");
//        $("#main-menu").load("main-menu.html");
//        $("#footer").load("footer.html");
//      });
    </script> 
    <script>
//      (function (d, s, id) {
//        var js, fjs = d.getElementsByTagName(s)[0];
//        if (d.getElementById(id))
//          return;
//        js = d.createElement(s);
//        js.id = id;
//        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
//        fjs.parentNode.insertBefore(js, fjs);
//      }(document, 'script', 'facebook-jssdk'));
    </script>
    <script type="text/javascript">
      var myWidth = 0, myHeight = 0;
      if (typeof (window.innerWidth) == 'number') {
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
      } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
        myWidth = document.documentElement.clientWidth;
        myHeight = document.documentElement.clientHeight;
      } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
        myWidth = document.body.clientWidth;
        myHeight = document.body.clientHeight;
      }
    </script>

  </head>
  <body>
    
    <div>
      <script type="text/javascript">
        document.write(myWidth);
        x = 5;
        if ( x < 8 )
          document.write("OK");
          
        if ( myWidth < 800 ) {
          document.write("Less Than");
          window.location.href = "showwidth.html";
        }
      </script>
    </div>
    
  </body>
</html>
