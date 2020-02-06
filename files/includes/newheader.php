<!DOCTYPE html>
<?php
if (!session_id())
    session_start();
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>New Header</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Euphoria+Script">

    <link href="./css/newheader.css" media="screen" rel="stylesheet" type="text/css">
    <!--<link rel="icon" href="./images/favicon.png">-->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script>
        $(window).resize(function() {
            console.log('window was resized');
        });
    </script>
</head>

<body onresize="fixWidthResize()">

    <header id="header" onload="fixWidth()">
        <div id="header-image">
            <!-- Hand woven with love -->
            <div id="flag-msg">
                Looking for the Flag of Truce Click Here
            </div>
        </div>


        <!-- topnambar #navbar -->
        <nav id="topnavbar" class="topnavbar">
            <?php require './includes/menufull.php' ?>
        </nav>

        <!-- ************************************************************************************* -->
        <!-- sticky  menubar mobile -->
        <!-- condensed #navbar navbar-mobile -->
        <div id="topnavbar" class="topnavbar navbar-mobile">
            <?php require './includes/menumobile.php' ?>
        </div>

        <!-- *************************************************************************** -->
        <!-- the banner and header image -->
        <div class="banner-upper">
            <!--                <div class="banner-block">
                                    Scottish Lion
                                    <span class="logo-inline"><img src="./images/lion_50_trans.png"></span>
                                    Wrought Iron
                                </div>-->
            <div class="banner-block">
                <span class="text1">Maine Village Weaver</span><span class="text2"></span>
            </div>
        </div>

        <div id="header-image"></div>

        <a name="top"></a>

        <!-- ******************************************************************************** -->
        <!-- lower #navbar navbar-wide -->
        <nav id="navbar" class="navbar-wide">
            <?php require './includes/menufull.php' ?>
        </nav>

        <!-- ******************************************************************* -->
        <!-- condensed #navbar navbar-mobile -->
        <div id="navbar" class="navbar-mobile">
            <!--                <div class="logo-inline-mobile menu-box">
                                   <img src="./images/logo_40_trans.png">
                                </div>-->
            <?php require './includes/menumobile.php' ?>
        </div>
        <br>

    </header>


    <script>
        window.addEventListener("resize", function(event) {
            fixWidth();
        });

        function fixWidth() {
            var parentwidth = $("header").width();
            $(".topnavbar").width(parentwidth);
        }
    </script>

    <?php
    $pagename = $_SESSION['pagename'];
    //        echo "<br>".$pagename."<br>";
    echo "<script>";
    if ($pagename == "index") {
        echo 'document.getElementById("header-image").style.display = "block"';
    } else {
        echo 'document.getElementById("header-image").style.display = "none"';
    }
    echo "</script>";
    ?>

</body>

</html>