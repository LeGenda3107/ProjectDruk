<?php
	$title = "catalog";
	include '../blocks/header.php';
?>
<section class="container">
	<aside class="leftPanel">
		<h1>3Д моделі</h1>
		<div class="parameters">
			<h3>Ціна</h3>
			<div class="row">
				<p>від</p>
				<input type="" name="">
				<p>до</p>
				<input type="" name="">
				<p>грн</p>
			</div>
		</div>
		<div class="parameters">
			<h3>Ціна</h3>
			<div class="row">
				<input type="checkbox">
				<p>малий</p>
			</div>
			<div class="row">
				<input type="checkbox">
				<p>середній</p>
			</div>
			<div class="row">
				<input type="checkbox">
				<p>великий</p>
			</div>
		</div>
	</aside>
	<article class="rightPanel">
	</article>
</section>
<?php
	require '../blocks/footer.php';
?>