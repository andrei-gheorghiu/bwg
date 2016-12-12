<?php $login = true; include('snippets/header.php') ?>

<div id="wrap">

	<main>

		<?php include('components/landing.php') ?>


	</main>


</div>

<div id="popup" class="hide">
	<a href="#" class="close">x</a>
	<div>
		<h2>HHT Orders</h2>
		<p>{{No of Orders}} has been processed containing {{No of Products}} for {{No of Cases}}.</p>
		<div class="orders">
			<p><span>7</span> Ambient</p>
			<p><span>18</span> Chill</p>
			<p><span>3</span> Alcohol</p>
		</div>
		<p>There is a problem with {{No of Errors}} product lines ({{No of Cases}} cases). <a class="toggleErrors" href="#">See More</a>.</p>
		<div class="errors hide">
			<h3>Errors</h3>
			<ul>
				<li>670827, Nomadic Mango Lassi is discontinued, search for a replacement.</li>
				<li>670827, Nomadic Mango Lassi is discontinued, search for a replacement.</li>
				<li>670827, Nomadic Mango Lassi is discontinued, search for a replacement.</li>
				<li>670827, Nomadic Mango Lassi is discontinued, search for a replacement.</li>
				<li>670827, Nomadic Mango Lassi is discontinued, search for a replacement.</li>
				<li>670827, Nomadic Mango Lassi is discontinued, search for a replacement.</li>
				<li>670827, Nomadic Mango Lassi is discontinued, search for a replacement.</li>
				<li>670827, Nomadic Mango Lassi is discontinued, search for a replacement.</li>
			</ul>
		</div>
	</div>


</div>

<?php include('snippets/footer.php') ?>
