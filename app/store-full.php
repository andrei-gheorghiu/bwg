<?php
include('snippets/header.php') ?>

<div id="wrap">

	<main>

		<?php include('components/filter.php') ?>

		<?php $count = 50; $full = true; include('components/product-grid.php') ?>

	</main>

	<aside>
		<div class="wrapper">
			<?php $cart = 'empty'; include('components/cart.php') ?>
			<?php include('components/promotions.php') ?>
		</div>

	</aside>	

</div>

<?php include('snippets/footer.php') ?>
