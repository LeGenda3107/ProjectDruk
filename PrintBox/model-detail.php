<?php $page_title = 'Деталі моделі - PrintBox'; include 'header.php'; ?>

  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
  <style>
    /* Стилі для сторінки товару з PHP версії */
    body {
      overflow-x: hidden;
      overflow-y: hidden;
    }
    
    .commodity {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: calc(100vh - 80px);
      min-height: calc(100vh - 80px);
      padding: 0 1rem;
      gap: 1rem;
      margin-top: 80px;
    }
    
    .commodityInfo {
      width: 18vw;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 30px;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    
    .commodityInfo div {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .commodityName {
      font-size: 2.5rem;
      font-weight: 700;
      color: #181818;
      margin-bottom: 1rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
    
    .commodityAuthor {
      color: #333;
      font-size: 1rem;
      font-weight: 500;
    }
    
    .commodityDescription {
      color: #333;
      font-size: 1rem;
      line-height: 1.6;
      font-weight: 400;
      background: rgba(255, 255, 255, 0.9);
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    
    .commodityModel {
      width: 64vw;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    
    model-viewer {
      width: 100%;
      height: 100%;
      z-index: 10;
      border-radius: 20px;
    }
    
    .commodityPrice {
      width: 18vw;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 50px;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    
    .commodityPrice div {
      display: flex;
      align-items: center;
      gap: 5px;
    }
    
    .printButton {
      width: 100%;
      height: 70px;
      background-color: #121212;
      border: none;
      border-radius: 25px;
      color: white;
      font-size: 24px;
      font-weight: 800;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .printButton:hover {
      background-color: #333;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(18, 18, 18, 0.3);
    }
    
    .sizeButton {
      background-color: transparent;
      border: none;
      color: gray;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    
    .sizeButton input {
      display: none;
    }
    
    .sizeButton label {
      cursor: pointer;
      display: flex;
      padding: 10px;
      justify-content: center;
      align-items: center;
      z-index: 1;
      transition: color 0.3s ease;
    }
    
    .sizeButton label:has(input:checked) {
      color: #121212;
      font-weight: bold;
    }
    
    .sizeButton h1 {
      font-size: 1.5rem;
      margin: 0;
    }
    
    #price {
      font-size: 2.5rem;
      font-weight: 700;
      color: #181818;
      margin: 0;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
    
    #details {
      color: #333;
      font-size: 1rem;
      line-height: 1.6;
      font-weight: 500;
      background: rgba(255, 255, 255, 0.9);
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    
    /* Адаптивність */
    @media (max-width: 1200px) {
      .commodity {
        padding: 0 0.5rem;
        gap: 0.5rem;
      }
      
      .commodityInfo,
      .commodityPrice {
        width: 22vw;
        padding: 1.5rem;
      }
      
      .commodityModel {
        width: 56vw;
      }
      
      .commodityName {
        font-size: 1.8rem;
      }
      
      #price {
        font-size: 1.8rem;
      }
      
      .printButton {
        font-size: 18px;
        height: 55px;
      }
    }
    
    @media (max-width: 768px) {
      .commodity {
        flex-direction: column;
        height: auto;
        min-height: calc(100vh - 80px);
        gap: 1rem;
        padding: 0.5rem;
      }
      
      .commodityInfo,
      .commodityPrice {
        width: 100%;
        height: auto;
        padding: 1.5rem;
      }
      
      .commodityModel {
        width: 100%;
        height: 350px;
        min-height: 350px;
      }
      
      .commodityName {
        font-size: 1.6rem;
      }
      
      #price {
        font-size: 1.6rem;
      }
      
      .printButton {
        font-size: 16px;
        height: 50px;
      }
    }
    
    @media (max-width: 480px) {
      .commodity {
        padding: 0.25rem;
        gap: 0.5rem;
      }
      
      .commodityInfo,
      .commodityPrice {
        padding: 1rem;
      }
      
      .commodityModel {
        height: 300px;
        min-height: 300px;
      }
      
      .commodityName {
        font-size: 1.4rem;
      }
      
      #price {
        font-size: 1.4rem;
      }
      
      .printButton {
        font-size: 14px;
        height: 45px;
      }
    }
    
    /* Сердечко з PHP версії */
    .heart-container {
      --heart-color: #121212;
      position: relative;
      width: 20px;
      height: 20px;
      transition: 0.3s;
    }
    
    .heart-container .checkbox {
      position: absolute;
      width: 100%;
      height: 100%;
      opacity: 0;
      z-index: 20;
      cursor: pointer;
    }
    
    .heart-container .svg-container {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .heart-container .svg-outline, .heart-container .svg-filled {
      fill: var(--heart-color);
      position: absolute;
    }
    
    .heart-container .svg-filled {
      display: none;
      animation: keyframes-svg-filled 1s;
    }
    
    .heart-container .svg-celebrate {
      position: absolute;
      animation: keyframes-svg-celebrate 0.5s;
      animation-fill-mode: forwards;
      display: none;
      stroke: var(--heart-color);
      fill: var(--heart-color);
      stroke-width: 2px;
    }
    
    .heart-container .checkbox:checked~.svg-container .svg-filled {
      display: block
    }
    
    .heart-container .checkbox:checked~.svg-container .svg-celebrate {
      display: block
    }
    
    @keyframes keyframes-svg-filled {
      0% {
        transform: scale(0);
      }
      25% {
        transform: scale(1.2);
      }
      50% {
        transform: scale(1);
        filter: brightness(1.5);
      }
    }
    
    @keyframes keyframes-svg-celebrate {
      0% {
        transform: scale(0);
      }
      50% {
        opacity: 1;
        filter: brightness(1.5);
      }
      100% {
        transform: scale(1.4);
        opacity: 0;
        display: none;
      }
    }
    
    /* Покращення читабельності тексту */
    .parameters p {
      color: #333 !important;
      font-weight: 500;
    }
    
    .leftPanel p {
      color: #333 !important;
      font-weight: 500;
    }
    
    /* Анімація кошика */
    .cart-animation {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 9999;
    }
    
    .flying-item {
      position: absolute;
      width: 60px;
      height: 60px;
      background: #121212;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 24px;
      animation: flyToCart 1s ease-in-out forwards;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }
    
    @keyframes flyToCart {
      0% {
        transform: scale(1) rotate(0deg);
        opacity: 1;
      }
      50% {
        transform: scale(0.5) rotate(180deg);
        opacity: 0.8;
      }
      100% {
        transform: scale(0.1) rotate(360deg);
        opacity: 0;
      }
    }
    
    /* Підсвічування кнопки кошика */
    .cart-btn-highlight {
      animation: cartPulse 0.5s ease-in-out;
    }
    
    @keyframes cartPulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.2); }
      100% { transform: scale(1); }
    }
  </style>
<body class="bg-milk text-gray-900">
  <!-- Model Detail Section -->
  <section class="commodity model-detail-content">
    <article class="commodityInfo model-info">
      <h1 class="commodityName model-detail-title">Низькополігонна кішка</h1>
      <div>
        <p class="commodityAuthor">Автор 3д моделі</p>
        <div title="Like" class="heart-container"> 
          <input id="Give-It-An-Id" class="checkbox" type="checkbox">
          <div class="svg-container">
            <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
              <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
              <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z"></path>
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
      <p class="commodityDescription">
        Чарівна низькополігонна модель кішки, ідеальна для 3D друку. 
        Модель має просту геометрію, що робить її легкою для друку 
        та швидкою в обробці. Підходить для початківців та досвідчених 
        друкарів. Модель включає всі необхідні деталі для якісного друку.
      </p>
    </article>

    <article class="commodityModel model-viewer">
      <model-viewer 
        src="https://modelviewer.dev/shared-assets/models/Astronaut.glb" 
        alt="3D модель кішки" 
        auto-rotate 
        camera-controls
        shadow-intensity="1"
        environment-image="neutral"
        exposure="1"
        shadow-softness="0.5">
      </model-viewer>
    </article>

    <article class="commodityPrice model-price">
      <h1 id="price">25 грн</h1>
      <button class="printButton btn-animate" onclick="addToCart(event, 'Низькополігонна кішка', '🎨')">Надрукувати</button>
      <div class="sizeButton">
        <label>
          <input type="radio" id="value-1" name="value-radio" value="S" checked/>
          <h1>S</h1>
        </label>
        <h1>/</h1>
        <label>
          <input type="radio" id="value-2" name="value-radio" value="M" />
          <h1>M</h1>
        </label>
        <h1>/</h1>
        <label>
          <input type="radio" id="value-3" name="value-radio" value="L" />
          <h1>L</h1>
        </label>
      </div>
      <p id="details">
        Розмір: 5 см<br>
        Вага: 15г<br>
        Час друку: 2:30 год
      </p>
    </article>
  </section>

  <script>
    // Отримання параметрів з URL
    const urlParams = new URLSearchParams(window.location.search);
    const modelId = urlParams.get('id') || '1';

    // Дані моделей
    const models = {
      '1': {
        name: 'Низькополігонна кішка',
        emoji: '🎨',
        creator: '@catmaker',
        downloads: '2.3k',
        description: 'Чарівна низькополігонна кішка, ідеальна для друку та колекціонування. Модель оптимізована для швидкого друку з мінімальним використанням матеріалу.',
        price: 150
      },
      '2': {
        name: 'Підставка для телефону',
        emoji: '📱',
        creator: '@gadgeteer',
        downloads: '1.8k',
        description: 'Елегантна підставка для телефону з унікальним дизайном. Підтримує всі популярні розміри смартфонів та має стабільну основу.',
        price: 200
      },
      '3': {
        name: 'Органайзер для кабелів',
        emoji: '🔌',
        creator: '@tidyup',
        downloads: '3.1k',
        description: 'Практичний органайзер для кабелів, який допоможе підтримувати порядок на робочому столі. Включає кілька слотів різних розмірів.',
        price: 120
      },
      '4': {
        name: 'Міні будинок',
        emoji: '🏠',
        creator: '@architect',
        downloads: '956',
        description: 'Детальний мініатюрний будинок з архітектурними елементами. Ідеальний для колекціонерів та любителів архітектури.',
        price: 300
      },
      '5': {
        name: 'Ігровий контролер',
        emoji: '🎮',
        creator: '@gamer3d',
        downloads: '1.2k',
        description: 'Стильний ігровий контролер з ергономічним дизайном. Підходить для створення власних ігрових аксесуарів.',
        price: 250
      },
      '6': {
        name: 'Квітковий горщик',
        emoji: '🌱',
        creator: '@greenmaker',
        downloads: '2.7k',
        description: 'Красивий квітковий горщик з орнаментами. Має дренажні отвори та підходить для різних видів рослин.',
        price: 180
      }
    };

    // Оновлення контенту сторінки
    function updatePageContent() {
      const model = models[modelId];
      if (!model) return;

      document.getElementById('model-name').textContent = model.name;
      document.getElementById('model-emoji').textContent = model.emoji;
      document.getElementById('model-creator').textContent = model.creator;
      document.getElementById('model-downloads').textContent = model.downloads;
      document.getElementById('model-description').textContent = model.description;
      document.getElementById('model-price').textContent = model.price + ' грн';
      
      // Оновлюємо заголовок сторінки
      document.title = `${model.name} - PrintBox`;
    }

    // Оновлення ціни при зміні розміру
    function updatePrice() {
      const sizeSelect = document.getElementById('size-select');
      const priceElement = document.getElementById('model-price');
      const basePrice = models[modelId].price;
      
      const sizeMultipliers = {
        'small': 0.7,
        'medium': 1.0,
        'large': 1.5,
        'xlarge': 2.0
      };
      
      const multiplier = sizeMultipliers[sizeSelect.value];
      const newPrice = Math.round(basePrice * multiplier);
      priceElement.textContent = newPrice + ' грн';
    }

    // Cart animation functionality
    function addToCart(event, name, emoji) {
      event.preventDefault();
      
      const model = models[modelId];
      
      // Створюємо елемент анімації
      const animationContainer = document.createElement('div');
      animationContainer.className = 'cart-animation';
      
      const flyingItem = document.createElement('div');
      flyingItem.className = 'flying-item';
      flyingItem.textContent = emoji;
      
      // Отримуємо позицію кнопки друку
      const printButton = event.target;
      const buttonRect = printButton.getBoundingClientRect();
      
      // Отримуємо позицію кнопки кошика
      const cartButton = document.querySelector('[aria-label="Кошик"]');
      const cartRect = cartButton.getBoundingClientRect();
      
      // Встановлюємо початкову позицію
      flyingItem.style.left = (buttonRect.left + buttonRect.width / 2 - 30) + 'px';
      flyingItem.style.top = (buttonRect.top + buttonRect.height / 2 - 30) + 'px';
      
      // Додаємо елемент на сторінку
      animationContainer.appendChild(flyingItem);
      document.body.appendChild(animationContainer);
      
      // Анімуємо політ до кошика
      setTimeout(() => {
        flyingItem.style.left = (cartRect.left + cartRect.width / 2 - 30) + 'px';
        flyingItem.style.top = (cartRect.top + cartRect.height / 2 - 30) + 'px';
      }, 50);
      
      // Підсвічуємо кнопку кошика
      setTimeout(() => {
        cartButton.classList.add('cart-btn-highlight');
      }, 500);
      
      // Видаляємо анімацію та перенаправляємо
      setTimeout(() => {
        document.body.removeChild(animationContainer);
        cartButton.classList.remove('cart-btn-highlight');
        window.location.href = 'cart.html';
      }, 1000);
    }

    // Ініціалізація
    document.addEventListener('DOMContentLoaded', function() {
      updatePageContent();
      
      // Додаємо обробник для зміни розміру
      const sizeSelect = document.getElementById('size-select');
      sizeSelect.addEventListener('change', updatePrice);
      
      // Додаємо обробник для кнопки друку
      const printButton = document.querySelector('.print-btn');
      printButton.addEventListener('click', function(event) {
        addToCart(event, models[modelId].name, models[modelId].emoji);
      });
    });
  </script>
</body>
</html>
