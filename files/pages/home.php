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

    <meta charset="UTF-8">
    <title>Maine Village Weaver | Phyllis Leck's high-quality, hand-woven fashions & home decor</title>
    <meta name="description" content="Shop beautiful shawls, scarves, wraps, curtains, placemats & rugs plus hand-forged hardware.">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Euphoria+Script">
    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <style>
        #ufo {
            width: 200px;
            position: fixed;
            z-index: 50;
        }
    </style>

</head>

<body>
    <!-- <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'100px';"> -->

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

    <main class="main-home">

        <div id="header-image"></div>

        <!-- <br><br><br> -->
        <div id="truce-flag-msg">
            <a href="decor.php#truce-flag-label">
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
                    <a href="shawls.php">
                        <div class="text">Shawls</div>
                        <div class="text">&amp</div>
                        <div class="text">Scarves</div>
                    </a>
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
            <br><br>

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
                    <a href="decor.php">
                        <div class="text">Home</div>
                        <div class="text">Decor</div>
                    </a>
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
            <br><br>

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
                    <a href="https://www.etsy.com/shop/mainevillageweaver">
                        <div class="text">Shop</div>
                        <div class="text">Etsy</div>
                    </a>
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
            <br><br>


        </div>
    </main>
    <div id="footer">
    </div>
    <?php
    require '../includes/footer1.php';
    ?>

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