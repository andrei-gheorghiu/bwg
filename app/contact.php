<?php include('snippets/header.php') ?>
<div id="wrap">
	<main>
		<?php include('components/contact.php') ?>
	</main>
	<aside>
		<div class="wrapper">
			<?php $cart = 10; include('components/cart.php') ?>
			<?php include('components/promotions.php') ?>
		</div>
	</aside>
</div>
<?php include('snippets/footer.php') ?>
