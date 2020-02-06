  <header>

    <nav class="sticky">
      <span class="menu-item"><a href="home.php">Home</a></span>

      <div class="dropdown">
        <span class="menu-item"><a href="home.php">Shop</a></span>

        <div class="dropdown-content">
          <a href="shawls.php"><span class="dropdown-item">Shawls</span></a>
          <a href="decorGrid.php"><span class="dropdown-item">Home Decor</span></a>
          <a href="https://www.etsy.com/shop/mainevillageweaver"><span class="dropdown-item">Etsy</span></a>
        </div>
      </div>

      <span class="menu-item"><a href="about.php">About</a></span>
      <span class="menu-item"><a href="contact1.php" target="_blank">Contact</a></span>
      <span class="menu-item"><a href="subscribe.php">Subscribe</a></span>

      <div class="menu-item">
        <?php require '../includes/shoppingcart.php' ?>
      </div>

    </nav>
  </header>
