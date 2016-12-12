<header>
  <div>
    <div class="logo">
      <a href="landing.php">Shoplink</a>
    </div>

    <div class="search <?php if($login) { echo 'invisible'; } ?>">

      <input type="text" class="searchbox" placeholder="Search Products">

      <input type="submit" value="Search">

    </div>
    
    <nav class="<?php if($login) { echo 'invisible'; } ?>">

      <div class="home">
        <a href="landing.php">
          <?php echo file_get_contents("assets/images/home.svg"); ?>
        </a>
      </div>
      <div class="favourites">
        <a href="favourites.php">
          <?php echo file_get_contents("assets/images/heart.svg"); ?>
        </a>
      </div>

      <div class="basket">
        <a href="current.php">
          <?php echo file_get_contents("assets/images/basket.svg"); ?>
        </a>
      </div>
            
      <div class="settings">
        <a href="#settings">
          <?php echo file_get_contents("assets/images/cog.svg"); ?>
        </a>
        <ul class="closed">
          <li><a href="current.php">Current Order</a></li>
          <li><a href="past.php">Past Orders</a></li>
          <li><a href="hht.php">HHT Orders</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="login.php">Log Out</a></li>
          <li><a href="contact.php">Help</a></li>
          <li class="user">
            <a href="#">Joe Bloggs <span>00000</span></a>
          </li>
        </ul>
      </div>
    
    </nav>
  </div>
</header>