
<div class="filter">

  <ul class="top">
    <li><a href="#">Promotions</a></li>
    <li><a href="#">Favourites</a></li>
    <li><a class="planogram" href="#">Planogram</a></li>
    <li class="right">
      <a class="showFull" href="#">
        <?php echo file_get_contents("assets/images/arrow.svg"); ?>
      </a>
    </li>
    <li class="right"><a class="applyFilter" href="#">Apply</a></li>
    <li class="right"><a class="resetFilter" href="#">Reset</a></li>
  </ul>
  
  <div class="full hide">
    <ul>
      <li>
        <input type="checkbox" id="c1" name="cc" />
        <label for="c1"><span class="checkbox"></span><span class="topseller"></span>Top Sellers</label>
      </li>
      <li>
        <input type="checkbox" id="c2" name="cc" />
        <label for="c2"><span class="checkbox"></span><span class="newproducts"></span> New Products</label>
      </li>
      <li>
        <input type="checkbox" id="c3" name="cc" />
        <label for="c3"><span class="checkbox"></span><span class="ownbrand"></span>Own Brand</label>
      </li>
    </ul>
    <ul>
      <li>
        <input type="checkbox" id="c4" name="cc" />
        <label for="c4"><span class="checkbox"></span><span class="multibuy"></span>Multi Buy</label>
      </li>

      <li>
        <input type="checkbox" id="c5" name="cc" />
        <label for="c5"><span class="checkbox"></span><span class="handbill"></span>Handbill</label>
      </li>

      <li>
        <input type="checkbox" id="c6" name="cc" />
        <label for="c6"><span class="checkbox"></span><span class="core"></span>Core</label>
      </li>
    </ul>
    <ul>

      <li>
        <input type="checkbox" id="c7" name="cc" />
        <label for="c7"><span class="checkbox"></span><span class="recommended"></span>Recommended</label>
      </li>
      <li>
        <input type="checkbox" id="c8" name="cc" />
        <label for="c8"><span class="checkbox"></span><span class="mixed"></span>Mixed Case</label>
      </li>

      <li>
        <input type="checkbox" id="c9" name="cc" />
        <label for="c9"><span class="checkbox"></span><span class="small"></span>Small Case</label>
      </li>

    </ul>
    <ul>
      <li>
        <input type="checkbox" id="c10" name="cc" />
        <label for="c10"><span class="checkbox"></span><span class="noon"></span>Pre Noon / Meat / Prep</label>
      </li>
      <li>
        <input type="checkbox" id="c11" name="cc" />
        <label for="c11"><span class="checkbox"></span><span class="noon"></span>Pre Noon / Chilled Dairy</label>
      </li>
      <li>
        <input type="checkbox" id="c12" name="cc" />
        <label for="c12"><span class="checkbox"></span><span class="nine"></span>Pre 9am / Fruit &amp; Veg</label>
      </li>
    </ul>
  </div>
  <div class="dropdowns">
    <div>
      <a href="#">Department</a>
      <ul class="hide">
        <li><a href="#">Beverages</a></li>
        <li><a href="#">Confectionary</a></li>
        <li><a href="#">Grocery</a></li>
        <li><a href="#">Health &amp; Beauty</a></li>
        <li><a href="#">Non-food</a></li>
      </ul>
    </div>
    <div class="out">
      <a href="#">Group</a>
      <ul class="hide">
        <li><a href="#">Biscuits</a></li>
        <li><a href="#">Chocolate Treats</a></li>
        <li><a href="#">Crisps &amp; Snacks</a></li>
        <li><a href="#">Multipacks</a></li>
        <li><a href="#">Popcorn</a></li>
      </ul>
    </div>
    <div class="out">
      <a href="#">Category</a>
      <ul class="hide">
        <li><a href="#">Seasonal Biscuits</a></li>
        <li><a href="#">Chocolate Biscuits</a></li>
        <li><a href="#">Christmas Biscuits</a></li>
      </ul>
    </div>    
  </div>
</div>

<div class="planogram hide">
  <img src="http://placehold.it/1000x500" alt="">
</div>