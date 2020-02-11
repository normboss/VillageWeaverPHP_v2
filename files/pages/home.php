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
    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
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

    <br><br><br>
    <div id="truce-flag-msg">
        <a href="decor.php#flag">
            <img class="" src="../images/tf_flag.png">
            <div>Looking for the Flag&nbsp;of&nbsp;Truce?</div>
            <!-- <div>Looking for the Flag of Truce?</div> -->
            <!-- <div class="spacer10"></div> -->
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

    <div class="index-container">

        <div class="copy-and-image">
            <div id="shawls" class="copy-block">
                <a href="shawls.php">
                    <div class="link-block">
                        <div class="heading-rows">
                            <div class="heading-row">
                                Shawls
                            </div>
                            <div id="appersand" class="heading-row">
                                &amp
                            </div>
                            <div class="heading-row">
                                Scarves
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image-block">
                <a href="shawls.php">
                    <img src="../images/asym_jewel_wrap1a_2xC.png" alt="Asymetrical wrap in steel grey." style="font-family: Arial; font-size: 22px;">
                </a>
            </div>
        </div>

        <div class="copy-and-image">
            <div id="home-decor" class="copy-block">
                <a href="decorGrid.php">
                    <div class="link-block">
                        <div class="heading-rows">
                            <div class="heading-row">
                                Home
                            </div>
                            <div class="heading-row">
                                Decor
                            </div>
                            <!-- <div class="spacer10"></div>
                            <div class="small-heading-row">
                                Rugs
                            </div>
                            <div class="small-heading-row">
                                Curtains
                            </div>
                            <div class="small-heading-row">
                                Decorative
                            </div>
                            <div class="small-heading-row">
                                Hardware
                            </div> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="image-block">
                <a href="decorGrid.php">
                    <img src="../images/table_runner2.jpg" alt="Open weave knotweed table runner." style="font-family: Arial; font-size: 22px;">
                </a>
            </div>
        </div>

        <div class="copy-and-image">
            <div class="copy-block">
                <a href="https://www.etsy.com/shop/mainevillageweaver">
                    <div class="link-block">
                        <div class="heading-rows">
                            <div class="heading-row">
                                Shop
                            </div>
                            <div class="heading-row">
                                Etsy
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image-block">
                <a href="https://www.etsy.com/shop/mainevillageweaver">
                    <img src="../images/decor_mobile.jpg" alt="Assortment of woven products." style="font-family: Arial; font-size: 22px;">
                </a>
            </div>
        </div>

    </div>


    <!--
            MOBILE SIZE PAGE
        -->

    <div class="index-container-mobile">

        <!--
              SHAWLS
            -->

        <a href="shawls.php">
            <div class="index-mobile-shawls index-mobile-all">
                <div class="index-mobile-block">
                    <div class="index-mobile-shawls-text index-mobile-hover index-mobile-shawls-hover">
                        <div>Shawls</div>
                        <div>&</div>
                        <div>Scarves</div>
                    </div>
                </div>
            </div>
        </a>

        <a href="decorGrid.php">
            <div class="index-mobile-decor index-mobile-all">
                <div class="index-mobile-block">
                    <div class="index-mobile-decor-text index-mobile-hover">
                        <div>Home</div>
                        <div>Decor</div>
                    </div>
                </div>
            </div>
        </a>

        <a href="https://www.etsy.com/shop/mainevillageweaver">
            <div class="index-mobile-etsy index-mobile-all">
                <div class="index-mobile-block">
                    <div class="index-mobile-etsy-text index-mobile-hover">
                        <div>Shop</div>
                        <div>Etsy</div>
                    </div>
                </div>
            </div>
        </a>

    </div> <!-- end index-container-mobile -->

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