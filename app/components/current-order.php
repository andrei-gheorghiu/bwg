<section class="title">
	<h2>Current Order</h2>
	<div class="steps">
		<a href="#" class="btn active">1</a>
		<a href="#" class="btn">2</a>
		<a href="#" class="btn">3</a>
	</div>
</section>


<section class="checkout">

	<div class="heading">
		<h4>Product Heading</h4>
	</div>	

	<?php $count = 1; $cart = true; include('components/product-grid.php') ?>

	<div class="heading cattotal">
		<h4>Percentage of Total Order: 50% <span>€472.88</span></h4>
	</div>	

	<div class="heading">
		<h4>Product Heading</h4>
	</div>		
	<?php $count = 1; $cart = true; include('components/product-grid.php') ?>

	<div class="heading cattotal">
		<h4>Percentage of Total Order: 50% <span>€472.88</span></h4>
	</div>


	<div class="main-cart">


		<div class="promo">
				
				<ul>
					<li><h3>Promotions</h3></li>
					<li>Percentage Savings <span>13%</span></li>
					<li>Cash Savings <span>€2.56</span></li>
				</ul>
			
			<div class="cart-actions">
				<a href="#" class="btn">Continue Shopping</a>
				<a href="#" class="btn">Erase Cart</a>
				<a href="#" class="btn">Update</a>
			</div>

		</div>

		<div class="total">
			<ul>
				<li><strong>Total:</strong> <span class="price">€37.67</span></li>
				<li>Order Ref: <span class="order">09876</span></li>
				<li>Estimated Delivery: <span class="delivery"> 26/04/17</span></li>
			</ul>
			<a href="#" class="btn">Checkout</a>
		</div>

	</div>
	<div class="after-cart">
		<div class="heading">Options:</div>
		<p>Or <span class="toggle-btn" onclick="toggleCartButton(this)">
				<input type="hidden" name="cartAction" id="cartAction" value="replace" />
				<span class="option" data-value="replace">replace</span>
				<span class="toggle"></span>
				<span class="option hidden" data-value="addTo">add to</span>
			</span> cart from a previous order. <select>
				<option value="1">Order 1</option>
				<option value="2">Order 2</option>
				<option value="3">Order 3</option>
				<option value="4">Order 4</option>
				<option value="5">Order 5</option>
				<option value="6">Order 6</option>
			</select>
			<input type="button" class="cart_opts_go" onclick="javascript: submitForm('cartFrm','prev');" value="Select"></p>
	</div>
</section>
