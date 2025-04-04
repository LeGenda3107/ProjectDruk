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
			<h3 class="toggle-button">Тип</h3>
			<div class="parameters-content">
				<label class="row">
					<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>брелок</p>
				</label>
				<label class="row">
					<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>статуетка</p>
				</label>
				<label class="row">
					<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>головломка</p>
				</label>
			</div>
		</div>
		<div class="parameters">
			<h3 class="toggle-button">Категорії</h3>
			<div class="parameters-content">
				<label class="row">
					<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>брелок</p>
				</label>
				<label class="row">
					<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>статуетка</p>
				</label>
				<label class="row">
			 		<input type="checkbox" class="input">
					<span class="custom-checkbox"></span>
					<p>головломка</p>
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
			<div class="card" id="myCard">
			<div class="textBox">
				<p class="text head">Dwarf</p>
				<span>Author of model</span>
				<p class="text price">100 грн</p>
				<div title="Like" class="heart-container"> 
		            <input id="Give-It-An-Id" class="checkbox" type="checkbox">
		            <div class="svg-container">
		                <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
		                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
		                    </path>
		                </svg>
		                <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
		                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
		                    </path>
		                </svg>
		                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" class="svg-celebrate">
		                    <polygon points="10,10 20,20"></polygon>
		                    <polygon points="10,50 20,50"></polygon>
		                    <polygon points="20,80 30,70"></polygon>
		                    <polygon points="90,10 80,20"></polygon>
		                    <polygon points="90,50 80,50"></polygon>
		                    <polygon points="80,80 70,70"></polygon>
		                </svg>
		            </div>
		        </div>
			</div>
			<img src="../images/dwarf.png">
		</div>
		';
		}
		?>
		<div class="card" id="myCard">
			<div class="textBox">
				<p class="text head">Dwarf</p>
				<span>Author of model</span>
				<p class="text price">100 грн</p>
				<div title="Like" class="heart-container"> 
		            <input id="Give-It-An-Id" class="checkbox" type="checkbox">
		            <div class="svg-container">
		                <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
		                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
		                    </path>
		                </svg>
		                <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
		                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
		                    </path>
		                </svg>
		                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" class="svg-celebrate">
		                    <polygon points="10,10 20,20"></polygon>
		                    <polygon points="10,50 20,50"></polygon>
		                    <polygon points="20,80 30,70"></polygon>
		                    <polygon points="90,10 80,20"></polygon>
		                    <polygon points="90,50 80,50"></polygon>
		                    <polygon points="80,80 70,70"></polygon>
		                </svg>
		            </div>
		        </div>
			</div>
			<img src="../images/dwarf.png">
		</div>
		<script>
		  document.getElementById('myCard').addEventListener('click', function () {
		    window.location.href = 'commodity.php';
		  });

		  document.querySelector('.checkbox').addEventListener('click', function (e) {
		    e.stopPropagation();
		    // Тут виконуй логіку лайку
		    console.log("Лайкнуто!");
		  });
		</script>
	</article>
</section>
<?php
	require '../blocks/footer.php';
?>