<?php
	$title = "commodity";
	include '../blocks/header.php';
?>
<section class="container commodity">
	<article class="commodityInfo">
		<h1 class="commodityName">Назва товару</h1>
		<div>
			<p class="commodityAuthor">Автор 3д моделі</p>
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
				</input>
			</div>
		</div>
		<p class="commodityDescription">Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис Опис </p>
	</article>
	<article class="commodityModel">
		<div class="paralelegram"></div>
		<img src="../images/dwarf.png">
	</article>
	<article class="commodityPrice">
		<h1>100 грн</h1>
		<button class="printButton">Надрукувати</button>
		<div class="sizeButton">
			<label>
				<input type="radio" id="value-1" name="value-radio" value="value-1" />
				<h1>S</h1>
			</label>
			<h1>/</h1>
			<label>
				<input type="radio" id="value-2" name="value-radio" value="value-2" />
				<h1>M</h1>
			</label>
			<h1>/</h1>
			<label>
				<input type="radio" id="value-3" name="value-radio" value="value-3" />
				<h1>L</h1>
			</label>
		</div>
		<p>
			Розмір: 10-10-15см 
			<br>Вага: 32г
			<br>Час друку: 3 год
		</p>
	</article>
	<article class="commodityOrder hidden">
		<h2>Обрати станок</h2>

	    <!-- Випадаюче меню -->
	    <label for="locationSelect">Оберіть локацію:</label>
	    <select id="locationSelect">
	        <option value="location1"><h2>Станок №1 (Київ)</h2></option>
	        <option value="location2"><h2>Станок №2 (Львів)</h2></option>
	        <option value="location3"><h2>Станок №3 (Одеса)</h2></option>
	        <option value="location4"><h2>Станок №4 (Харків)</h2></option>
	    </select>

    <iframe id="mapFrame" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127170.50328819592!2d30.49809760386753!3d50.40203539189674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf1446f85f69%3A0x552c68e90f1b1987!2z0JrRgNC-0L_RgNCw!5e0!3m2!1suk!2sua!4v1710000000000" 
        width="300" height="300" style="border:0;" allowfullscreen="" 
        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </article> 
	<script>
	document.querySelector(".printButton").addEventListener("click", function() {
    document.querySelector(".container").classList.toggle("show-map");
});
	</script>
	<script>
document.getElementById("locationSelect").addEventListener("change", function() {
    var mapFrame = document.getElementById("mapFrame");
    var selectedValue = this.value;

    // Об'єкт з картами для різних локацій
    var locations = {
        "location1": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127170.50328819592!2d30.49809760386753!3d50.40203539189674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf1446f85f69%3A0x552c68e90f1b1987!2z0JrRgNC-0L_RgNCw!5e0!3m2!1suk!2sua!4v1710000000000", // Київ
        "location2": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126786.24964487045!2d24.0071409383735!3d49.83267648553214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add72a5b3f5df%3A0x55d14e8978b42cfc!2z0JbQuNGC0L7QutGB0LrQuNC5!5e0!3m2!1suk!2sua!4v1710000000001", // Львів
        "location3": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125269.07823267484!2d30.6360787827086!3d46.48252609038825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6310f9b6d7159%3A0x7b4ef3fcd4b83b1e!2z0JjQkdCd0JzQmNCh0KLQoA!5e0!3m2!1suk!2sua!4v1710000000002", // Одеса
        "location4": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124583.0561441557!2d36.15026007084537!3d49.9935001627286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a13be3e2a2c3%3A0x552c68e90f1b1987!2z0KHRg9C80YHQutCw!5e0!3m2!1suk!2sua!4v1710000000003" // Харків
    };

    // Оновлення карти
    mapFrame.src = locations[selectedValue];
});
</script>
	<a class="arrow" href="catalog.php"><img src="../images/arrow.svg"></a>
</section>

<?php
	require '../blocks/footer.php';
?>