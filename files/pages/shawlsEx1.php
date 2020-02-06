<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <?php
    require './includes/globalSiteTag.html';
    ?>

        <title>Maine Village Weaver Shawls and Scarves</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="./css/shawlsEx1.css" media="screen" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="./js/prices1.js"></script>
        <!--<script src="./js/handlers.js"></script>-->

        <script>
            $(function () {
                $("#banner").load("banner.html");
                $("#main-menu").load("main-menu.html");
                $("#footer").load("footer.html");
                var priceObj = new Prices();
                priceObj.setPrices();
            });
        </script> 



    </head>
    <body>

        <?php
        $blockNum = 1;
        $mobileBlockNum = 1;
        
        function outputCode($f1, $e1, $f2, $e2, $mobile) 
        {
            echo '<img id="' . $f1 . $mobile . '" src="./images/' . $f1 . '.' . $e1 . '">';
            echo '<img id="' . $f2 . $mobile . '" src="./images/' . $f2 . '.' . $e2 . '">';
            echo '<span class = "click-for-closeup">Click for alternate view</span>';
            echo '<script>';
            echo 'document.getElementById( "' . $f2 . $mobile . '" ).style.display = "none";';

            echo $f1 . $mobile . '.onclick = function() {';
                echo 'document.getElementById( "' . $f1 . $mobile . '").style.display = "none";';
                echo 'document.getElementById( "' . $f2 . $mobile . '").style.display = "inline-block";';
            echo '};';

            echo $f2 . $mobile . '.onclick = function() {';
                echo 'document.getElementById( "' . $f2 . $mobile . '").style.display = "none";';
                echo 'document.getElementById( "' . $f1 . $mobile . '").style.display = "inline";';
            echo '};';
            echo '</script>';
        }
    ?>

    <div class="banner">
        <span class="text1">Maine Village Weaver</span><span class="text2">Shawls and Scarves</span>
    </div>
    <div id="header-image">
        Hand woven with love
    </div>

    <div id="main-menu" class="home"></div>

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

    <div class="shawls-container">


        <!--BLOCK 1--> 
        
<div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <!--<img src="./images/shawl_knot1.jpg" alt="picture" >-->
                <?php outputCode("shawl_knotweed1", "jpg", "shawl_knotweed2a", "jpg", "" ); ?>
            </div>
            <div class="copy-block shawl-text1">
                <br>
                <div class="small-heading-row">
                    Open Weave 
                </div>
                <div class="small-heading-row">
                    <!--Knotweed Shawl<span class="dev">1</span>-->
                    Knotweed Shawl<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer10"></div>
                <div class="content-text-block">
                    <div>Cotton and wool shawl woven in my signature 
                        open weave has a lovely drape.
                        The white cotton threads are dyed with brown
                        walnut shells and the wool yarn hand dyed
                        with local "knotweed" plants.
                        The natural colors go well with linen.
                    </div>
                    <br>
                    <div>The natural colors go well with linen.</div>
                    <br>
                    <div class="description-and-price">
                        <span>Size 24 x 88 inches</span>
                        <span id="OpenWeaveKnotweedShawl" class="price OpenWeaveKnotweedShawl">???</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="H58D6B76QXXN8">
                            <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>  <!-- end copy-and-image -->
</div>

        <!--BLOCK 2--> 
<div class="shawls-block">
        <div class="copy-and-image block2">
            <div class="image-block steel-grey-shawl-images">
                <img src="./images/shawl_steel.jpg" alt="Image1">
            </div>
            <div class="copy-block block2 shawl-text2">
                <br>
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
                        <span id="SteelGreyShawl" class="price SteelGreyShawl">???</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="2GKD5D68DPV7C">
                            <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <!--<input type="button" value="Add to Cart"  border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div> 
            </div>
        </div>   <!--  end  copy-and-image --> 
