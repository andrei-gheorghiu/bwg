<?php include('snippets/header.php') ?>

<div id="wrap">

	<main>
		<?php include('components/past-orders.php') ?>
	</main>

	<aside>
		<?php $cart = 0; include('components/cart.php') ?>
		<?php include('components/promotions.php') ?>
	</aside>	

</div>

<?php include('snippets/footer.php') ?>