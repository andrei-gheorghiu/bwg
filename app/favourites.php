<?php include('snippets/header.php') ?>

<div id="wrap">

	<main>
		<?php include('components/favourites.php') ?>
	</main>

	<aside>
		<?php $cart = 4; include('components/cart.php') ?>
		<?php include('components/promotions.php') ?>
	</aside>	

</div>

<?php include('snippets/footer.php') ?>