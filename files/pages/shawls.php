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
        <?php require "../includes/main-menu.php"; ?>
    </div>

    <main class="main">

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

            <!--  Block 1   Open Weave Knotweed Shawl -->
            <!-- open-weave-knotweed-shawl -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("shawl_knotweed1", "jpg", "shawl_knotweed2a", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="open-weave-knotweed-shawl-1" class="copy-block" style="height: 475px;">
                        <div id="open-weave-knotweed-shawl">
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
                    </div>
                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="open-weave-knotweed-shawl-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Block 2     Steel Grey Shawl -->
            <!-- steel-grey-shawl -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("shawl_steel3_2x", "png", "steel_grey_shawl1", "png"); ?>
                </div>
                <div class="shawls-text">
                    <div id="steel-grey-shawl-1" class="copy-block" style="height: 560px;">
                        <div id="steel-grey-shawl">
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
                    </div>
                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="steel-grey-shawl-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Block 3    Naturally White Shawl -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php
                    outputSpinCode("shawl_white_2a", "jpg", "shawl_white_1a", "jpg");
                    ?>

                </div>
                <div class="shawls-text">
                    <div id="naturally-white-shawl-1" class="copy-block" style="height: 563px;">
                        <div id="naturally-white-shawl">
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
                    </div>
                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="naturally-white-shawl-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Block 4    Open Weave Sea Foam Shawl -->
            <!-- open-weave-sea-foam-shawl -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("shawl_sea_foam", "jpg", "detail_sea_thumb1", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="open-weave-sea-foam-shawl-1" class="copy-block" style="height: 560px;">
                        <div id="open-weave-sea-foam-shawl">
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
                    </div>
                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="open-weave-sea-foam-shawl-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Block 5    Auburn Rusty Red Shawl -->
            <!-- auburn-rusty-red-shawl -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("shawl_rust_1", "jpg", "shawl_rust2a", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="auburn-rusty-red-shawl-1" class="copy-block" style="height: 570px;">
                        <div id="auburn-rusty-red-shawl">
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

                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="auburn-rusty-red-shawl-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="large-heading-row">
                Wraps and Scarves
            </div>
            <div class="spacer30"></div>

            <!-- Block 6    Asymmetrical Jewel Wrap -->
            <!-- asymmetrical-jewel-wrap -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("asym_jewel_wrap1a_2xC", "png", "wrap_asm_jewel1", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="asymmetrical-jewel-wrap-1" class="copy-block" style="height: 575px;">
                        <div id="asymmetrical-jewel-wrap">
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
                    </div>

                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="asymmetrical-jewel-wrap-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Block 7    Asymmetrical Wrap in Steel Grey -->
            <!-- asymmetrical-wrap-in-steel-grey -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("shawl_steel_1b", "jpg", "shawl_steel_2b", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="asymmetrical-wrap-in-steel-grey-1" class="copy-block">
                        <div id="asymmetrical-wrap-in-steel-grey">
                            <div class="spacer30"></div>
                            <div class="small-heading-row">
                                Asymmetrical Wrap in Steel Grey<span class="dev"><?php echo $blockNum++; ?></span>
                            </div>
                            <div class="spacer20"></div>
                            <div class="content-text-block">
                                <div>Graceful and easy to wear. Asymmetrical</div>
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
                    </div>

                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="asymmetrical-wrap-in-steel-grey-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!--  Classic Black Merino Tencel Wrap -->
            <!-- classic-black-merino-tencel-wrap -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("black_merino", "jpg", "black_merino2", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="classic-black-merino-tencel-wrap-1" class="copy-block" style="height: 400px;">
                        <div id="classic-black-merino-tencel-wrap">
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
                    </div>

                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="classic-black-merino-tencel-wrap-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!--  Black Cotton Asymmetrical Wrap -->
            <!-- black-cotton-asymmetrical-wrap -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("wrap_black_cotton1", "jpg", "wrap_black2", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="black-cotton-asymmetrical-wrap-1" class="copy-block" style="height: 380px">
                        <div id="black-cotton-asymmetrical-wrap">
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
                    </div>

                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="black-cotton-asymmetrical-wrap-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Open Weave Knotweed Wrap -->
            <!-- open-weave-knotweed-wrap -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("knotweed_wrap1a_2x", "png", "shawlsM_v3", "png"); ?>
                </div>
                <div class="shawls-text">
                    <div id="open-weave-knotweed-wrap-1" class="copy-block" style="height: 560px;">
                        <div id="open-weave-knotweed-wrap">
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
                    </div>

                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="open-weave-knotweed-wrap-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Lobster Red Scarf -->
            <!-- lobster-red-scarf -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("scarf_lobster_red", "jpg", "scarf_red_1b", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="lobster-red-scarf-1" class="copy-block" style="height: 465px">
                        <div id="lobster-red-scarf">
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
                    </div>

                </div>
            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="lobster-red-scarf-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Open Weave Knotweed Scarf -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <img src="../images/scarf_knot.jpg" alt="">
                </div>
                <div class="shawls-text">
                    <div id="asymmetrical" class="copy-block" style="height: 472px;">
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
                    <!--  -->
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>

            <!-- Merino / Cotton Bouclé Scarf -->
            <!-- merino-cotton-boucle-scarf -->
            <div class="shawls-block">
                <div class="shawls-image">
                    <?php outputSpinCode("ocean_blue_scarf1_2x", "png", "scarf_sea_glass", "jpg"); ?>
                </div>
                <div class="shawls-text">
                    <div id="merino-cotton-boucle-scarf-1" class="copy-block" style="height: 472px;">
                        <div id="merino-cotton-boucle-scarf">
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
                        </div>
                    </div>

                </div>

            </div>
            <div class="shawls-block">
                <div class="shawls-text">
                    Click image for alternate view
                    <div id="merino-cotton-boucle-scarf-2" class="copy-block" style="height: auto;">
                    </div>
                </div>
            </div>

            <div class="spacer30"></div>
            <div class="spacer30"></div>
    </main>


    <div id="footer"></div>
    <?php
    require '../includes/footer1.php';
    ?>

    <script>
        document.getElementById("header-image").style.display = "none";

        $("#open-weave-knotweed-shawl").clone().appendTo('#open-weave-knotweed-shawl-2')
        $("#steel-grey-shawl").clone().appendTo('#steel-grey-shawl-2')
        $("#naturally-white-shawl").clone().appendTo('#naturally-white-shawl-2')
        $("#open-weave-sea-foam-shawl").clone().appendTo('#open-weave-sea-foam-shawl-2')
        $("#auburn-rusty-red-shawl").clone().appendTo('#auburn-rusty-red-shawl-2')
        $("#asymmetrical-jewel-wrap").clone().appendTo('#asymmetrical-jewel-wrap-2')
        $("#asymmetrical-wrap-in-steel-grey").clone().appendTo('#asymmetrical-wrap-in-steel-grey-2')
        $("#classic-black-merino-tencel-wrap").clone().appendTo('#classic-black-merino-tencel-wrap-2')
        $("#black-cotton-asymmetrical-wrap").clone().appendTo('#black-cotton-asymmetrical-wrap-2')
        $("#open-weave-knotweed-wrap").clone().appendTo('#open-weave-knotweed-wrap-2')
        $("#lobster-red-scarf").clone().appendTo('#lobster-red-scarf-2')
        $("#merino-cotton-boucle-scarf").clone().appendTo('#merino-cotton-boucle-scarf-2')
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