<section class="cart">
	<h3>Current Order</h3>
	<div class="order">

		<?php if($cart == 0) { ?>
		<div class="item">
			<h4 class="empty">Nothing yet</h4>
		</div>
		<?php } else { 

			for($x = 0; $x <= $cart; $x++){
			?>
			<div class="item">
				<h4 class="product">8 Choclate Chip Brioche Rolls</h4>
				<h6 class="size"><span>Pack Size / Case</span><br>280G / 12</h6>
				<h4 class="price">€16.50</h4>
			</div>
			<?php } ?>
		<?php } ?>
	</div>
	
	<?php if(!$cart == 0) { ?>
		<div class="total">
			<h4><strong>Total (ex VAT)</strong><span>€37.23</span></h4>
		</div>
		<a href="€" class="btn">Checkout</a>
	<?php } ?>

</section>