
<section class="title">
	<h2>Past Orders</h2>
</section>


<ul class="past-master">
	<li>Order No</li>
	<li>Delivery</li>
	<li>Submitted</li>
	<li>No/Cases</li>
	<li>Total</li>
	<li>Order Type</li>
	<li></li>
</ul>

<ul class="past">
	<?php for($y = 0; $y <= 10; $y++) { ?>
	<li class="title">
		<a href="#">
			<span>09876</span>
			<span>12/02/12</span>
			<span>12/02/12</span>
			<span>12/14</span>
			<span>€16.50</span>
			<span>Invoice - 123456</span>
			<span></span>
		</a>
		<?php $count = 3; include('components/product-grid.php') ?>
	</li>
	<?php } ?>	
</ul>

<div class="past-pagination">
	<div>
		<a class="prev" href="#"><</a>
		<ul>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
		</ul>
		<a class="next" href="#">></a>	
	</div>
</div>
