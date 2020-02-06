<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print <<<END
<div class="logo-inline-mobile menu-box">
    <!--Icon-->
    <!--<img src="./images/logo_40_trans.png">-->
</div>

<div class="dropdown menu-box">
    <!--Menu-->
    <a href="index.php">Menu</a>
    <div class="dropdown-content">

        <a href="home.php">Home</a>
<a href="shawls.php"><span class="dropdown-item">Shawls</span></a>
<a href="decor.php"><span class="dropdown-item">Home Decor</span></a>
<a href="decorGrid.php"><span class="dropdown-item">Home Decor Grid</span></a>
<a href="https://www.etsy.com/shop/mainevillageweaver"><span class="dropdown-item">Etsy</span></a>
        <a href="about.php">About</a>
        <a href="contact.php" target="_blank">Contact</a>
        <a href="subscribe.php" target="_blank">Subscribe</a>
    </div>          
</div> <!-- outer drop down -->

<div class="shopping-cart-mobile menu-box">
    <!--Cart-->
END;
require './includes/shoppingcart.php';
echo '</div>';
?>
