<?php include('snippets/header.php') ?>

<div id="wrap">

	<main>
		<?php include('components/favourites.php') ?>
	</main>

	<aside>
		<div class="wrapper">
		<?php $cart = 4; include('components/cart.php') ?>
		<?php include('components/promotions.php') ?>
		</div>
	</aside>	

</div>

<?php include('snippets/footer.php') ?>