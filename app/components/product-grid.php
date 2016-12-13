<?php
$count = isset($count)? $count:false;
$cart = isset($cart)? $cart:false;
$full = isset($full)? $full:false;
$chill = isset($_GET['chill']) ? $_GET['chill']:false;
?>
<section class="grid">
	<div class="master">
		<div class="name">
			<a href="#" class="active">Name
				<div class="arrows">
					<span class="down"></span>
				</div>
			</a> 
		</div>
		<div class="rank">
			<a href="#">Rank
				<div class="arrows">
					<span class="up"></span>
				</div>
			</a> 
		</div>
		<?php if ($chill) { ?>
		<div class="rank">
			<a href="#">Supplier
				<div class="arrows">
					<span class="up"></span>
				</div>
			</a>
		</div>
		<?php } ?>
		<div class="rank">
			<a href="#">RSP
			<div class="arrows">
				<span class="up"></span>
			</div>
			</a> 
			
		</div>
		<div class="margin">
			<a href="#">Margin
				<div class="arrows">
					<span class="up"></span>
				</div>
			</a> 
		</div>
		<div class="pack">
			<a href="#">Pack/Case
				<div class="arrows">
					<span class="up"></span>
				</div>
			</a> 
		</div>
		<div class="price">
			<a href="#">Price
				<div class="arrows">
					<span class="up"></span>
				</div>
			</a> 
		</div>
		<div class="quantity">Quantity</div>
		<div class="view">
			<a href="store-full.php" class="image <?php if($full) { echo 'active'; } ?>"></a>
			<a href="store.php" class="list  <?php if(!$full) { echo 'active'; } ?>"></a>
		</div>
	</div>	

	<?php for($x = 0; $x <= $count; $x++){ ?>
	<div class="item <?php if($full) { echo 'active'; } ?> <?php if($x == 3) { echo 'incart'; } ?> ">
		<div>
			<div class="name">Wine A. This would be a long title to demonstrate fixing issue 52
				<span><a href="#" class="addFavourite <?php if($x == 5) { echo 'active'; } ?>"></a></span>
			</div>
			<div class="rank">12</div>
			<?php if ($chill) { ?><div class="rank">McDonagh</div> <?php } ?>
			<div class="rank">2.6</div>
			<div class="margin">21%</div>
			<div class="pack">280G/12</div>
			<div class="price">€16.50</div>
			<div class="quantity">
				<button class="down">&minus;</button>
				<input type="text" value="1">
				<button class="up">&plus;</button>
			</div>
			<?php if ($cart) { ?>
			<div class="delete">
				<a href="#"></a>
			</div>
			<?php } else { ?>
			<div class="basket">
				<a href="#"></a>
			</div>
			<?php } ?>
		</div>
		<div class="full">
			<div class="img">
				<img src="http://www.placehold.it/200x120" alt="">
			</div>
			<div class="description"><h3>Description</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea error laborum, velit doloribus delectus<br />
				<?php if ($chill) { ?><strong>Shelf life:</strong> 2 months <?php } ;?>
				</p>
			</div>
			<ul class="codes">
				<li class="ean"><strong>EAN:</strong> 898709870987</li>
				<li class="tuc"><strong>TUC:</strong> 898709870987</li>
				<li class="onOrder"><strong>On Order:</strong> 13</li>
				<li class="promotionStart"><strong>Start date:</strong> 12/12/2016</li>
			</ul>
			<ul class="codes">
				<li class="qty"><strong>Pallet QTY:</strong> 15</li>
				<li class="vat"><strong>VAT:</strong> 13.5</li>
				<li class="increase"><strong>14/11/16</strong></li>
				<li class="promotionEnd"><strong>End date:</strong> 21/12/2016</li>
			</ul>
			<ul class="extra">
				<li class="tags">
					<span class="topseller"></span>
					<span class="ownbrand"></span>
					<span class="newproducts"></span>
				</li>
				<li class="supplier"><strong>Supplier:</strong> McDonagh</li>
				<li class="card"><a class="toggleStockCard" href="#">View Stock Card</a></strong></li>
			</ul>
		</div>
		<div class="stockcard">
			<p>Stock Card Info</p>
		</div>
	</div>	
	<?php }
	$page = isset($_GET['page'])?$_GET['page']:1;
	$hash = '?'. ($chill ? 'chill=true&' :'').'page=';
	$linkClass = ' class="active"';
	?>

	<div class="options">
		<div class="pagination">
			<a class="prev" href="#"><</a>
			<ul>
				<li><a<?= $page == 1 ? $linkClass:'' ;?> href="<?= $hash ;?>1">1</a></li>
				<li><a<?= $page == 2 ? $linkClass:'' ;?> href="<?= $hash ;?>2">2</a></li>
				<li><a<?= $page == 3 ? $linkClass:'' ;?> href="<?= $hash ;?>3">3</a></li>
			</ul>
			<a class="next" href="#">></a>
		</div>
		<div class="actions">
			<a class="add" href="#">Add Selection to Cart</a>
			<a class="delete" href="#">Delete List</a>
		</div>
	</div>

</section>
