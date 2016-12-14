<?php
include('snippets/header.php') ?>

<div id="wrap">

	<main>

		<?php $count = 10; include('components/advanced-search.php') ?>

	</main>

	<aside>
		<div class="wrapper">
			<?php $cart = 'empty'; include('components/cart.php') ?>
			<?php include('components/promotions.php') ?>
		</div>
	</aside>

</div>

<?php include('snippets/footer.php') ?>
