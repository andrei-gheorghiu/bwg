<?php include('snippets/header.php') ?>
<div id="wrap">
	<main>
		<?php include('components/filter.php') ?>
		<?php 
		$count = 40; include('components/product-grid.php') ?>
		<?php include('components/current-order.php') ?>
		<?php include('components/favourites.php') ?>
		<?php include('components/contact.php') ?>
	</main>
	<aside>
		<div class="wrapper">
		<?php $cart = 'empty'; include('components/cart.php') ?>
		<?php $cart = 'not empty'; include('components/cart.php') ?>
		<?php include('components/promotions.php') ?>
		</div>
	</aside>	
</div>

<?php include('snippets/footer.php') ?>
