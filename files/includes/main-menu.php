<header id="menu-header">

    <nav class="main-full">
        <span class="menu-item"><a href="home.php">Home</a></span>
        <div class="dropdown">
            <span class="menu-item"><a href="home.php">Shop</a></span>
            <div class="dropdown-content">
                <a href="shawls.php"><span class="dropdown-item">Shawls</span></a>
                <a href="decor.php"><span class="dropdown-item">Home Decor</span></a>
                <a href="https://www.etsy.com/shop/mainevillageweaver"><span class="dropdown-item">Etsy</span></a>
            </div>
        </div>

        <span class="menu-item"><a href="about.php">About</a></span>
        <span class="menu-item"><a href="contact.php" target="_blank">Contact</a></span>
        <span class="menu-item"><a href="subscribe.php">Subscribe</a></span>
        <div class="menu-item shopping-cart">
            <?php
            require '../includes/shoppingcart.php'
            ?>
        </div>
    </nav>

    <!-- <div class="main-full">
        <ul id="nav2x">
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Shopping</a>
                <ul>
                    <li><a href="shawls.php">Shawls & Wraps</a></li>
                    <li><a href="decor2xmenu.php">Home Decor »</a>
                        <ul>
                            <li><a href="decor2xmenu.php#rug-label">Hand Woven Rugs</a></li>
                            <li><a href="decor2xmenu.php#curtain-label">Window Treatmemts</a></li>
                            <li><a href="decor2xmenu.php#hardware-label">Curtain Hardware</a></li>
                            <li><a href="decor2xmenu.php#throws-label">Hand Woven Throws</a></li>
                            <li><a href="decor2xmenu.php#decorative-label">Decorative Touches</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop Etsy</a></li>
                </ul>
            </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Subscribe</a></li>
        </ul>
    </div>
 -->

    <div id="top-of-page"></div>

    <nav class="main-mobile">

        <div class="dropdown">
            <span class="menu-item"><a href="home.php">Menu</a></span>

            <div class="dropdown-content">
                <a href="home.php"><span class="dropdown-item">Home</span></a>
                <a href="shawls.php"><span class="dropdown-item">Shawls</span></a>
                <a href="decor.php"><span class="dropdown-item">Home Decor</span></a>
                <a href="https://www.etsy.com/shop/mainevillageweaver"><span class="dropdown-item">Etsy</span></a>
                <a href="about.php"><span class="dropdown-item">About</span></a>
                <a href="contact.php" target="_blank"><span class="dropdown-item">Contact</span></a>
                <a href="subscribe.php"><span class="dropdown-item">Subscribe</span></a>
            </div>
        </div>
`
        <div class="menu-item">
            <?php
            require '../includes/shoppingcart.php'
            ?>
        </div>

    </nav>

    <script>
        window.onscroll = function() {
            scrollFunction()
        };
        var header = document.getElementById("header-id");
        var sticky = header.offsetTop;


        function scrollFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

    <?php
    $blockNum = 1;
    // $mobileBlockNum = 1;
    $add2cartAltStyle = 'style="font-weight: bold; font-size: 16px; border: 0px solid black; padding: 0px;"';

    function outputCode($f1, $e1, $f2, $e2)
    {
        echo '<img id="' . $f1 . '" src="../images/' . $f1 . '.' . $e1 . '" alt="">';
        echo '<img id="' . $f2 . '" src="../images/' . $f2 . '.' . $e2 . '" alt="">';
        echo '<div class = "click-for-closeup">Click image for alternate view</div>';
        echo '<script>';
        echo 'document.getElementById( "' . $f2 . '" ).style.display = "none";';

        echo $f1 . '.onclick = function() {';
        echo 'document.getElementById( "' . $f1 . '").style.display = "none";';
        echo 'document.getElementById( "' . $f2 . '").style.display = "inline-block";';
        echo '};';

        echo $f2 . '.onclick = function() {';
        echo 'document.getElementById( "' . $f2 . '").style.display = "none";';
        echo 'document.getElementById( "' . $f1 . '").style.display = "inline";';
        echo '};';
        echo '</script>';
    }

    function outputSpinCode($f1, $e1, $f2, $e2)
    {
        echo '<div class="card">';
        echo '<div id="' . $f1 . '" class="card__side card__side--front">';
        echo '<img src="../images/' . $f1 . '.' . $e1 . '" alt="">';
        echo '</div>';

        echo '<div id="' . $f2 . '" class="card__side card__side--back">';
        echo '<img src="../images/' . $f2 . '.' . $e2 . '" alt="">';
        echo '</div>';
        echo '</div>';

        echo '<script>';

        // echo 'document.getElementById( "' . $f1 . '" ).onclick = function() { fontClick() };';
        // echo 'document.getElementById( "' . $f2 . '" ).onclick = function() { backClick() };';

        echo $f1 . '.onclick = function() {';
        echo 'var front = document.getElementById("' . $f1 . '");';
        echo 'front.style.transform = "rotateY(-180deg)";';
        echo 'front.style.transition = "transform 1s";';

        echo 'var back = document.getElementById("' . $f2 . '");';
        echo 'back.style.transform = "rotateY(0deg)";';
        echo 'back.style.transition = "transform 1s";';
        echo '};';

        echo $f2 . '.onclick = function() {';
        echo 'var front = document.getElementById("' . $f1 . '");';
        echo 'front.style.transform = "rotateY(0deg)";';
        echo 'front.style.transition = "transform 1s";';

        echo 'var back = document.getElementById("' . $f2 . '");';
        echo 'back.style.transform = "rotateY(180deg)";';
        echo 'back.style.transition = "transform 1s";';
        echo '};';
        echo '</script>';
    }


    ?>
</header>