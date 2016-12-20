<?php
$count = isset($count)? $count:false;
$cart = isset($cart)? $cart:false;
$full = isset($full)? $full:false;
$chill = isset($_GET['chill']) ? $_GET['chill']:false;
?>
<section class="title">
	<h2>Custom search</h2>
</section>
<div class="page">
	<div class="table">
		<div class="tr">
			<span class="td"></span>
			<span class="td"><strong>Search tips</strong></span>
		</div>
		<div class="tr">
			<span class="td">
				<select name="supplier" id="supplier">
					<option>Supplier</option>
					<option value="1">First supplier</option>
					<option value="2">Second supplier</option>
					<option value="3">Third supplier</option>
				</select>
			</span>
			<span class="td">
				<label for="supplier" class="small">Select a supplier here</label>
			</span>
		</div>
		<div class="tr">
			<span class="td">
				<select name="brand" id="brand">
					<option>Brand</option>
					<option value="1">First brand</option>
					<option value="2">Second brand</option>
					<option value="3">Third brand</option>
				</select>
			</span>
			<span class="td">
				<label for="brand" class="small">Select a brand here</label>
			</span>
		</div>
		<div class="tr">
			<span class="td">
				<input type="text" placeholder="Search term(s)" />
				<div class="radio-group">
					<label for="on-promotion">On promotion: </label>
					<span class="toggleSwitch">
						<input type="checkbox" name="on-promotion" />
						<div class="toggle" data-on="ON" data-off="OFF"></div>
					</span>
				</div>
			</span>
			<span class="td">
				<span class="small">
					<dl>
						<dt>Regular search</dt>
						<dd>Type all search words you want to search: <code>yogurt strawberry apple</code></dd>
						<dt>Phrase match</dt>
						<dd>Put exact words or phrases in quotes:<code>"Diet Coke"</code></dd>
						<dt>Broad match</dt>
						<dd>Type OR between all the terms you want: <code>small OR mini</code></dd>
						<dt>Negative match</dt>
						<dd>Exclude results by placing a minus sign before search terms: <code>-"low fat"</code></dd>
					</dl>
				</span>
			</span>
		</div>
		<div class="tr">
			<span class="td">
				<input type="submit" class="btn" value="Search">
			</span>
			<span class="td search-links">
				<a class="btn" href="javascript:saveSearch();">Save this search as</a>
					<input class="input" type="text" name="savename" id="savename">
				<a href="javascript:loadSearch();">Load saved search</a>
					<select name="loadname" id="loadname">
						<option value="Load Saved...">Load Saved...</option>
						<option value="7up">7up</option>
						<option value="testsave">testsave</option>
						<option value="xmas">xmas</option>
						<option value="xmas promotions">xmas promotions</option>
					</select>
			</span>
		</div>
	</div>
</div>
