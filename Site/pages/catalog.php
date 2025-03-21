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
				<input class="inputCatalog" placeholder="тут" type="number" name="text" >
				<p>до</p>
				<input class="inputCatalog" placeholder="тут" type="number" name="text" >
				<p>грн</p>
			</div>
		</div>
		<div class="parameters">
			<h3 class="toggle-button">Розмір</h3>
			<div class="parameters-content">
			    <label class="row">
					<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>малий</p>
				</label>
				<label class="row">
					<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>середній</p>
			    </label>
			    <label class="row">
					<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>великий</p>
			    </label>
			</div>
		</div>
		<div class="parameters">
		  <h3 class="toggle-button">Колір</h3>
		  <div class="parameters-content">
		    <label class="row">
		      <input type="checkbox" class="input">
		      <span class="custom-checkbox"></span>
		      <p>червоний</p>
		    </label>
		    <label class="row">
		      <input type="checkbox" class="input">
		      <span class="custom-checkbox"></span>
		      <p>зелений</p>
		    </label>
		    <label class="row">
		      <input type="checkbox" class="input">
		      <span class="custom-checkbox"></span>
		      <p>синій</p>
		    </label>
		  </div>
		</div>
		<div class="parameters">
		  <h3 class="toggle-button">Матеріал</h3>
		  <div class="parameters-content">
		    <label class="row">
		      <input type="checkbox" class="input">
		      <span class="custom-checkbox"></span>
		      <p>дерево</p>
		    </label>
		    <label class="row">
		      <input type="checkbox" class="input">
		      <span class="custom-checkbox"></span>
		      <p>метал</p>
		    </label>
		    <label class="row">
		      <input type="checkbox" class="input">
		      <span class="custom-checkbox"></span>
		      <p>пластик</p>
		    </label>
		  </div>
		</div>
		<script>
			const toggleButtons = document.querySelectorAll('.toggle-button');

			toggleButtons.forEach(button => {
				button.addEventListener('click', () => {
					const currentContent = button.nextElementSibling;
					const isOpen = button.classList.contains('open');

				 	if (isOpen) {
						// Згортання поточного
						currentContent.style.height = currentContent.scrollHeight + 'px';
						requestAnimationFrame(() => {
							currentContent.style.height = '0px';
						});
						button.classList.remove('open');
					} else {
						// Розгортання поточного
						currentContent.style.height = currentContent.scrollHeight + 'px';
						button.classList.add('open');
						currentContent.addEventListener('transitionend', function handler() {
							if (button.classList.contains('open')) {
								currentContent.style.height = 'auto';
							}
							currentContent.removeEventListener('transitionend', handler);
						});
					}
				});
			});
		</script>
	</aside>
	<article class="rightPanel">
		<?php
		for ($i = 0; $i < 30; $i++) {
		    echo '
		    <div class="card">
		        <div class="textBox">
		            <p class="text head">Ethereum</p>
		            <span>Cryptocurrency</span>
		            <p class="text price">1.654,34€</p>
		        </div>
		        <img src="../images/dwarf.png">
		    </div>
		    ';
		}
		?>
		<div class="card">
			<div class="textBox">
				<p class="text head">Ethereum</p>
				<span>Cryptocurrency</span>
				<p class="text price">1.654,34€</p>
			</div>
			<img src="../images/dwarf.png">
		</div>
	</article>
</section>
<?php
	require '../blocks/footer.php';
?>