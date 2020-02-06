  <header>
    <nav>
      <span class="menu-item"><a href="index.php">Home</a></span>

      <div class="dropdown">
        <span class="menu-item"><a href="index.php">Shop</a></span>

        <div class="dropdown-content">
          <a href="./files/pages/shawls.php"><span class="dropdown-item">Shawls</span></a>
          <a href="./files/pages/decorGrid.php"><span class="dropdown-item">Home Decor</span></a>
          <a href="https://www.etsy.com/shop/mainevillageweaver"><span class="dropdown-item">Etsy</span></a>
        </div>
      </div>

      <span class="menu-item"><a href="./files/pages/about.php">About</a></span>
      <span class="menu-item"><a href="./files/pages/contact1.php" target="_blank">Contact</a></span>
      <span class="menu-item"><a href="./files/pages/subscribe.php">Subscribe</a></span>

      <div class="menu-item">
        <?php require './shoppingcart.php' ?>
      </div>


    </nav>
  </header>