</div>
`
        <!--BLOCK 3--> 

 <div class="shawls-block">
        <div class="copy-and-image block2">
            <div class="image-block steel-grey-shawl-images">
                <?php outputCode("shawl_white_2a", "jpg", "shawl_white_1a", "jpg", "" ); ?>
            </div>
            <div class="copy-block block2 shawl-text2">
                <br>
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
                        <span id="NaturallyWhiteShawl" class="price NaturallyWhiteShawl">???</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <button>Create New Button</button>
                    </div>
                </div> 
            </div>
        </div>   <!--  end  copy-and-image --> 
</div>
        
        <!--BLOCK 4--> 
<div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block has-insert">
                <img class="image1" src="./images/shawl_sea_foam.jpg" alt="picture" >
                <img class="image2" src="./images/detail_sea_thumb.jpg" alt="picture" >
            </div>
            <div class="copy-block block3 shawl-text3">
                <br>
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
                        <span id="OpenWeaveSeaFoamShawl" class="price OpenWeaveSeaFoamShawl">???</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="42PMR3GJL7HF8">
                            <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
        </div>   <!--  end  copy-and-image --> 
</div>
        
        <!--BLOCK 5--> 
        
     <div class="shawls-block">
        <div class="copy-and-image block2">
            <div class="image-block steel-grey-shawl-images">
                <?php outputCode("shawl_rust_1", "jpg", "shawl_rust2a", "jpg", "" ); ?>
            </div>
            <div class="copy-block block2 shawl-text2">
                <br>
                <div class="small-heading-row">
                    Auburn Rusty Red Shawl
                    <span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer10"></div>
                <div class="content-text-block">
                    <div>Merino wool/tencel blend hand woven</div>
                    <div>into this graceful shawl.</div>
                    <br>
                    <div>Dry clean only</div>
                    <div class="description-and-price">
                        <span>Measures 24 x 94 inches</span>
                        <span id="SteelGreyShawl" class="price SteelGreyShawl">???</span>
                    </div>
                    <br>
                    <div class="add-to-cart">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="2GKD5D68DPV7C">
                            <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <!--<input type="button" value="Add to Cart"  border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div> 
            </div>
        </div>   <!--  end  copy-and-image --> 
     </div>
        
        <!--BLOCK 6--> 

        <br>
        <br>
        <div class="large-heading-row">
            Wraps and Scarves
        </div>
    <div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <!--<img src="./images/wrap_jewel.jpg" alt="picture" >-->
                
                <?php outputCode("wrap_asm_jewel1", "jpg", "wrap_asm_teal_2a", "jpg", "" ); ?>
            </div>
            <div id="asymmetrical" class="copy-block shawl-text6">
                <br>
                <div class="small-heading-row">
                    Asymmetrical Jewel Wrap<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <div>Merino Wool Blend and
                        Boucle Cotton in jewel tones.
                        Available in small, medium and large.
                    </div>
                    <br>
                    <div></div>
                    <br>
                    <div class="description-and-price">
                        <span>.</span>
                        <span id="AsymmetricalJewelWrap" class="price AsymmetricalJewelWrap">???</span>
                    </div>
                    <div class="add-to-cart-dropdown">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="JDJV9NA765N6C">
                            <table>
                                <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                                            <option value="Small">Small</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select> </td></tr>
                            </table>
                            <br>
                            <br>
                            <br>
                            <div class="add-to-cart-button">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  end  copy-and-image -->
</div>
        <br>
        <br>

        <!-- BLOCK 7 -->

        <br>
        <br>
     <div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <?php outputCode("shawl_steel_1b", "jpg", "shawl_steel_2b", "jpg", "" ); ?>
            </div>
            <div id="asymmetrical" class="copy-block shawl-text7">
                <br>
                <div class="small-heading-row">
                    Asymetrical Wrap in Steel Grey<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <div>Merino Wool Blend and
                        Boucle Cotton in jewel tones.
                        Available in small, medium and large.
                    </div>
                    <br>
                    <div></div>
                    <br>
                    <div class="description-and-price">
                        <span>.</span>
                        <span id="AsymmetricalJewelWrap" class="price AsymmetricalJewelWrap">???</span>
                    </div>
                    <div class="add-to-cart-dropdown">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="JDJV9NA765N6C">
                            <table>
                                <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                                            <option value="Small">Small</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select> </td></tr>
                            </table>
                            <br>
                            <br>
                            <br>
                            <div class="add-to-cart-button">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  end  copy-and-image -->
</div>
        <br>
        <br>

        <!-- BLOCK 8 -->

        <br>
        <br>
     <div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <?php outputCode("black_merino", "jpg", "black_merino2", "jpg", "" ); ?>
            </div>
            <div id="asymmetrical" class="copy-block shawl-text8">
                <br>
                <div class="small-heading-row">
                    Classic Black
Merino Tencel  Wrap<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <div>Merino Wool Blend and
                        Boucle Cotton in jewel tones.
                        Available in small, medium and large.
                    </div>
                    <br>
                    <div></div>
                    <br>
                    <div class="description-and-price">
                        <span>.</span>
                        <span id="AsymmetricalJewelWrap" class="price AsymmetricalJewelWrap">???</span>
                    </div>
                    <div class="add-to-cart-dropdown">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="JDJV9NA765N6C">
                            <table>
                                <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                                            <option value="Small">Small</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select> </td></tr>
                            </table>
                            <br>
                            <br>
                            <br>
                            <div class="add-to-cart-button">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  end  copy-and-image -->
</div>
        <br>
        <br>

        <!-- BLOCK 9 -->

        <br>
        <br>
     <div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <?php outputCode("wrap_black_cotton1", "jpg", "wrap_black2", "jpg", "" ); ?>
            </div>
            <div id="asymmetrical" class="copy-block shawl-text9">
                <br>
                <div class="small-heading-row">
                    New! 
Black Cotton
Asymetrical Wrap<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <div>Merino Wool Blend and
                        Boucle Cotton in jewel tones.
                        Available in small, medium and large.
                    </div>
                    <br>
                    <div></div>
                    <br>
                    <div class="description-and-price">
                        <span>.</span>
                        <span id="AsymmetricalJewelWrap" class="price AsymmetricalJewelWrap">???</span>
                    </div>
                    <div class="add-to-cart-dropdown">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="JDJV9NA765N6C">
                            <table>
                                <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                                            <option value="Small">Small</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select> </td></tr>
                            </table>
                            <br>
                            <br>
                            <br>
                            <div class="add-to-cart-button">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  end  copy-and-image -->
</div>
        <br>
        <br>

        <!--Block 10-->
        
     <div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <img src="./images/shawlsM_v3.png" alt="picture" >
            </div>
            <div id="asymmetrical" class="copy-block shawl-text5">
                <br>
                <div class="small-heading-row">
                    <div>Open Weave</div>
                    <div>Knotweed Wrap<span class="dev"><?php echo $blockNum++; ?></span></div>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <br>
                    <div>
                        Light and fluid cotton and wool wrap woven
                        in my signature open weave.
                        The white cotton threads are dyed with brown
                        walnut shells and the wool yarn hand dyed
                        with local "knotweed" plants.
                        The natural colors dress up jeans and look
                        terrific with linen.
                    </div>
                    <br>
                    <div class="description-and-price">
                        <span>Available in small, medium and large.</span>
                        <span id="OpenWeaveKnotweedWrap" class="price OpenWeaveKnotweedWrap">???</span>
                    </div>
                    <div class="add-to-cart-dropdown">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="388GQRZHB8VTG">
                            <table>
                                <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                                            <option value="Small">Small </option>
                                            <option value="Medium">Medium </option>
                                            <option value="Large">Large </option>
                                        </select> </td></tr>
                            </table>
                            <br>
                            <br>
                            <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  end  copy-and-image -->
</div>
        <br>

        <!--BLOCK 11 --> 
        
     <div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <?php outputCode("scarf_lobster_red", "jpg", "scarf_red_1b", "jpg", "" ); ?>
            </div>
            <div id="asymmetrical" class="copy-block shawl-text11">
                <br>
                <div class="small-heading-row">
                    <div>Lobster Red Scarf<span class="dev"><?php echo $blockNum++; ?></span></div>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <br>
                    <div>
                        Light and fluid cotton and wool wrap woven
                        in my signature open weave.
                        The white cotton threads are dyed with brown
                        walnut shells and the wool yarn hand dyed
                        with local "knotweed" plants.
                        The natural colors dress up jeans and look
                        terrific with linen.
                    </div>
                    <br>
                    <div class="description-and-price">
                        <span>Available in small, medium and large.</span>
                        <span id="OpenWeaveKnotweedWrap" class="price OpenWeaveKnotweedWrap">???</span>
                    </div>
                    <div class="add-to-cart-dropdown">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="388GQRZHB8VTG">
                            <table>
                                <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                                            <option value="Small">Small </option>
                                            <option value="Medium">Medium </option>
                                            <option value="Large">Large </option>
                                        </select> </td></tr>
                            </table>
                            <br>
                            <br>
                            <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  end  copy-and-image -->
</div>
        <br>


        <!--BLOCK 12--> 

     <div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <img src="./images/scarf_knot.jpg" alt="picture" >
            </div>
            <div id="asymmetrical" class="copy-block shawl-text12">
                <br>
                <div class="small-heading-row">
                    Open Weave Knotweed Scarf<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <div>Soft cotton and wool scarf is hand</div>
                    <div>dyed using local plants. Black </div>
                    <div>walnut shells color the cotton and </div>
                    <div>the wool/tencel blend is dyed using locally gathered knotweed. </div>
                    <div>Each one unique as color varies in shades of warm linen. </div>
                    <br>
                    <div class="description-and-price">
                        <span>Measures 10 x 88 inches</span>
                        <span id="OpenWeaveKnotweedScarf" class="price OpenWeaveKnotweedScarf">???</span>
                    </div>
                    <br>
                    <br>
                    <div class="add-to-cart">
                        <span></span>
                        <span>
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="98MJLASZK2MZY">
                                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </span>
                    </div>
                </div>
            </div>
        </div> <!--  end  copy-and-image -->
</div>

        <!--BLOCK 13--> 

     <div class="shawls-block">
        <div class="copy-and-image">
            <div class="image-block">
                <img src="./images/scarf_sea_glass.jpg" alt="picture" >
            </div>
            <div id="asymmetrical" class="copy-block shawl-text13">
                <br>
                <div class="small-heading-row">
                    Sea Glass Scarf<span class="dev"><?php echo $blockNum++; ?></span>
                </div>
                <div class="spacer20"></div>
                <div class="content-text-block">
                    <div>The greens and blues of beach</div>
                    <div>sea glass are woven together</div>
                    <div>to create this lovely scarf.</div>
                    <div>Cotton/merino rayon boucle. </div>
                    <div>Hand wash.</div>
                    <br>
                    <div class="description-and-price">
                        <span>Measures 12 by 90 inches </span>
                        <span id="SeaGlassScarf" class="price SeaGlassScarf">???</span>
                    </div>
                    <br>
                    <br>
                    <div class="add-to-cart">
                        <span></span>
                        <span>
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="7JKAR8CNBQS5Q">
                                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </span>
                    </div>
                </div>
            </div> <!-- end copy-block -->
        </div> <!--  end  copy-and-image -->
</div>


    </div> <!--  end shawls-container -->


    <!--  ------------------------------------------------------------
    MOBILE SIZE SHAWLS CONTAINER
--------------------------------------------------------------- -->



    <div id="footer"></div>


</body>
</html>
