
<section class="title">
		<h2>HHT Orders</h2>
</section>


<ul class="past-master">
	<li>Date / Time</li>
	<li>Summary</li>
	<li></li>
</ul>

<ul class="past">
	<?php for($y = 0; $y <= 10; $y++) { ?>
	<li class="title">
		<a href="#">
			<span>Nov 21, 2016 12:48</span>
			<span>3 Ambient, 17 Chill, 5 Alcohol – 1 Error</span>
			<span></span>
		</a>
		<section class="summary">
			<div>
				<p>{{No of Orders}} has been processed containing {{No of Products}} for {{No of Cases}}.</p>
				<div class="orders">
					<p><span>7</span> Ambient</p>
					<p><span>18</span> Chill</p>
					<p><span>3</span> Alcohol</p>
				</div>
			</div>
			<div>
				<p>There is a problem with {{No of Errors}} product lines ({{No of Cases}} cases).</p>
				<div class="errors">
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
		</section>
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
