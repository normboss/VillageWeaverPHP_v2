<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print <<<END
<span class="menu-item"><a href="home.php">Home</a></span>
<div class="dropdown">
    <span class="menu-item"><a href="index.php">Shop</a></span>
    <div class="dropdown-content">
        <a href="shawls.php"><span class="dropdown-item">Shawls</span></a>
        <a href="decor.php"><span class="dropdown-item">Home Decor</span></a>
        <a href="decorGrid.php"><span class="dropdown-item">Home Decor Grid</span></a>
        <a href="https://www.etsy.com/shop/mainevillageweaver"><span class="dropdown-item">Etsy</span></a>
    </div>
</div> 
<span class="menu-item"><a href="about.php">About</a></span>
<span class="menu-item"><a href="contact.php" target="_blank">Contact</a></span>
<span class="menu-item"><a href="subscribe.php" target="_blank">Subscribe</a></span>
<div class="shopping-cart">
END;
require './includes/shoppingcart.php';
echo "</div>";
?>