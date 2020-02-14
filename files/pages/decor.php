<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "decorGrid";
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
            "My rugs are sustainably woven using natural non toxic materials for a healthy and comfortable home.”            </i>
        </div>
        <div class="signature">Phyllis Leck</div>
    </div>

    <br>

    <div class="home-decor-container home-decor-rug">
        <!-- ******************************************************
                  BLOCK 001  rug 1
            ***********************************************************-->

        <div class="rug-image-block">
            <!-- <img src="../images/rug_RUGR.png" alt=""> -->
            <?php
            outputCode("rug_RUGR", "png", "rug_RUGR2b", "png");
            ?>

        </div>
        <div id="home-decor-block2" class="copy-block home-decor">
            <div class="content-text-block">
                <br><br>
                <div class="small-heading-row-centered">
                    Red Wool Yarn Scatter Rug 2’ x 3’</div>
                <br>
                <div class="content-text-block">
                    Hand woven with Pennsylvania rug wool yarn spun and dyed for me.
                    Durable wool and cotton/poly yarn. <br>
                    This rug is in stock. <br>
                    Custom sizes and price upon request. <br>
                    <br>
                    To maintain: shake out, vacuum, spot clean.
                    Wool is incredible! Best type of rug to live with there is.
                    No Formaldehyde or chemicals added. <br><br>
                    <br>
                    <div class="description-and-price">
                        <span>Price includes shipping</span><span id="" class="price">$128</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <!-- <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="26P9HF4FVFUXW">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form> -->

                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="79Q5YWP6HBQQG">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--</div>-->
    </div>

    <br><br>
    <div class="home-decor-container home-decor-rug">
        <!-- ******************************************************
                  BLOCK 002  rug 2
            ***********************************************************-->

        <div class="rug-image-block">
            <!-- <img src="../images/rug_HMRW.png" alt=""> -->
            <?php
            outputCode("rug_HMRW", "png", "rug_HMRW2", "png");
            ?>

        </div>
        <div id="home-decor-block2" class="copy-block home-decor">
            <div class="content-text-block">
                <br><br>
                <div class="small-heading-row-centered">
                    Jane Connor “Hit and Miss” Redware Wool Scatter Rug 2’ x 3’
                </div>
                <br>
                <div class="content-text-block">
                    The wool strips from Jane Connor’s wool rug business were given to me.<br>
                    I have made this hit and miss wool scatter rug in her style
                    Multi tans wool strips and black, sage green and a red that
                    early American enthusiasts will recognize as” redware red”. <br><br>
                    To maintain: shake, vacuum, and spot clean. <br>
                    <br>
                    <div class="description-and-price">
                        <span>Price includes shipping</span><span id="" class="price">$158</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <!-- <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="26P9HF4FVFUXW">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form> -->

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
        <!--</div>-->
    </div>

    <br><br>
    <div class="home-decor-container home-decor-rug">
        <!-- ******************************************************
                  BLOCK 003  rug 3
            ***********************************************************-->

        <div class="rug-image-block">
            <!-- <img src="../images/rug_hmdr.png" alt=""> -->
            <?php
            outputCode("rug_hmdr", "png", "rug_HMDr2a", "png");
            ?>
        </div>
        <div id="home-decor-block2" class="copy-block home-decor">
            <div class="content-text-block">
                <br>
                <div class="small-heading-row-centered">
                    Jane Connor “Hit and Miss” Dusty Rose Wool Scatter Rug 2’ x 3’
                </div>
                <br>
                <div class="content-text-block">
                    The wool strips from Jane Connor’s wool rug business were given to me.
                    I have made this hit and miss wool scatter rug in her style
                    Multi tan wool strips and black, sage green and a Dusty Rose.
                    <br><br>
                    To maintain: shake, vacuum, and spot clean.
                    <br><br>
                    <div class="description-and-price">
                        <span>Price includes shipping</span><span class="price">$180</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <!-- <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="26P9HF4FVFUXW">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form> -->

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
              BLOCK 0
        ***********************************************************-->
    <div class="decor-block0">
        <div class="box box0">
            <div id="home-decor-block1a" class="image-block swag-image-block">
                <img id="decor_v4_png" src="../images/swag_detail.jpg" class="image-bottom" alt="" width="250px">
                <img id="swag_jpg" src="../images/swag.jpg" class="img-top" alt="">
                <script>
                    document.getElementById('swag_jpg').style.display = 'none';
                    swag_jpg.onclick = function() {
                        document.getElementById('swag_jpg').style.display = 'none';
                        document.getElementById('decor_v4_png').style.display = 'inline-block';
                    };

                    decor_v4_png.onclick = function() {
                        document.getElementById('decor_v4_png').style.display = 'none';
                        document.getElementById('swag_jpg').style.display = 'inline';
                    };
                </script>

                <div class="swag-caption">
                    <div class="content-text-block">
                        <div class="click-for-closeup">Click for alternate view</div>
                    </div>

                </div>
            </div>

        </div>
        <div class="box box1">
            <div class="small-heading-row-centered">
                <h4>Open Weave Knotweed <i>Swags</i></h4>
            </div>
            <!-- <div>Maine Village Weaver's signature </div>
            <div>Open Weave Curtains and swags </div>
            <div>are hand dyed for a natural look.</div>
            <div class="spacer10"></div>
            <div>I stain the cotton threads with brown</div>
            <div>walnut and dye the wool yarn with</div>
            <div>knotweed plants I gather locally. </div> -->

            <p>Maine Village Weaver's signature Open Weave Curtains and swags 
            are hand dyed for a natural look.</p>
            <div class="spacer10"></div>
            <p>I stain the cotton threads with brown 
            walnut and dye the wool yarn with
            knotweed plants I gather locally. </p>

            <div class="spacer10"></div>
            <div class="small-type"><a href="#Brackets">Hand Forged Brackets</a></div>
            <div>by Scottish Wrought Iron sold below</div>
        </div>

        <div class="box box2">
            <img src="../images/decor_v4.png" alt="">
            <div>Custom length swag measures 150 inches.</div>
        </div>
        <div class="spacer20"></div>
    </div>


    <div class="home-decor-container">


        <!-- ******************************************************
                  BLOCK 1
            ***********************************************************-->


        <!--<div  class="copy-and-image">-->

        <div id="home-decor-block1a" class="image-block swag-image-block">
            <img id="decor_v4_png" src="../images/decor_v4.png" class="image-bottom" alt="Swag over window looking out of kitchen.">
            <img id="swag_jpg" src="../images/swag.jpg" class="img-top" alt="">
            <script>
                document.getElementById('swag_jpg').style.display = 'none';
                swag_jpg.onclick = function() {
                    document.getElementById('swag_jpg').style.display = 'none';
                    document.getElementById('decor_v4_png').style.display = 'inline-block';
                };

                decor_v4_png.onclick = function() {
                    document.getElementById('decor_v4_png').style.display = 'none';
                    document.getElementById('swag_jpg').style.display = 'inline';
                };
            </script>


            <div class="swag-caption">
                <div class="content-text-block">
                    <div class="click-for-closeup">Click for alternate view</div>
                    <div>Custom length swag measures 150 inches.</div>
                </div>

            </div>
        </div>


        <!--<div id="home-decor-block1" class="copy-block home-decor">-->
        <div class="copy-block swag-block2">
            <div class="content-text-block">
                <div class="small-heading-row-centered">
                    <h4>Open Weave Knotweed <i>Swags</i></h4>
                </div>
                <div>Maine Village Weaver's signature </div>
                <div>Open Weave Curtains and swags </div>
                <div>are hand dyed for a natural look.</div>
                <div class="spacer10"></div>
                <div>I stain the cotton threads with brown</div>
                <div>walnut and dye the wool yarn with</div>
                <div>knotweed plants I gather locally. </div>
                <div class="small-type"><a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
            </div> <!-- end content-text-block -->
        </div> <!-- end home-decor-block1 -->
        <div class="spacer20"></div>

        <!--</div>-->
    </div>


    <div class="home-decor-container">

        <!-- ******************************************************
                  BLOCK 1A
            ***********************************************************-->


        <!-- ******************************************************
                  BLOCK 1B
            ***********************************************************-->
        <!--<div  class="copy-and-image">-->
        <div class="image-block">
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
                <!--<br>-->
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
                <br>
                <div class="add-to-cart">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="SLVJDCSX3K9RG">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div> <!-- end content-text-block -->

            <div class="small-heading-row-left">
                <div class="small-heading-row-centered">
                    Open Weave Knotweed
                </div>
                <div class="small-heading-row-centered">
                    <i>Cafe Curtains</i>
                </div>
                <div class="spacer10"></div>
            </div>
            <div class="content-text-block">
                <div>
                    Two panels, in my signature open weave knotweed fabric.
                </div>
                <div class="description-and-price">
                    <span>Each panel 24 x 26 inches</span><span id="OpenWeaveKnotweedCafeCurtains" class="price OpenWeaveKnotweedCafeCurtains">$120</span>
                </div>
                <br>
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
            <div class="content-text-block">
                <div class="small-type">Custom Lengths made to order</div>
                <div class="small-type"><a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
            </div>
        </div> <!-- end home-decor-block1 -->
        <!--</div>-->
    </div>
    <br><br>

    <div class="home-decor-container">
        <!-- ******************************************************
                  BLOCK 2
            ***********************************************************-->

        <!--<div class="copy-and-image">-->
        <div class="image-block">
            <img src="../images/knotweed_panel.jpg" alt="">
        </div>
        <div id="home-decor-block2" class="copy-block home-decor">
            <div class="content-text-block">
                <br>
                <br>
                <br>
                <div class="small-heading-row-centered">
                    Open Knotweed Panel<br>with self valance
                </div>
                <br>
                <div class="content-text-block">
                    <!-- <div>Shown casually draped over a tension rod. </div>
                    <div>Open weave cotton and wool. </div>
                    <div>I stain the cotton threads with brown </div>
                    <div>walnut and dye the wool yarn with </div>
                    <div>knotweed plants I gather locally. </div> -->

                    <p>Shown casually draped over a tension rod. 
                    Open weave cotton and wool. 
                    I stain the cotton threads with brown 
                    walnut and dye the wool yarn with 
                    knotweed plants I gather locally. </p>

                    <br>
                    <div>Custom lengths made to order.</div>
                    <br>
                    <div class="description-and-price">
                        <span>measure 24 x 94 inches</span><span id="OpenKnotweedPanelwithselfvalance" class="price OpenKnotweedPanelwithselfvalance">$180</span>
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
                    <div class="small-type">Hand Forged <a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
                </div>
            </div>
        </div>
        <!--</div>-->
    </div>
    <br><br>
    <div class="home-decor-container">

        <!-- ******************************************************
                  BLOCK 3
            ***********************************************************-->

        <!--<div class="copy-and-image">-->
        <div class="image-block home-decor-1 decor3-image1">
            <!--<img src="../images/2panel_curtain1.jpg" alt="" >-->
            <!--<br>-->
            <?php outputCode("two_panel_curtain1", "jpg", "detail_slub_thumb", "jpg", ""); ?>

            <!--          <div class="decor3-image-text">Custom lengths made to order</div>
                          <div class="decor3-image2">-->
            <!--<img src="../images/detail_slub_thumb.jpg">-->
            <!--</div>-->
        </div>
        <div id="home-decor-block3" class="copy-block home-decor">
            <div class="content-text-block">
                <br>
                <div class="small-heading-row-centered">
                    Open Weave Knotweed Panel<br>with Rod Pocket
                </div>
                <br>
                <!-- <div>Displayed on the left of photo. </div>
                <div>2 inch rod pocket for easy hanging. </div>
                <div>I stain the cotton threads with brown </div>
                <div>walnut and dye the wool yarn with </div>
                <div>knotweed plants I gather locally.</div> -->

                <p>Displayed on the left of photo. 
                2 inch rod pocket for easy hanging. 
                I stain the cotton threads with brown 
                walnut and dye the wool yarn with 
                knotweed plants I gather locally.</p>

                <div class="spacer10"></div>
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
                <div class="small-heading-row">
                    <h4>Cotton and Linen Curtain Panel</h4>
                </div>
                <!--            <div>Displayed on right of photo</div>
                                <div>Detail shows texture of linen slubs in the weave.</div>
                                <div>Two inch rod pocket for carefree hanging.</div>-->
                Displayed on right of photo. Detail shows texture
                of linen slubs in the weave. Two inch rod pocket
                for carefree hanging.
                <div class="spacer10"></div>
                <div class="description-and-price">
                    <span>Measures 24 by 84 inches</span><span id="CottonandLinenCurtainPanel" class="price CottonandLinenCurtainPanel">$240</span>
                </div>
                <div></div>
                <div class="add-to-cart">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="YJYLYTTBGNEKY">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <div class="small-type">Hand Forged <a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
            </div>
        </div>
        <!--</div>-->
        <!--<br>-->
    </div>
    <br><br>
    <!-- ******************************************************
              BLOCK 4
        ***********************************************************-->

    <div id="decor-label"></div>
    <div class="large-heading-row">
        <h2>Decorative Touches</h2>
    </div>
    <div class="home-decor-container">
        <!--<div class="copy-and-image">-->
        <div class="image-block home-decor-1">
            <img src="../images/table_runner2.jpg" alt="">
        </div>
        <div id="home-decor-block4" class="copy-block home-decor" style="height: 512px">

            <div class="content-text-block">
                <br><br>
                <div class="small-heading-row-centered">
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
                <div class="small-type">Hand Forged <a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
            </div>
        </div>
        <!--</div>-->
    </div>
    <br><br>
    <div class="home-decor-container">

        <!-- ******************************************************
                  BLOCK 5
            ***********************************************************-->

        <!--<div class="copy-and-image">-->
        <!--<h3>Currently unavailable. Please check back again. </h3>-->
        <div class="image-block home-decor-1">
            <img src="../images/folk_flag.jpg" alt="">
        </div>
        <div id="home-decor-block5" class="copy-block home-decor" style="height: 420px">
            <br>
            <div class="content-text-block">
                <div class="small-heading-row-centered">
                    <h4>Country Folk Art Pillow</h4>
                </div>
                <div class="content-text-block">
                    <div class="small-heading-row">
                    </div>
                    <div>America loves jeans! Made totally from
                        recycled 100% cotton jeans of red, white, and
                        blue. Hand cut and woven into a flag motif.
                        Pillow insert is a white duck pillow
                        made in the USA.
                    </div>
                    <br>
                    <br>
                    <div class="description-and-price">
                        <span>Measures 12 by 20 inches</span><span id="CountryFolkArtPillow" class="price CountryFolkArtPillow">$135</span>
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
                    <div class="small-type">Hand Forged <a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div>
                </div>
            </div>
        </div>
        <!--</div>-->
    </div>
    <br><br>

    <div class="home-decor-container">

        <!-- ******************************************************
                  BLOCK 5A
            ***********************************************************-->

        <!--<div class="copy-and-image">-->
        <div class="image-block home-decor-1">
            <!-- <br>
            <br>
            <br> -->
            <!-- <div class="spacer10"></div> -->
            <div class="flag-block" style="height: 280px">
                <img src="../images/flag_wall_large.jpg" alt="">
            </div>
            <!-- <div class="decor5a-image-spacer"></div> -->
        </div>
        <div id="home-decor-block5a" class="copy-block home-decor5a">
            <div class="content-text-block">
                <br>
                <div class="small-heading-row-centered">
                    <!-- <h3>Currently unavailable. Please check back again.</h3> -->
                    Country Folk Art Wall Hanging
                </div>
                <br>
                <div class="small-heading-row">
                </div>
                <div>Made totally from recycled 100% cotton jeans of red, white, and blue.
                    Hand cut and woven into a flag motif.
                </div>
                <div>A rod pocket in back will hold a 1/2 inch rod.</div>
                <div class="spacer10"></div>
                <div class="description-and-price">
                    <span>Measures 11 1/2 by 20 inches</span>
                    <span id="CountyFolkArtWallHanging" class="price CountyFolkArtWallHanging">$110</span>
                </div>
                <br>
                <div class=" add-to-cart">
                    <br><br><br>
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
    <!-- ******************************************************
                  BLOCK 5b
            ***********************************************************-->
    <div class="home-decor-container">

        <!--<div class="copy-and-image">-->
        <!--<h3>Currently unavailable. Please check back again. </h3>-->
        <div class="image-block home-decor-1">
            <div><a name="flag"></a></div>
            <img src="../images/truce_flag4.jpg" alt="">
        </div>
        <div id="home-decor-block5b" class="copy-block home-decor">
            <!-- <br> -->
            <div class="content-text-block">
                <div class="small-heading-row-centered">
                    <h4>Flag of Truce</h4>
                </div>
                <div class="content-text-block">
                    <div class="small-heading-row">
                    </div>
                    <div>The <span class="bold small-heading-row-centered">Flag of Truce</span> waved ending the Civil War was a simple dish
                        towel cut in half and tied to a stick. This is a hand woven replica
                        of the flag now in the Smithsonian Museum. This symbol of peace
                        is 100% yarn dyed cotton.
                    </div>
                    <br>
                    <br>
                    <div class="description-and-price">
                        <span>Peace Flag</span><span id="PeaceFlag" class="price PeaceFlag">$30</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="RTQVPRWY2WZPQ">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <br>
                    <!-- <div class="small-type">Hand Forged <a href="#Brackets">Hand Forged Brackets</a> by Scottish Wrought Iron sold below</div> -->
                    <div class="bold small-heading-row-centered">Brackets and Rods by Scottish Lion Wrought Iron</div>
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
                    <div class="description-and-price">
                        <span>Rod with Forged Balls and Bracket Set</span><span id="RodwithForgedBallsandBracketSet" class="price Plain RodwithForgedBallsandBracketSet">$35</span>
                    </div>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="4TLZM5HAZY8MN">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--</div>-->
    </div>

    <!-- <div class="home-decor-container">
    </div> -->
    <br><br>
    <!-- ******************************************************
              BLOCK 6
        ***********************************************************-->
    <div id="brackets-label"></div>
    <div class="large-heading-row forged-brackets">
        <a name="Brackets" href="https://www.scottishwroughtiron.com/curtainhw.php" target="_blank">
            <!-- <img src="../images/curtain_rods400.jpg"> -->
            <h2>Hand Forged Brackets</h2>
            <div class="by-scottish">
                <span>by Scottish Wrought Iron</span>
            </div>
        </a>
    </div>
    <div class="spacer20"></div>

    <!-- <div class="curtain-hardware-frame">
        <iframe src="https://www.scottishwroughtiron.com/curtainhw.php" width="100%"></iframe>
    </div> -->

    <div class="home-decor-container">

        <!--<div class="shelf-bracket-container">-->
        <!--<div class="copy-and-image">-->
        <div class="image-block home-decor-1">
            <img src="../images/bracket_B193.jpg" alt="">
        </div>

        <div id="home-decor-block6" class="copy-block home-decor  large-bracket-set">
            <div class="content-text-block">
                <!--<div class="spacer20"></div>-->
                <div class="small-heading-row">
                    <h4>Large Bracket Set</h4>
                </div>
                <div class="content-text-block">
                    <div class="small-heading-row">
                    </div>
                    <div>Set of 2 large hand forged
                        wrought iron brackets can
                        hold up to a 3 inch diameter
                        rod or branch.
                        Brackets have a 5 inch
                        projection and are dark brown
                        with an Oiled Rubbed
                        Bronze finish..

                    </div>
                    <br>
                    <div class="description-and-price">
                        <span>Set of 2 Large Brackets</span><span id="LargeBracketSet" class="price LargeBracketSet">$48</span>
                    </div>
                    <br>
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
    </div>
    <br><br>
    <!--</div>-->
    <!--</div>-->
    <!-- ******************************************************
                  BLOCK 7
            ***********************************************************-->
    <div class="home-decor-container">

        <!--<div class="spacer30"></div>-->
        <!--<div class="shelf-bracket-container">-->
        <!--<div class="copy-and-image">-->
        <div class="image-block home-decor-1">
            <img src="../images/bracket_B19s_x2.png" alt="">
        </div>
        <div id="home-decor-block7" class="copy-block home-decor small-bracket-set">
            <div class="spacer20"></div>
            <div class="small-heading-row">
                <h4>Small Bracket Set</h4>
            </div>
            <div class="content-text-block">
                <div class="small-heading-row">
                </div>
                <div>Set of 2 hand forged wrought
                    iron brackets hold up
                    to a one inch diameter dowel
                    suitable for the swag curtain.
                    Bracket has 3 inch projection.
                    Oiled Rubbed Bronze
                    (dark brown) finish. </div>
                <br>
                <div class="description-and-price">
                    <span>Set of 2 brackets</span><span id="SmallBracketSet" class="price SmallBracketSet">$32</span>
                </div>
                <br>
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
    <!--</div>-->
    <!--</div>-->
    <!-- ******************************************************
                  BLOCK 8
            ***********************************************************-->
    <!--<div class="spacer30"></div>-->
    <!--<div class="shelf-bracket-container">-->
    <!--<div class="copy-and-image">-->
    <div class="home-decor-container">
        <div class="image-block home-decor-1">
            <img src="../images/bracket_shelf_x2.png" alt="">
        </div>
        <div id="home-decor-block8" class="copy-block home-decor shelf-bracket">
            <div class="spacer20"></div>
            <div class="small-heading-row">
                Shelf bracket with<br>
                curtain rod hook<br>
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
    </div> <!-- home-decor-container -->
    <!--</div>-->
    <!--</div>-->
    <!-- <div class="other-designs">
        <h4>Other designs available on <a href="http://www.ScottishWroughtIron.com">Scottish Wrought Iron</a></h4>
    </div> -->



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