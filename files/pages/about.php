<?php
if (!session_id()) session_start();
$_SESSION['pagename'] = "about";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - Maine Village Weaver</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/about.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function() {
            // $("#banner").load("../includes/banner.php");
            // $("#main-menu").load("../includes/main-menu.php");
            // $("#footer").load("footer.php");

        });
    </script>

</head>

<body id="about">

    <div id="header-id">
        <div class="banner">
            <span class="text1">Maine Village Weaver</span><span class="text2">About</span>
        </div>

        <div id="main-menu" class="home"></div>
        <?php
        require '../includes/main-menu.php';
        ?>
    </div>

    <div id="about-image"></div>

    <div class="statement-parent">
        <div class="statement">
            <i>
                The colors of my work reflect the beautiful Maine coast
                where I gather local plants for hand dying from
                fields and gardens."
            </i>
        </div>
        <div class="signature">Phyllis Leck</div>
    </div>

    <!-- ************************************************************
            ABOUT CONTAINER - full size
      ************************************************************
    -->

    <div class="about-container">
        <div class="about-block">
            <!--<h2>Block 1</h2>-->
            <div id="block1" class="copy-and-image">
                <div class="image-block">
                    <img src="../images/door_open.jpg" alt="Front of Phyllis's shop with flowers hanging from wrought iron bracket.">
                </div>
                <div class="copy-block">
                    <!--            <div class="small-heading-row">
                          <p>Weaving Studio and Shop</p>
                        </div>-->
                    <div class="small-heading-row about-mobile-text1">
                        Weaving Studio and Shop
                    </div>
                    <div class="content-text-block about-copy-block">
                        <div class="small-heading-row">
                        </div>
                        <div>
                            <p>
                                The studio is located in a beautiful 1790's Federal home,
                                on the coastal Pemaquid pennisula. The weaving
                                studio and shop is cozy in the winter and cool in
                                the summer. I enjoy meeting customers as they drop
                                in during the day.
                            </p>
                            <p>
                                It is my pleasure to create custom items. I work with
                                decorators home owners on individual projects.
                            </p>
                            <p>
                                Contact me to place custom orders. Half payment
                                is required when placing your order with the balance
                                due plus 10% shipping upon completion. Maine
                                residents add 5.5% Maine sales.
                            </p>
                        </div>
                        <!--<div>-->
                        <div>
                            Maine Village Weaver has an <a href="https://www.etsy.com/shop/MaineVillageWeaver">Etsy Shop</a>
                        </div>
                        <div>
                            My work is also available at these these selected shops:
                            <ul>
                                <li><span><a href="https://www.perennialstyle.com">Perennial Style Sturbridge</a> 138 Green St. Worcester, Massachusettes</span></li>
                                <li><span><a href="https://www.vennandmaker.com">Venn and Maker</a> 75 Washington Street Portland, Maine</span></li>
                                <li><span>Just a Little Bit Country Waukesha, Wisconsin</span></li>
                                <li><span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end block1, copy-and-image -->
        </div> <!-- end about-block -->

        <div class="about-block">
            <!--<h2>Block 2</h2>-->
            <div id="block2" class="copy-and-image">
                <div class="image-block">
                    <img src="../images/loom.jpg" alt="Inside Phyllis's well lighted shop showing her loom.">
                    <div class="content-text-block">
                        <div>
                            <p>The early patterns are the foundation of my knowledge
                                and techniques. I still love weaving the classics and now
                                have branched out with my own personal style.</p>
                        </div>
                    </div>
                </div>
                <div class="copy-block">
                    <div class="small-heading-row about-mobile-text1">
                        Weaving is my passion
                    </div>
                    <div class="spacer20"></div>
                    <div class="content-text-block">
                        <div>
                            In the late 1970’s, I was a young mother living on an
                            island north of Seattle, Washington. My husband, Andy,
                            was in Alaska fishing for months at a time. Long stretches
                            of time and solitude allowed me to focus on my weaving.
                        </div>
                        <div class="spacer20"></div>
                        <div>
                            After moving back east, Andy began his career as a full time
                            blacksmith. We traveled together to craft shows, featuring
                            early Americana. My work centered on textiles, with Early
                            American inspired patterns. It was a rich time in our lives,
                            meeting other craftspeople and exchanging wares and
                            stories. We were featured in the magazines
                            "Colonial Homes","Country Living" and "Country Home".
                        </div>
                        <br>
                        <div class="about-block2-image">
                            <img src="../images/shuttle_2.jpg" alt="Shuttle used in weaving.">
                        </div>
                    </div> <!-- end content-text-block -->
                </div> <!-- end copy-block -->
            </div> <!-- end copy-and-image -->
        </div> <!-- end about-block -->


        <!-- BLOCK 3 -->

        <div class="about-block">
            <!--<h1>Block 3</h1>-->
            <div id="block2" class="copy-and-image">
                <div class="image-block">
                    <img src="../images/phyllis_weavingshuttle.png" alt="">
                    Phyllis at a 16 harness loom
                </div>
                <div class="copy-block">
                    <div class="small-heading-row about-mobile-text1">
                        <h4>Testimonial</h4>
                    </div>
                    <div class="content-text-block">
                        <div>
                            &quot;Phyllis! The rug is BEAUTIFUL! I will be admiring it, but never walking on it
                            for a very long time. It's too special to ever step on it!
                            <span class="two-spaces-after-period"></span>
                            Unfortunately it makes the upstairs hallway look a little shabby.
                            <span class="two-spaces-after-period"></span>I may have to repaint the walls soon.
                            <span class="two-spaces-after-period"></span>Thank you!
                            <span class="two-spaces-after-period"></span>Thank you for your wonderful skills!
                            <span class="two-spaces-after-period"></span>I LOVE this rug!&quot;
                        </div>
                        <div class="move-right">
                            Kathy
                        </div>
                        <br>

                    </div> <!-- end content-text-block -->
                </div> <!-- end copy-block -->
            </div> <!-- end copy-and-image -->
        </div> <!-- end about-block -->


        <!-- BLOCK 4 -->

        <div class="about-block">
            <!--<h1>Block 4</h1>-->
            <div id="block2" class="copy-and-image">
                <div class="image-block">
                    <img src="../images/andy_phyllis.jpg" alt="Closeup of Andy and Phyllis Leck.">
                    Andy and Phyllis Leck
                </div>
                <div class="copy-block">
                    <div class="small-heading-row about-mobile-text1">
                        <h4>A creative family</h4>
                    </div>
                    <div class="content-text-block">
                        <div>
                            My husband, Andy Leck, operates the
                            <a href="http://www.scottishwroughtiron.com">Scottish Wrought Iron</a> blacksmith shop,
                            just steps away from my weaving studio. Our son <a href="https://www.zackaryaleck.com">Zackarya</a> practices the blacksmith
                            art in Alaska and our daughter, Annie, established the <a href="https://www.barndoorbakingcompany.com">Barn Door Baking Company</a> in Damariscotta, Maine.
                        </div>
                    </div> <!-- end content-text-block -->
                </div> <!-- end copy-block -->
            </div> <!-- end copy-and-image -->
        </div> <!-- end about-block -->
    </div> <!-- end about-container -->

    <!-- **********************************************************************
            ABOUT CONTAINER - mobile size
      ********************************************************************** -->
    <div class="about-container-mobile">

        <div class="about-mobile-block">
            <br>
            <h3>Weaving Studio and Shop</h3>
            <!--<div class="about-mobile-block1a">-->
            <div class="about-mobile-text1 about-copy-block">
                <div>The studio is located in a beautiful 1790's Federal
                    home, on the coastal Pemaquid pennisula. The
                    weaving studio and shop is cozy in the winter
                    and cool in the summer.</div>
                <p>
                    I enjoy meeting customers as they drop in during the day.
                </p>
                <p>
                    It is my pleasure to create custom items. I work with
                    decorators and home owners on individual projects.
                </p>
                <p>
                    Contact me to place custom orders. Half payment
                    is required when placing your order with the balance
                    due plus 10% shipping upon completion. Maine
                    residents add 5.5% Maine sales.
                </P>
            </div>
            <div class="about-mobile-text1 about-copy-block">
                <img src="../images/door_open_mobile.jpg" alt="">
            </div>
            <br>
            <div class="about-mobile-text1 about-copy-block">
                <span>The Maine Village Weaver has an <a href="https://www.etsy.com/shop/MaineVillageWeaver">Etsy Shop</a>.</span>
                <br>
                My work is also available at these these selected shops:

                <ul>
                    <li><span><a href="https://www.perennialstyle.com">Perennial Style Sturbridge</a> 138 Green St. Worcester, Massachusettes</span></li>
                    <li><span><a href="https://www.vennandmaker.com">Venn and Maker</a> 75 Washington Street Portland, Maine</span></li>
                    <li><span>Just a Little Bit Country Waukesha, Wisconsin</span></li>
                    <!--<li><span></span></li>-->
                </ul>
            </div>
            <!--</div>  end about-mobile-block1 -->
        </div> <!-- end about-mobile-block -->
        <div class="spacer"></div>
        <!--
          BLOCK 2 mobile
      -->
        <div class="about-mobile-block">
            <br>
            <!--<div class="about-mobile-block2">-->
            <h3>Weaving is my passion</h3>
            <div class="about-mobile-text1">
                In the late 1970’s, I was a young mother living on an
                island north of Seattle, Washington. My husband, Andy,
                was in Alaska fishing for months at a time. Long stretches
                of time and solitude allowed me to focus on my weaving.
            </div>
            <br>
            <div class="about-mobile-text1">
                <img src="../images/loom_mobile.jpg" alt="">
            </div>
            <br>
            <div class="about-mobile-text1">
                After moving back east, Andy began his career as a full time
                blacksmith. We traveled together to craft shows, featuring
                early Americana. My work centered on textiles, with Early
                American inspired patterns. It was a rich time in our lives,
                meeting other craftspeople and exchanging wares and
                stories. We were featured in the magazines
                "Colonial Homes","Country Living" and "Country Home".
            </div>
            <div class="about-mobile-text1">
                <p>
                    The early patterns are the foundation of my knowledge
                    and techniques. I still love
                    weaving the classics and now
                    have developed my own
                    personal style.
                </p>
            </div>
            <div class="about-block2-image">
                <img src="../images/shuttle_2.jpg" alt="">
            </div>
        </div> <!-- end about-mobile-block -->
        <div class="spacer"></div>

        <!--
          BLOCK 3 mobile
      -->
        <div class="about-mobile-block">
            <div class="about-mobile-text1">
                <h3>Testimonial</h3>
            </div>
            <div class="about-mobile-text1 about-copy-block">
                <div>
                    &quot;Phyllis! The rug is BEAUTIFUL! I will be admiring it, but never walking on it
                    for a very long time. It's too special to ever step on it! Unfortunately it makes
                    the upstairs hallway look a little shabby. I may have to repaint the walls soon.
                    Thank you! Thank you for your wonderful skills! I&nbsp;LOVE&nbsp;this&nbsp;rug!&quot;
                    <!-- <br> -->
                </div>
                <div class="move-right">
                    Kathy
                </div>
                <br>
            </div>
            <img src="../images/phyllis_weavingshuttle.png" alt="">
            Phyllis at a 16 harness loom
            <br>
        </div> <!-- end about-mobile-block -->

        <!--
          BLOCK 4 mobile
      -->
        <div class="about-mobile-block">
            <div class="about-mobile-text1">
                <h3>A Creative Family</h3>
            </div>
            <div class="about-mobile-text1 about-copy-block">
                <div>
                    My husband, Andy Leck, operates the <a href="http://www.scottishwroughtiron.com">Scottish Wrought Iron </a>
                    blacksmith shop, steps away from my weaving studio.<br>
                    Our son <a href="https://www.zackaryaleck.com">Zackarya</a> practices the blacksmith
                    art in Alaska and our daughter, Annie, established the
                    <a href="https://www.barndoorbakingcompany.com">Barn Door Baking Company, </a>
                    in Damariscotta, Maine.
                </div>
            </div>
            <img src="../images/andy_phyllis_mobile.jpg" alt="">
            Andy and Phyllis Leck
            <br>
        </div>
    </div>


    <div id="footer"></div>
    <?php
    require '../includes/footer1.php';
    ?>
</body>

</html>