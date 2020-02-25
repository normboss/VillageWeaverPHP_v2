<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "index";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>

    <title>Maine Village Weaver</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META NAME="description" CONTENT="hand woven, made in Maine, Made in USA,Maineteam (etsy),Earthyetsy,handweaveronetsy,hand made curtains,
              weaver,cotton, swag,natural dyes,linen,shawls,wraps">
    <META NAME="description" CONTENT="Designer, Phyllis Leck creates handmade fabrics on her loom for Early American interiors,windowpane
              check, shaker check, cotton and wool fabric, upholstery and curtains.">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Euphoria+Script">
    <link href="../css/home3.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <script>
        // $(function() {
        //     $("#main-menu").load("../includes/main-menu.php");
        // });
    </script>

</head>

<body>

    <div id="fb-root"></div>

    <div id="header-id">
        <div class="banner">
            <span class="text1">Maine Village Weaver</span><span class="text2"></span>
        </div>

        <div id="main-menu" class="home">
            <?php
            require '../includes/main-menu.php';
            ?>
        </div>
    </div>

    <div id="header-image"></div>

    <!-- <br><br><br> -->
    <div id="truce-flag-msg">
        <a href="decor.php#flag">
            <img class="" src="../images/tf_flag.png">
            <div>Looking for the Flag&nbsp;of&nbsp;Truce?</div>
            <span style="font-size: 18px">Click Image</span>
        </a>
    </div>

    <br>


    <div class="statement-parent">
        <div class="statement">
            <i>
                "Weaving is my passion. Each piece is woven by hand right here in my studio."
            </i>
        </div>
        <div class="signature">Phyllis Leck</div>
    </div>

    <!--
            FULL SIZE PAGE
        -->

    <div class="home-container">

        <a href="shawls.php">
            <section class="shawls grid">

                <div class="box box1">
                    <!-- <img class="shawl-image" src="../images/shawl_steel_11b.jpg"> -->
                </div>
                <div class="box box2">
                </div>
                <div class="box box3">
                </div>
                <div class="box box4">
                </div>
                <div class="box box5">
                </div>
                <div class="box box6">
                    <div class="text">Shawls</div>
                    <div class="text">&amp</div>
                    <div class="text">Scarves</div>
                </div>
                <div class="box box7">
                </div>
                <div class="box box8">
                </div>
                <div class="box box9">
                </div>
                <div class="box box10">
                </div>
                <div class="box box11">
                </div>
                <div class="box box12">
                </div>
                <div class="box box13">
                </div>

            </section>
        </a>
        <br><br>

        <a href="decor.php">
            <section class="decor grid">

                <div class="box box1">
                    <!-- <img class="shawl-image" src="../images/shawl_steel_11b.jpg"> -->
                </div>
                <div class="box box2">
                </div>
                <div class="box box3">
                </div>
                <div class="box box4">
                </div>
                <div class="box box5">
                </div>
                <div class="box box6">
                    <div class="text">Home</div>
                    <div class="text">Decor</div>
                </div>
                <div class="box box7">
                </div>
                <div class="box box8">
                </div>
                <div class="box box9">
                </div>
                <div class="box box10">
                </div>
                <div class="box box11">
                </div>
                <div class="box box12">
                </div>
                <div class="box box13">
                </div>

            </section>
        </a>
        <br><br>

        <a href="https://www.etsy.com/shop/mainevillageweaver">
            <section class="etsy grid">

                <div class="box box1">
                    <!-- <img class="shawl-image" src="../images/shawl_steel_11b.jpg"> -->
                </div>
                <div class="box box2">
                </div>
                <div class="box box3">
                </div>
                <div class="box box4">
                </div>
                <div class="box box5">
                </div>
                <div class="box box6">
                    <div class="text">Shop</div>
                    <div class="text">Etsy</div>
                </div>
                <div class="box box7">
                </div>
                <div class="box box8">
                </div>
                <div class="box box9">
                </div>
                <div class="box box10">
                </div>
                <div class="box box11">
                </div>
                <div class="box box12">
                </div>
                <div class="box box13">
                </div>

            </section>
        </a>
        <br><br>


    </div>

    <div id="footer">
    </div>
    <?php
    require '../includes/footer1.php';
    ?>

    <script>
        // $(document).ready(function () {
        //     $("#footer").load("footer.php");
        // });


        // document.getElementById("header-image").style.display = "none";
    </script>
    <?php
    $pagename = $_SESSION['pagename'];
    // echo "<br>".$pagename."<br>";
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