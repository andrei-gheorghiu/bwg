<?php include('snippets/header.php') ?>

<div id="wrap">

	<main>

		<?php include('components/filter.php') ?>

		<?php $count = 50; include('components/product-grid.php') ?>

	</main>

	<aside>

		<?php $cart = 'empty'; include('components/cart.php') ?>

		<?php include('components/promotions.php') ?>

	</aside>	

</div>

<?php include('snippets/footer.php') ?>
