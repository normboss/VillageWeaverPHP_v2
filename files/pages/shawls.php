<?php
if (!session_id()) session_start();
$_SESSION['pagename'] = "shawls";
// $_SESSION['pagename'] = "index";
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

    <title>Shawls & Scarves - Maine Village Weaver</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="../css/shawls.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!-- <script src="../js/prices1.js"></script> -->

    <script>
        $(function() {
            // $("#banner").load("../includes/banner.php");
            // $("#main-menu").load("../includes/main-menu.php");

            // var priceObj = new Prices();
            // priceObj.setPrices();
        });
    </script>
</head>

<body>

    <div id="header-id">

        <div class="banner">
            <span class="text1">Maine Village Weaver</span><span class="text2">Shawls and Scarves</span>
        </div>

        <div id="main-menu" class="home"></div>
        <?php
        require "../includes/main-menu.php";
        ?>
    </div>

    <div id="header-image"></div>
        <br><br>
    <div class="statement-parent">
        <div class="statement">
            <i>
                "I carefully weave each piece so you can enjoy them for years to come."
            </i>
        </div>
        <div class="signature">Phyllis Leck</div>
    </div>


    <!--
                FULL SIZE SHAWLS CONTAINER
        -->

    <br>
    <div class="shawls-container">

        <!--BLOCK 1-->
        <div class="image-block">
            <?php outputCode("shawl_knotweed1", "jpg", "shawl_knotweed2a", "jpg"); ?>

            <!-- <div class="card">
                <div id="card-front-1" class="card__side card__side--front">
                    <img src="../images/shawl_knotweed1.jpg">
                </div>

                <div id="card-back-1" class="card__side card__side--back">
                    <img src="../images/shawl_knotweed2a.jpg">
                </div>
            </div>
            <script>
                document.getElementById("card-front-1").onclick = function() {
                    frontClick()
                };
                document.getElementById("card-back-1").onclick = function() {
                    backClick()
                };

                function frontClick() {
                    var front = document.getElementById("card-front-1");
                    var back = document.getElementById("card-back-1");

                    front.style.transform = "rotateY(-180deg)";
                    back.style.transform = "rotateY(0deg)";
                    // document.getElementById("card-front-1").onclick = function() {backClick()};

                }


                function backClick() {
                    var front = document.getElementById("card-front-1");
                    var back = document.getElementById("card-back-1");

                    front.style.transform = "rotateY(0deg)";
                    back.style.transform = "rotateY(180deg)";
                    // document.getElementById("card-front-1").onclick = function() {frontClick()};

                }
            </script>
 -->
        </div>
        <div class="copy-block shawl-text1">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Open Weave
            </div>
            <div class="small-heading-row">
                Knotweed Shawl<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
                <div>
                    Cotton and wool shawl woven in my signature open weave has a lovely drape.
                    The white cotton threads are dyed with brown walnut shells and the wool yarn
                    hand dyed with “Japanese Knotweed" plants.
                </div>
                <div>The natural colors go well with linen.</div>
                <br>
                <div class="description-and-price">
                    <span>Size 24 x 88 inches</span>
                    <span id="OpenWeaveKnotweedShawl" class="price OpenWeaveKnotweedShawl">$225</span>
                </div>
                <br>
                <div class="add-to-cart">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="H58D6B76QXXN8">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!--BLOCK 2-->

        <div class="image-block steel-grey-shawl-images">
            <?php outputCode("shawl_steel3_2x", "png", "steel_grey_shawl1", "png"); ?>
        </div>
        <div class="copy-block block2 shawl-text2">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Steel Grey Shawl<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
                <div>Merino wool/tencel blend hand woven</div>
                <div>into this graceful shawl.</div>
                <br>
                <div>Dry clean only</div>
                <div class="description-and-price">
                    <span>Measures 24 x 94 inches</span>
                    <span id="SteelGreyShawl" class="price SteelGreyShawl">$200</span>
                </div>
                <br>
                <div class="add-to-cart">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="2GKD5D68DPV7C">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <!--<input type="button" value="Add to Cart"  border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>-->
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!--BLOCK 3-->

        <div class="image-block steel-grey-shawl-images">
            <?php outputCode("shawl_white_2a", "jpg", "shawl_white_1a", "jpg"); ?>
        </div>
        <div class="copy-block block2 shawl-text3">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Naturally White Shawl
                <span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
                <div>Natural undyed cotton and wool </div>
                <div>hand woven into a lucious shawl</div>
                <div>that is a breeze to wear.</div>
                <br>
                <div>Hand wash gently.</div>
                <div class="spacer10"></div>
                <div class="description-and-price">
                    <span>Measures 24 x 88 inches</span>
                    <span id="NaturallyWhiteShawl" class="price NaturallyWhiteShawl">$180</span>
                </div>
                <br>
                <div class="add-to-cart">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="URH724A4FL7AC">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>


        <!--BLOCK 4-->

        <div class="image-block has-insert">
            <?php outputCode("shawl_sea_foam", "jpg", "detail_sea_thumb1", "jpg"); ?>
        </div>
        <div class="copy-block block3 shawl-text4">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Open Weave
            </div>
            <div class="small-heading-row">
                Sea Foam Shawl<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
                <div>
                    Cotton yarn is hand dyed with black walnut
                    shells then woven with wool yarn the color
                    of blue and green sea foam.
                </div>
                <div class="spacer10"></div>
                <div>
                    The open weave gives this shawl a
                    luxurious softness.
                </div>
                <div></div>
                <br>
                <div>Colors vary in warm linen tones.</div>
                <br>
                <div class="description-and-price">
                    <span>Measures 24 by 88 inches</span>
                    <span id="OpenWeaveSeaFoamShawl" class="price OpenWeaveSeaFoamShawl">$180</span>
                </div>
                <br>
                <div class="add-to-cart">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="42PMR3GJL7HF8">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <br>
                <div>
                    Hit and miss dye pattern creates the natural look of
                    the sea foam shawl.
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!--BLOCK 5-->

        <div class="image-block steel-grey-shawl-images">
            <?php outputCode("shawl_rust_1", "jpg", "shawl_rust2a", "jpg"); ?>
        </div>
        <div class="copy-block block2 shawl-text5">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Auburn Rusty Red Shawl
                <span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
                <div>
                    New color! This shawl is hand woven with
                    cotton, bamboo boucle' in burnt orange
                    and locally sourced alpaca yarn. Dry clean.
                </div>
                <br>
                <div class="description-and-price">
                    <span>Measures 24 x 104 inches</span>
                    <span id="AuburnRustyRedShawl" class="price AuburnRustyRedShawl">$250</span>
                </div>
                <br>
                <div class="add-to-cart">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="BA36VTLPPRRB8">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-block-spacer"></div>

    <!--BLOCK 6-->

    <br><br>
    <div class="large-heading-row">
        Wraps and Scarves
    </div>
    <br>

    <div class="shawls-container">
        <div class="image-block">
            <?php outputCode("asym_jewel_wrap1a_2xC", "png", "wrap_asm_jewel1", "jpg"); ?>
        </div>
        <div class="copy-block shawl-text6">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Asymmetrical Jewel Wrap<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
                <div>Merino Wool Blend and</div>
                <div>Boucle' Cotton in jewel tones.</div>
                <div>Available in small or medium.</div>
                <br>
                <div></div>
                <br>
                <div class="description-and-price">
                    <span>.</span>
                    <span id="AsymmetricalJewelWrap" class="price AsymmetricalJewelWrap">$160</span>
                </div>
                <div class="add-to-cart-dropdown">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="JDJV9NA765N6C">
                        <table>
                            <tr>
                                <td><input type="hidden" name="on0" value="Sizes"></td>
                            </tr>
                            <tr>
                                <td><select name="os0">
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                    </select> </td>
                            </tr>
                        </table>
                        <br>
                        <div class="add-to-cart-button">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!-- BLOCK 7 -->

        <div class="image-block">
            <?php outputCode("shawl_steel_1b", "jpg", "shawl_steel_2b", "jpg"); ?>
        </div>
        <div class="copy-block shawl-text7">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Asymetrical Wrap in Steel Grey<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
                <div>Graceful and easy to wear. Asymetrical</div>
                <div>wrap is hand woven in versatile steel color.</div>
                <div>Merino wool/tencel blend yarn. Dry clean only</div>
                <br>
                <div></div>
                <br>
                <div class="description-and-price">
                    <span>.</span>
                    <span id="AsymmetricalWrapinSteelGrey" class="price AsymmetricalWrapinSteelGrey">$200</span>
                </div>
                <br>
                <div class="add-to-cart-dropdown">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="5EHJMB99TAX3E">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!-- BLOCK 8 -->

        <div class="image-block">
            <?php outputCode("black_merino", "jpg", "black_merino2", "jpg"); ?>
        </div>
        <div id="asymmetrical" class="copy-block shawl-text8">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Classic Black
            </div>
            <div class="small-heading-row">
                Merino Tencel Wrap<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
                <div>Light and fluid merino tencel yarn woven
                    into a versatile asymetrical wrap. Classic.
                    Dry clean.</div>
                <br>
                <div></div>
                <br>
                <div class="description-and-price">
                    <span>.</span>
                    <span id="ClassicBlackMerinoTencelWrap" class="price ClassicBlackMerinoTencelWrap">$200</span>
                </div>
                <br>
                <div class="add-to-cart-dropdown">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="DZWXBXZRUKD5J">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!-- BLOCK 9 -->

        <div class="image-block">
            <?php outputCode("wrap_black_cotton1", "jpg", "wrap_black2", "jpg"); ?>
        </div>
        <div id="asymmetrical" class="copy-block shawl-text9">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                New!
            </div>
            <div class="small-heading-row">
                Black Cotton
            </div>
            <div class="small-heading-row">
                Asymetrical Wrap<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
                <div>100% Cotton boucle' in striking black
                    woven into popular asymetrical wrap.
                    Cotton / merino wool - hand wash gently.
                    . </div>
                <br>
                <div></div>
                <br>
                <div class="description-and-price">
                    <span>.</span>
                    <span id="BlackCottonAsymetricalWrap" class="price BlackCottonAsymetricalWrap">$160</span>
                </div>
                <br>
                <div class="add-to-cart-dropdown">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="49GQQZK8R9XDU">
                        <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!--Block 10-->

        <div class="image-block">
            <?php outputCode("knotweed_wrap1a_2x", "png", "shawlsM_v3", "png"); ?>
        </div>
        <div id="asymmetrical" class="copy-block shawl-text10">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                <div>Open Weave</div>
                <div>Knotweed Wrap<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <br>
                    <div>
                        Light and fluid cotton and wool wrap woven in my signature open weave.
                        The white cotton threads are dyed with brown walnut shells and the wool
                        yarn hand dyed with “Japanese knotweed” plants. The natural colors dress
                        up jeans and look terrific with linen.
                    </div>
                    <br>
                    <div class="description-and-price">
                        <span>Available in small, medium and large.</span>
                        <span id="OpenWeaveKnotweedWrap" class="price OpenWeaveKnotweedWrap">$180</span>
                    </div>
                    <div class="add-to-cart-dropdown">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="388GQRZHB8VTG">
                            <table>
                                <tr>
                                    <td><input type="hidden" name="on0" value="Sizes"></td>
                                </tr>
                                <tr>
                                    <td><select name="os0">
                                            <option value="Small">Small </option>
                                            <option value="Medium">Medium </option>
                                            <option value="Large">Large </option>
                                        </select> </td>
                                </tr>
                            </table>
                            <br>
                            <br>
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!--BLOCK 11 -->

        <div class="image-block">
            <?php outputCode("scarf_lobster_red", "jpg", "scarf_red_1b", "jpg"); ?>
        </div>
        <div id="asymmetrical" class="copy-block shawl-text11">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                <div>Lobster Red Scarf<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <br>
                    <div>
                        Bright lobster red yarn brightens this
                        extra long scarf. Cotton and merino wool.
                        Hand wash.
                    </div>
                    <div class="content-text-block">
                        Measure a generous 13 x 84 inches.
                    </div>
                    <br>
                    <div class="description-and-price">
                        <span>.</span>
                        <span id="LobsterRedScarf" class="price LobsterRedScarf">$130</span>
                    </div>
                    <br>
                    <div class="add-to-cart-dropdown">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="U5T94UQ4ERBXE">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!--BLOCK 12-->

        <div class="image-block">
            <img src="../images/scarf_knot.jpg" alt="">
        </div>
        <div id="asymmetrical" class="copy-block shawl-text12">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                Open Weave Knotweed Scarf<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
                Soft cotton and wool scarf is hand dyed using local plants.
                Black walnut shells color the cotton and the wool / tencel
                blend is dyed using locally gathered Japanese Knotweed.
                <div>Each one unique as color varies in shades of warm linen. </div>
                <br>
                <div class="description-and-price">
                    <span>Measures 10 x 88 inches</span>
                    <span id="OpenWeaveKnotweedScarf" class="price OpenWeaveKnotweedScarf">$65</span>
                </div>
                <br>
                <br>
                <div class="add-to-cart">
                    <span></span>
                    <span>
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="98MJLASZK2MZY">
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="Add to Cart" <?php echo $add2cartAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </span>
                </div>
            </div>
        </div>
        <div class="copy-block-spacer"></div>

        <!--BLOCK 13-->

        <div class="image-block">
            <?php outputCode("ocean_blue_scarf1_2x", "png", "scarf_sea_glass", "jpg"); ?>
        </div>
        <div id="asymmetrical" class="copy-block shawl-text13">
            <div class="spacer30"></div>
            <div class="small-heading-row">
                New Color!
            </div>
            <div class="small-heading-row">
                Merino / Cotton Bouclé Scarf<span class="dev"><?php echo $blockNum++; ?></span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
                Lovely scarf hand woven in deep ocean blues Is also available
                in the greens and blues of beach sea glass.
                Cotton / Merino Rayon Boucle’
                <div>Hand wash.</div>
                <br>
                <div class="description-and-price">
                    <span>Measures 12 by 90 inches </span>
                    <span id="SeaGlassScarf" class="price SeaGlassScarf">$130</span>
                </div>
                <br>
                <br>
                <div class="add-to-cart">
                    <span></span>
                    <span>
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="7JKAR8CNBQS5Q">
                            <table>
                                <tr>
                                    <td><input type="hidden" name="on0" value="Color">Color:</td>
                                </tr>
                                <tr>
                                    <td><select name="os0">
                                            <option value="Ocean Blue - OB">Ocean Blue - OB </option>
                                            <option value="Sea Glass - SESC">Sea Glass - SESC </option>
                                        </select> </td>
                                </tr>
                            </table>
                            <input type="image" src="../images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </span>
                </div>
            </div>
        </div> <!-- end copy-block -->
        <div class="copy-block-spacer"></div>


    </div> <!--  end shawls-container -->

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