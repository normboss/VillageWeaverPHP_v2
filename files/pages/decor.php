<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "decorGrid";
$buttonAltStyle = 'style="font-weight: bold; font-size: 20px; border: 0px solid black; padding: 0px;"';
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
    require '../includes/keywords.php';
    ?>

    <title>Home Decor - Maine Village Weaver</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/decor.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../js/prices1.js"></script>

    <script>
        $(function() {
            // $("#banner").load("../includes/banner.php");
            // $("#main-menu").load("../includes/main-menu.php");
            // $("#footer").load("footer.php");

            var priceObj = new Prices();
            priceObj.setPrices();
        });
    </script>

    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</head>

<body>

    <?php
    $blockNum = 1;
    $mobileBlockNum = 1;
    $add2cartAltStyle = 'style="font-weight: bold; font-size: 16px; border: 0px solid black; padding: 0px;"';

    // function outputCode($f1, $e1, $f2, $e2)
    // {
    //     echo '<img id="' . $f1 .  '" src="../images/' . $f1 . '.' . $e1 . '" alt="">';
    //     echo '<img id="' . $f2 .  '" src="../images/' . $f2 . '.' . $e2 . '" alt="">';
    //     echo '<span class = "click-for-closeup">Click image for alternate view</span>';
    //     echo '<script>';
    //     echo 'document.getElementById( "' . $f2 .  '" ).style.display = "none";';

    //     echo $f1 .  '.onclick = function() {';
    //     echo 'document.getElementById( "' . $f1 .  '").style.display = "none";';
    //     echo 'document.getElementById( "' . $f2 .  '").style.display = "inline-block";';
    //     echo '};';

    //     echo $f2 .  '.onclick = function() {';
    //     echo 'document.getElementById( "' . $f2 .  '").style.display = "none";';
    //     echo 'document.getElementById( "' . $f1 .  '").style.display = "inline";';
    //     echo '};';
    //     echo '</script>';
    // }
    // 
    ?>
    <div id="header-id">

        <div class="banner">
            <span class="text1">Maine Village Weaver</span><span class="text2">Home Decor</span>
        </div>
        <div id="header-image">
        </div>

        <div id="main-menu" class="home"></div>
        <?php
        require "../includes/main-menu.php";
        ?>
    </div>

    <!-- <br> -->
    <!-- <nav class="sub-menu">
        <a class="sub-menu__items menu-item" href="#rugs-label">Rugs</a>
        <a class="sub-menu__items menu-item" href="#curtain-label">Curtains</a>
        <a class="sub-menu__items menu-item" href="#decor-label">Decorative</a>
        <a class="sub-menu__items menu-item" href="#brackets-label">Hardware</a>
    </nav> -->

    <main class="main">
        <!--
          HOME DECOR CONTAINER
        -->
        <div id="rugs-label"></div>

        <!-- <div class="home-decor-container"> -->
        <div class="large-heading-row">
            <h2>Hand Woven Rugs</h2>
        </div>
        <!-- </div> -->
        <div class="statement-parent">
            <div class="statement">
                <i>
                    "My rugs are sustainably woven using natural nontoxic materials for a healthy and comfortable home.” </i>
            </div>
            <div class="signature">Phyllis Leck</div>
        </div>

        <br>

        <!-- ******************************************************
                  BLOCK 001  rug 1
            ***********************************************************-->
        <div class="home-decor-container home-decor-rug">

            <div class="rug-image-block">
                <?php
                outputCode("rug_RUGR", "png", "rug_RUGR2b", "png");
                ?>

            </div>
            <!-- <div id="home-decor-block2" class="copy-block home-decor"> -->
            <div class="copy-block ">
                <div class="content-text-block">
                    <br><br>
                    <div class="small-heading-row">
                        Red Wool Yarn Scatter Rug 2’&nbsp;x&nbsp;3’</div>
                    <br>
                    <!-- <div class="content-text-block"> -->
                    Hand woven with Pennsylvania rug wool yarn spun and dyed for me.
                    Durable wool and cotton/poly yarn. <br>
                    This rug is in stock. <br>
                    Custom sizes and price upon request. <br>
                    <br>
                    To maintain: shake out, vacuum, spot clean.
                    Wool is incredible! Best type of rug to live with there is.
                    No Formaldehyde nor chemicals added. <br><br>
                    <br>
                    <div class="description-and-price">
                        <span>Price includes shipping</span><span id="" class="price">$128</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="79Q5YWP6HBQQG">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- </div> -->
        </div>

        <br><br>

        <!-- ******************************************************
                  BLOCK 002  rug 2
            ***********************************************************-->
        <div class="home-decor-container home-decor-rug">
            <div class="rug-image-block">
                <?php
                outputCode("rug_HMRW", "png", "rug_HMRW2", "png");
                ?>

            </div>
            <div class="copy-block">
                <div class="content-text-block">
                    <br><br>
                    <div class="small-heading-row">
                        Jane Connor “Hit and Miss” Redware Wool Scatter Rug 2’&nbsp;x&nbsp;3’
                    </div>
                    <br>
                    The wool strips from Jane Connor’s wool rug business were given to me.<br>
                    I have made this hit and miss wool scatter rug in her style.
                    Multi tans wool strips and black, sage green and a red that
                    early American enthusiasts will recognize as ”redware&nbsp;red”. <br><br>
                    To maintain: shake, vacuum, and spot clean. <br>
                    <br>
                    <div class="description-and-price">
                        <span>Price includes shipping</span><span id="" class="price">$158</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="S3KVB9B3L78JQ">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div>
                    <br>
                </div>
            </div>
        </div>

        <br><br>

        <!-- ******************************************************
                  BLOCK 003  rug 3
            ***********************************************************-->
        <div class="home-decor-container home-decor-rug">
            <div class="rug-image-block">
                <?php
                outputCode("rug_hmdr", "png", "rug_HMDr2a", "png");
                ?>
            </div>
            <div class="copy-block">
                <div class="content-text-block">
                    <br>
                    <div class="small-heading-row">
                        Jane Connor “Hit and Miss” Dusty Rose Wool Scatter Rug 2’&nbsp;x&nbsp;3’
                    </div>
                    <br>
                    The wool strips from Jane Connor’s wool rug business were given to me.
                    I have made this hit and miss wool scatter rug in her style.
                    Multi tan wool strips and black, sage green and a Dusty Rose.
                    <br><br>
                    To maintain: shake, vacuum, and spot clean.
                    <br><br>
                    <div class="description-and-price">
                        <span>Price includes shipping</span><span class="price">$180</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="L4MPBRN655PEC">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br><br>
        <div class="rug-rescue-special">
            <div class="rug-rescue-header">Special!</div>
            <div class="rug-rescue-header">"Rug Rescue"</div>
            <br>
            <div class="rug-rescue-text">
                <!-- If you have an old worn out Jane&nbsp;Connor’s<br> “Country&nbsp;Cat&nbsp;Loom“ rug and want to revive it, <br>
        send it to me and I can reweave it for you! <br> -->
                If you have an old worn out Jane Connor’s “Country Cat Loom“ rug and want to revive it,
                send it to me and I can reweave it for you!
                <a class="rug-rescue-contact" href="contact.php" target="_blank">Contact me</a> for a price quote.
            </div>
        </div>
        <br><br>

        <!-- ******************************************************
                  BLOCK 004  rug 4
            ***********************************************************-->
        <div class="home-decor-container">

            <div class="image-block">
                <img src="../images/red_green_runner1.png" alt="">
            </div>
            <div class="copy-block home-decor" style="height: 355px">
                <div class="content-text-block">
                    <br>
                    <br>
                    <div class="small-heading-row">
                        Red Plaid Wool Rug
                    </div>
                    <div class="content-text-block">
                        <p>
                            Hand woven rug made with wool strips cut and dyed deep red
                            and light green are woven together to make a pleasant room warming plaid rug.
                            Hemmed rug has a cotton poly warp.
                        </p>
                        <div class="description-and-price">
                            Three sizes available:
                        </div>
                        <div class="add-to-cart">
                            <!-- <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="4DN6GC5HHEFMC">
                                <table>
                                    <tr>
                                        <td><input type="hidden" name="on0" value="Rug Size">Rug Size:</td>
                                    </tr>
                                    <tr>
                                        <td><select name="os0">
                                                <option value="22 x 36 inches (RPR-1)">22 x 36 inches (RPR-1)&nbsp;&nbsp;$150.00 USD</option>
                                                <option value="22 x 60 inches (RPE-2)">22 x 60 inches (RPE-2)&nbsp;&nbsp;$250.00 USD</option>
                                                <option value="24 x 72 inches (RPR)">24 x 72 inches (RPR-3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$272.00 USD</option>
                                            </select> </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form> -->

                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="4DN6GC5HHEFMC">
                                <table>
                                    <tr>
                                        <td><input type="hidden" name="on0" value="Rug Size">Rug Size</td>
                                    </tr>
                                    <tr>
                                        <td><select name="os0">
                                                <option value="22 x 36 inches (RPR-1)">22 x 36 inches (RPR-1) $150.00 USD</option>
                                                <option value="22 x 60 inches (RPE-2)">22 x 60 inches (RPE-2) $250.00 USD</option>
                                                <option value="24 x 72 inches (RPR-3)">24 x 72 inches (RPR-3) $272.00 USD</option>
                                            </select> </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        </div>

        <div id="curtain-label"></div>
        <div class="home-decor-container">
            <div class="large-heading-row">
                <h2>Natural Window Treatments</h2>
            </div>
        </div>
        <div class="statement-parent">
            <div class="statement">
                <i>
                    "I collaborate with my metal artist husband creating custom window treatments."
                </i>
            </div>
            <div class="signature">Phyllis Leck</div>
        </div>

        <!-- ******************************************************
              Open Weave Knotweed Swags (complex)
        ***********************************************************-->
        <div class="swags swags-top">
            <div class="spacer20"></div>
            <div class="small-heading-row-centered">
                Open Weave Knotweed Swags
            </div>
            <div class="spacer10"></div>
            <!-- <div class="image-block "> -->
            <img src="../images/decor_v4.png" alt="">
            <!-- </div> -->

        </div>

        <!-- ******************************************************
              Open Weave Knotweed Swags (continued)
        ***********************************************************-->
        <div id="swag-image-id" class="swags swags-bottom">
            <div id="swags-image-id" class="swags-image-block">

                <img id="swag_detail_jpg" src="../images/swag_detail.jpg" alt="Swag over window looking out of kitchen." style="float: left; ">
                <img id="swag_jpg" src="../images/swag.jpg" class="img-top" alt="" style=" float: none; ">
                <script>
                    document.getElementById('swag_jpg').style.display = 'none';
                    swag_jpg.onclick = function() {
                        document.getElementById('swag_jpg').style.display = 'none';
                        document.getElementById('swag_detail_jpg').style.display = 'block';
                        // document.getElementById('swags-text-id').style.width = '100%';
                        document.getElementById('swags-text-id').style.display = 'block';

                        var id = document.getElementById("swags-image-id");
                        id.classList.remove("swags-image-block2");
                        id.classList.add("swags-image-block");
                    };

                    swag_detail_jpg.onclick = function() {
                        document.getElementById('swag_detail_jpg').style.display = 'none';
                        document.getElementById('swag_jpg').style.display = 'inline';
                        // document.getElementById('swags-text-id').style.width = '60%';
                        document.getElementById('swags-text-id').style.display = 'none';

                        var id = document.getElementById("swags-image-id");
                        id.classList.remove("swags-image-block");
                        id.classList.add("swags-image-block2");
                    };
                </script>
                Click image for alternate view.
            </div>

            <div id="swags-text-id" class="swags-bottom-text">

                Custom length swag measures 150 inches.
                <p>
                    Maine Village Weaver's signature
                    Open Weave Curtains and swags
                    are hand dyed for a natural look.
                </p>
                <p>I stain the cotton threads with brown
                    walnut and dye the wool yarn with
                    knotweed plants I gather locally.
                </p>
            </div>
        </div>
        <br><br><br>

        <!-- ******************************************************
                  Large Swag
            ***********************************************************-->
        <div class="home-decor-container">

            <div class="image-block-x">
                <img src="../images/swag_cafe.jpg" alt="">
                <div class="spacer10"></div>
            </div>
            <div id="home-decor-block1b" class="copy-block home-decor">
                <div class="content-text-block">
                    <br>
                    <span class="small-heading-row">Large Swag:</span>
                    <div class="description-and-price">
                        <span>Measures 24 x 108 inches</span>
                        <span id="LargeSwag" class="price LargeSwag">$240</span>
                    </div>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="RZNLJ3CS9R9BC">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>
                    <div><span class="small-heading-row">Small Swag:</span> Shown on the left with a pair of Open Weave Knotweed cafe curtains.</div>
                    <div class="description-and-price">
                        <span>Measures 24 x 94 inches</span><span id="SmallSwag" class="price SmallSwag">$225</span>
                    </div>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="SLVJDCSX3K9RG">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>
                    <div class="small-heading-row">
                        Open Weave Knotweed Cafe Curtains
                    </div>
                    <div class="spacer10"></div>
                    <div class="content-text-block">
                        <div>
                            Two panels, in my signature open weave knotweed fabric.
                        </div>
                        <div class="description-and-price">
                            <span>Each panel 24 x 26 inches</span><span id="OpenWeaveKnotweedCafeCurtains" class="price OpenWeaveKnotweedCafeCurtains">$120</span>
                        </div>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="DE7F6XSL27F5J">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="content-text-block">
                    <div class="small-type">Custom Lengths made to order</div>
                    <div class="small-type"><a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
                </div>
            </div> <!-- end home-decor-block1 -->
            <!--</div>-->
        </div>
        <br><br>

        <!-- ******************************************************
                  Open Knotweed Panel with self valance
            ***********************************************************-->
        <div class="home-decor-container">

            <div class="image-block">
                <img src="../images/knotweed_panel300.jpg" alt="">
            </div>
            <div class="copy-block home-decor">
                <div class="content-text-block">
                    <br>
                    <br>
                    <div class="small-heading-row">
                        Open Knotweed Panel<br>with Self Valance
                    </div>
                    <div class="content-text-block">
                        <p>Shown casually draped over a tension rod.
                            Open weave cotton and wool.
                            I stain the cotton threads with brown
                            walnut and dye the wool yarn with
                            knotweed plants I gather locally. </p>
                        <div class="description-and-price">
                            <span>Measure 24 x 94 inches</span><span id="OpenKnotweedPanelwithselfvalance" class="price OpenKnotweedPanelwithselfvalance">$180</span>
                        </div>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="26P9HF4FVFUXW">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                        <br>
                        <div>Custom lengths made to order.</div><br>
                        <br>
                        <div class="small-type">Hand Forged <a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
                    </div>
                </div>
            </div>
            <!--</div>-->
        </div>
        <br><br>

        <!-- ******************************************************
                  Open Weave Knotweed Panel with Rod Pocket
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-block">
                <?php outputCode("two_panel_curtain300", "jpg", "detail_slub_thumb", "jpg", ""); ?>
            </div>
            <div class="copy-block home-decor">
                <br>
                <div class="content-text-block">
                    <div class="small-heading-row">
                        Open Weave Knotweed Panel<br>with Rod Pocket
                    </div>
                    <p>Displayed on the left of photo.
                        2 inch rod pocket for easy hanging.
                        I stain the cotton threads with brown
                        walnut and dye the wool yarn with
                        knotweed plants I gather locally.</p>
                    <!-- <div class="spacer10"></div> -->
                    <div class="description-and-price">
                        <span>Measures 24 x 72 inches</span><span id="OpenWeaveKnotweedPanelwithRodPocket" class="price OpenWeaveKnotweedPanelwithRodPocket">$180</span>
                    </div>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="STCPWCVZWFXCU">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>
                    <div class="small-heading-row">
                        Cotton and Linen Curtain Panel
                    </div>
                    <div class="spacer10"></div>
                    Displayed on right of photo. Detail shows texture
                    of linen slubs in the weave. Two inch rod pocket
                    for carefree hanging.
                    <!-- <div class="spacer10"></div> -->
                    <div class="description-and-price">
                        <span>Measures 24 by 84 inches</span><span id="CottonandLinenCurtainPanel" class="price CottonandLinenCurtainPanel">$240</span>
                    </div>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="YJYLYTTBGNEKY">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br><br>
                    <div class="small-type">Hand Forged <a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
                </div>
            </div>
        </div>


        <!-- ******************************************************
              Beginning of Curtain Hardware
        ***********************************************************-->
        <div class="large-heading-row">
            <h2>Curtain Hardware</h2>
        </div>
        <!-- <div class="spacer20"></div> -->

        <!-- ******************************************************
              Curtain Rods
        ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/curtain_rods400a.jpg" alt="">
            </div>

            <div class="copy-block" styleX="height: 400px; ">
                <div class="content-text-block">
                    <div class="small-heading-row">
                        <h4>Custom Forged Curtain Rods</h4>
                    </div>

                    Four classic styles created in custom lengths.
                    Rods are sturdy 1/2 inch diameter.<br>

                    <p>
                        To order, measure length of smooth metal
                        and add 4 inches to each end
                        for a total of 8 additional inches.
                    </p>
                    <p>
                        $2. per inch plus shipping
                    </p>

                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="Z997KHCZKFKZ2">
                            <table>
                                <tr>
                                    <td class="spacer10">
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="on0" value="Standard Lengths">Standard Lengths</td>
                                </tr>
                                <tr>
                                    <td><select name="os0">
                                            <option value="32 inches">32 inches $68.00 USD</option>
                                            <option value="42 inches">42 inches $84.00 USD</option>
                                            <option value="66 inches">66 inches $132.00 USD</option>
                                            <option value="102 inches">102 inches $204.00 USD</option>
                                        </select> </td>
                                </tr>
                                <tr>
                                    <td class="spacer10">
                                </tr>

                                <tr>
                                    <td><input type="hidden" name="on1" value="Select style">Select style</td>
                                </tr>
                                <tr>
                                    <td><select name="os1">
                                            <option value="Spiral">Spiral </option>
                                            <option value="Scroll">Scroll </option>
                                            <option value="Basket">Basket </option>
                                            <option value="Knob">Knob </option>
                                        </select> </td>
                                </tr>
                                <tr>
                                    <td class="spacer10">
                                </tr>
                            </table>
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $buttonAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>

                    <!--leck@midcoast.com-->
                    <a class="contact-me" href="contact.html">
                        Contact me for custom sizes and price
                    </a>
                </div>


            </div>
        </div>
        </div>
        <br><br>

        <!-- ******************************************************
              Curtain Rings
        ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/102018lion_rods_rings.jpg" alt="">
            </div>

            <div class="copy-block">
                <div class="content-text-block">
                    <br>
                    <div class="small-heading-row">
                        <h4>Hand Forged Curtain Rings</h4>
                    </div>
                    <p>
                        Made to easily glide on our
                        spiral and knob rods.
                        Inside diameter 1 1/2 inches.
                    </p>
                    <p>
                        Hand Forged Curtain Rings $5 each
                        plus shipping
                    </p>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="K92G948R7GW7L">
                            <table>
                                <tr>
                                    <td><input type="hidden" name="on0" value="Color">Color</td>
                                </tr>
                                <tr>
                                    <td><select name="os0">
                                            <option value="Black">Black </option>
                                            <option value="Hand Rubbed Bronze">Hand Rubbed Bronze </option>
                                        </select> </td>
                                </tr>
                            </table>
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $buttonAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <!-- ******************************************************
              Large Bracket Set
        ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/bracket_B193.jpg" alt="" style="padding-top: 25px; min-size: 300px;">
            </div>

            <div class="copy-block" styleX="height: 320px;">
                <div class="content-text-block">
                    <br><br>
                    <div class="small-heading-row">
                        <h4>Large Bracket Set</h4>
                    </div>
                    <p>Set of 2 large hand forged
                        wrought iron brackets can
                        hold up to a 3 inch diameter
                        rod or branch.
                        Brackets have a 5 inch projection.
                        Oiled Rubbed Bronze (dark brown) finish.
                    </p>
                    <br>
                    <div class="description-and-price">
                        <span>Set of 2 Large Brackets</span><span id="LargeBracketSet" class="price LargeBracketSet">$48</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="MQ7GQ5FE929AS">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br><br>

        <!-- ******************************************************
                  Small Bracket Set
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/bracket_B19s_x2.png" alt="">
            </div>
            <div class="copy-block">
                <div class="content-text-block">
                    <div class="spacer20"></div>
                    <div class="small-heading-row">
                        Small Bracket Set
                    </div>
                    <p>Set of 2 hand forged wrought
                        iron brackets hold up
                        to a one inch diameter dowel
                        suitable for the swag curtain.
                        Bracket has 3 inch projection.
                        Oiled Rubbed Bronze
                        (dark brown) finish. </p>
                    <br>
                    <div class="description-and-price">
                        <span>Set of 2 brackets</span><span id="SmallBracketSet" class="price SmallBracketSet">$32</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="N4NFWE5Z6VK2J">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br><br>

        <!-- ******************************************************
                  Shelf bracket with curtain rod hook
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/bracket_shelf_x2.png" alt="">
            </div>
            <div class="copy-block ">
                <div class="spacer20"></div>
                <div class="small-heading-row">
                    Shelf Bracket with
                    Curtain&nbsp;Rod&nbsp;Hook
                </div>
                <div class="spacer10"></div>
                <div class="content-text-block">
                    <div>Set of 2 hand forged wrought
                        iron brackets supports a 4 inch
                        shelf of wood or glass.
                        Rod hook riveted underneath can
                        hold a11/4 inch dowel. Comes
                        in plain single scroll.

                    </div>
                    <div class="spacer10"></div>
                    <div>Oiled Rubbed Bronze</div>
                    <div>(dark brown) finish.</div>
                    <br>
                    <div class="description-and-price">
                        <span>Set of 2 shelf with hook brackets</span><span id="Shelfbracketwithcurtainrodhook" class="price Shelfbracketwithcurtainrodhook">$48</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="ULHL8NMSDD6DS">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- <div id="throws_label"></div> -->

        <div class="home-decor-container">
            <div class="large-heading-row">
                <h2>Cozy Hand Woven Throws</h2>
            </div>
        </div>
        <div class="statement-parent">
            <div class="statement">
                <i>
                “Be cozy and warm with one of my hand woven throws!”
                </i>
            </div>
            <div class="signature">Phyllis Leck</div>
        </div>

        <!-- ******************************************************
                  Throw 1
            ***********************************************************-->
        <br>
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/black_dble_check_1d.png" alt="">
            </div>
            <div class="copy-block home-decor">
                <div class="content-text-block">
                    <br>
                    <div class="small-heading-row">
                        Black Double Windowpane Check Throw
                    </div>
                    <div class="content-text-block">
                        <p>
                            A cozy cotton and Merino wool Throw. Oatmeal color blended singles yarn is the background
                            color and black merino wool creates a double windowpane check. Dry clean only.
                        </p>

                        <div class="small-heading-row">
                            Picnic Blanket
                        </div>
                        <div class="description-and-price">
                            <span>42 x 38 inches plus hand knotted fringe</span><span class="price">$92</span>
                        </div>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="WCHVNDHDHA7Q4">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                        <div class="small-heading-row">
                            Hemmed End Blanket
                        </div>
                        <div class="description-and-price">
                            <span>42 x 78 inches hand hemmed ends</span><span class="price">$200</span>
                        </div>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="WCHVNDHDHA7Q4">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                        <div class="small-heading-row">
                            Fringed End Blanket
                        </div>
                        <div class="description-and-price">
                            <span>42 x 80 inches plus hand knotted fringe</span><span class="price">$200</span>
                        </div>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="WCHVNDHDHA7Q4">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <!-- ******************************************************
                  Throw 2
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/sandy_throw1.png" alt="">
            </div>
            <div class="copy-block home-decor">
                <div class="content-text-block">
                    <br>
                    <br>
                    <br>
                    <div class="small-heading-row">
                        Sandy Beach Throw </div>
                    <div class="content-text-block">
                        <p>
                            A one of a kind throw of textured fibers loosely woven with a bumpy cotton yarn.
                            A variety of soft taupe and gray yarns resembling the pebbles on the beach. <br><br>
                            Dry clean recommended. <br>

                        </p>
                        <div class="description-and-price">
                            <span>50 x 68 inches plus hand knotted fringe</span><span class="price"> $250</span>
                        </div>
                        <br>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="QVN982DJFQMXA">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <!-- ******************************************************
                  Throw 3
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/lime_brown_stripe_throw1a.png" alt="">
            </div>
            <div class="copy-block home-decor">
                <div class="content-text-block">
                    <br>
                    <br>
                    <br>
                    <div class="small-heading-row">
                        Brown Lime Check Throw
                    </div>
                    <div class="content-text-block">
                        <p>
                            Smooth sturdy cotton is woven with a brown
                            background with darker brown and lime green stripes crossing then
                            creating a check. Lovely durable blanket to wrap up in. Washable;
                            Wash in cool water on delicate and tumble dry. I have already washed
                            and softened these for you.
                        </p>
                        <div class="description-and-price">
                            <span>42 x 66 inches hemmed</span><span class="price"> $160</span>
                        </div>
                        <br>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="9NX8JBGMXP798">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <!-- ******************************************************
                  Throw 4
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/brown_teal_stripe_throw_1a.png" alt="">
            </div>
            <div class="copy-block home-decor">
                <div class="content-text-block">
                    <br>
                    <div class="small-heading-row">
                        Teal Blue and Dark Brown Stripe Throw
                    </div>
                    <div class="content-text-block">
                        <p>
                            Smooth sturdy cotton is woven in
                            brown background with darker brown and teal blue stripes crossing then
                            creating a check. Lovely durable blanket to wrap up in or take along for picnics.
                            Washable; Wash with cool water on delicate, tumble dry.
                            I have already washed and softened these for you.
                        </p>
                        <div class="description-and-price">
                            <span>48 inches square hemmed</span><span class="price">$90</span>
                        </div>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="REBBHG9LTWGVC">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                        <div class="description-and-price">
                            <span>45 x 86 inches with hand knotted fringe</span><span class="price">$180</span>
                        </div>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="8V69UT6L2D3FL">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <!-- ******************************************************
                  Throw 5
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-blockX hardware">
                <img src="../images/teal_white_stripe_throw1a.png" alt="">
            </div>
            <div class="copy-block home-decor">
                <div class="content-text-block">
                    <br>
                    <br>
                    <br>
                    <div class="small-heading-row">
                        Brown, White and Teal Blue Check Throw
                    </div>
                    <div class="content-text-block">
                        <p>
                            Smooth sturdy cotton is woven with brown background with White and
                            Teal Blue stripes crossing to create a check. Lovely durable blanket
                            to wrap up in. Washable; Wash in cool water on delicate and tumble dry.
                            I have already washed and softened these for you. </p>
                        <div class="description-and-price">
                            <span>42 x 72 inches hemmed</span><span class="price">$175</span>
                        </div>
                        <br>
                        <div class="add-to-cart">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="Y8BAZ7D9K9HKW">
                                <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <br><br> -->


        <!-- ******************************************************
              Beginning of Decorative Touches
        ***********************************************************-->

        <div class="large-heading-row">`
            <h2>Decorative Touches</h2>
        </div>

        <!-- ******************************************************
              Open Weave Knotweed Table Runner
        ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-block home-decor-1">
                <img src="../images/table_runner2.jpg" alt="">
            </div>
            <div class="copy-block home-decor" style="padding-top: 50px;">
                <div class="content-text-block">
                    <br><br>
                    <div class="small-heading-row">
                        Open Weave Knotweed<br>
                        Table Runner<br>
                    </div>
                    <br>
                    <div>
                        Cotton hand dyed using local walnut husks
                        and knotweed. Each one unique as color
                        naturally varies.
                    </div>
                    <br>
                    <div class="description-and-price">
                        <span>Measures 24 by 94 inches</span><span id="OpenWeaveKnotweedTableRunner" class="price OpenWeaveKnotweedTableRunner">$225</span>
                    </div>
                    <div></div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="QH4QVF89249X6">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <div class="spacer30"></div>
                    <div class="spacer30"></div>
                    <div class="spacer30"></div>
                </div>
            </div>
        </div>
        <br><br>

        <!-- ******************************************************
                  Country Folk Art Pillow
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-block ">
                <img src="../images/folk_flag.jpg" alt="">
            </div>
            <div class="copy-block">
                <br>
                <div class="content-text-block">
                    <div class="small-heading-row">
                        Country Folk Art Pillow
                    </div>
                    <p>America loves jeans! Made totally from
                        recycled 100% cotton jeans of red, white, and
                        blue. Hand cut and woven into a flag motif.
                        Pillow insert is a white duck pillow
                        made in the USA.
                    </p>
                    <div class="description-and-price">
                        <span>Measures 20 by 12 inches</span><span id="CountryFolkArtPillow" class="price CountryFolkArtPillow">$135</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="3L8U9RF9783BY">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>
                    <!-- <div class="small-type">Hand Forged <a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div> -->
                </div>
            </div>
        </div>
        <br><br>


        <!-- ******************************************************
                  Country Folk Art Wall Hanging
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-block hardware">
                <!-- <div class="flag-block" style="padding-top: 50px;"> -->
                <img src="../images/flag_wall_large.jpg" alt="">
                <!-- </div> -->
            </div>
            <div class="copy-block" styleX="height: 250px;">
                <div class="content-text-block">
                    <br>
                    <br>
                    <div class="small-heading-row">
                        Country Folk Art Wall Hanging
                    </div>
                    <br>
                    <p>Made totally from recycled 100% cotton jeans of red, white, and blue.
                        Hand cut and woven into a flag motif.
                    </p>
                    <p>A rod pocket in back will hold a 1/2 inch&nbsp;rod.</p>
                    <!-- <div class="spacer10"></div> -->
                    <div class="description-and-price">
                        <span>Measures 20 by 11 1/2 inches</span>
                        <span id="CountyFolkArtWallHanging" class="price CountyFolkArtWallHanging">$110</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <br>
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="RVGHUVBDQWY9U">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <!--Displayed with hand forged backets sold below.-->
                    <!--<div class="small-type">Displayed with hand forged <a href="#Brackets">brackets</a> sold below</div>-->

                </div>
            </div>
        </div>
        <br><br>
        <div class="spacer30"></div>


        <div id="truce-flag-label"></div>
        <!-- ******************************************************
                  Flag of Truce
            ***********************************************************-->
        <div class="home-decor-container">
            <div class="image-block ">
                <!-- <div><a name="flag"></a></div> -->
                <img src="../images/truce_flag4.jpg" alt="">
            </div>
            <div class="copy-block " styleX="height: 550px; ">
                <div class="content-text-block">
                    <div class="small-heading-row">
                        <h4>Flag of Truce</h4>
                    </div>
                    <p>The Flag of Truce waved ending the Civil War was a simple dish
                        towel cut in half and tied to a stick. This is a hand woven replica
                        of the flag now in the Smithsonian Museum. This symbol of peace
                        is 100% yarn dyed cotton.
                    </p>
                    <div class="description-and-price">
                        <span>Truce Flag</span><span id="PeaceFlag" class="price PeaceFlag">$30</span>
                    </div>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="RTQVPRWY2WZPQ">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>

                    <div class="description-and-price">
                        <span>Plain Rod and Bracket Set</span><span id="PlainRodandBracketSet" class="price PlainRodandBracketSet">$25</span>
                    </div>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="X5FKBD7R8T3CS">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <div class="spacer20"></div>
                    <div class="description-and-price">
                        <span>Rod with Forged Balls and&nbsp;Bracket&nbsp;Set</span><span id="RodwithForgedBallsandBracketSet" class="price Plain RodwithForgedBallsandBracketSet">$35</span>
                    </div>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="4TLZM5HAZY8MN">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <div class="spacer30"></div>
                    Brackets and Rods by <a href="https://www.scottishwroughtiron.com">Scottish&nbsp;Lion&nbsp;Wrought&nbsp;Iron</a>
                </div>
            </div>
        </div>
        <br><br>

    </main>
    <!-- ******************************************************
                        Footer
        ***********************************************************-->
    <div id="footer"></div>
    <?php
    require '../includes/footer1.php';
    ?>

    <script>
        document.getElementById("header-image").style.display = "none";
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