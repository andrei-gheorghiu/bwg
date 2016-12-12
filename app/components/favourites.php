<section class="title">
	<h2>My Lists</h2>
	<form class="newList">
		<input type="text" class="newList">
		<input type="submit" value="New List" href="#" class="btn">
	</form>
</section>


<ul class="favourites">
	<li class="title">
		<a href="#">Monday Orders</a>
		<?php $count = 3; include('components/product-grid.php') ?>
	</li>
	<li class="title">
		<a href="#">Tuesday Orders</a>
		<?php $count = 10; include('components/product-grid.php') ?>	
	</li>
	<li class="title">
		<a href="#">Friday Orders</a>
		<?php $count = 3; include('components/product-grid.php') ?>
	</li>
	<li class="title">
		<a href="#">Impulse Buys</a>
		<?php $count = 3; include('components/product-grid.php') ?>
	</li>
	<li class="title">
		<a href="#">Christmas Stock</a>
		<?php $count = 3; include('components/product-grid.php') ?>
	</li>
</ul>

