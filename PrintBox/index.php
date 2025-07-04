<?php $page_title = 'PrintBox - Преміум платформа 3D друку'; include 'header.php'; ?>

  <style>
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



  <!-- Centralized Hero Section -->
  <section class="hero-modern hero-section">
    <div class="hero-center-group">
      <h1 class="hero-title">Знайдіть та надрукуйте 3D моделі миттєво</h1>
      <p class="hero-subtitle">Відкрийте тисячі високоякісних 3D моделей від талановитих дизайнерів по всьому світу. Друкуйте з впевненістю, використовуючи нашу кураторську колекцію.</p>
      <form class="hero-search-form" autocomplete="off">
        <input type="text" class="hero-search-input form-input" placeholder="Пошук 3D моделей, дизайнерів або тегів..." />
        <button type="submit" class="hero-search-btn btn-animate" aria-label="Пошук">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="8"/>
            <path d="M21 21L16.65 16.65"/>
          </svg>
        </button>
      </form>
      <button class="upload-btn btn-animate" onclick="window.location.href='upload.php'">Завантажити вашу модель</button>
    </div>
  </section>

  <!-- Featured Models -->
  <section class="container py-12 featured-models">
    <h2 class="section-title">Популярні моделі</h2>
    <div class="model-grid-modern">
      <div class="model-card" onclick="window.location.href='model-detail.php?id=1'">
        <div class="model-card-3d">🎨 Низькополігонна кішка</div>
        <div class="model-card-info">
          <div class="model-title">Низькополігонна кішка</div>
          <div class="model-meta">від <span class="model-creator">@catmaker</span> • 2.3k завантажень</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Низькополігонна кішка', '🎨')">Друкувати зараз</button>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='model-detail.php?id=2'">
        <div class="model-card-3d">📱 Підставка для телефону</div>
        <div class="model-card-info">
          <div class="model-title">Підставка для телефону</div>
          <div class="model-meta">від <span class="model-creator">@gadgeteer</span> • 1.8k завантажень</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Підставка для телефону', '📱')">Друкувати зараз</button>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='model-detail.php?id=3'">
        <div class="model-card-3d">🔌 Органайзер для кабелів</div>
        <div class="model-card-info">
          <div class="model-title">Органайзер для кабелів</div>
          <div class="model-meta">від <span class="model-creator">@tidyup</span> • 3.1k завантажень</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Органайзер для кабелів', '🔌')">Друкувати зараз</button>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='model-detail.php?id=4'">
        <div class="model-card-3d">🏠 Міні будинок</div>
        <div class="model-card-info">
          <div class="model-title">Міні будинок</div>
          <div class="model-meta">від <span class="model-creator">@architect</span> • 956 завантажень</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Міні будинок', '🏠')">Друкувати зараз</button>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='model-detail.php?id=5'">
        <div class="model-card-3d">🎮 Ігровий контролер</div>
        <div class="model-card-info">
          <div class="model-title">Ігровий контролер</div>
          <div class="model-meta">від <span class="model-creator">@gamer3d</span> • 1.2k завантажень</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Ігровий контролер', '🎮')">Друкувати зараз</button>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='model-detail.php?id=6'">
        <div class="model-card-3d">🌱 Квітковий горщик</div>
        <div class="model-card-info">
          <div class="model-title">Квітковий горщик</div>
          <div class="model-meta">від <span class="model-creator">@greenmaker</span> • 2.7k завантажень</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Квітковий горщик', '🌱')">Друкувати зараз</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories Section -->
  <section class="container py-12 categories-section">
    <h2 class="section-title">Популярні категорії</h2>
    <div class="model-grid-modern">
      <div class="model-card" onclick="window.location.href='catalog.php?category=architecture'">
        <div class="model-card-3d">🏠 Архітектура</div>
        <div class="model-card-info">
          <div class="model-title">Архітектура</div>
          <div class="model-meta">Будинки, споруди та конструкції</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); window.location.href='catalog.php?category=architecture'">Переглянути</button>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='catalog.php?category=art'">
        <div class="model-card-3d">🎨 Мистецтво та дизайн</div>
        <div class="model-card-info">
          <div class="model-title">Мистецтво та дизайн</div>
          <div class="model-meta">Скульптури та декоративні елементи</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); window.location.href='catalog.php?category=art'">Переглянути</button>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='catalog.php?category=tools'">
        <div class="model-card-3d">🔧 Інструменти та деталі</div>
        <div class="model-card-info">
          <div class="model-title">Інструменти та деталі</div>
          <div class="model-meta">Функціональні друки та ремонт</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); window.location.href='catalog.php?category=tools'">Переглянути</button>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Cart animation functionality
    function addToCart(event, modelName, modelEmoji) {
      event.preventDefault();
      event.stopPropagation();
      
      // Створюємо елемент анімації
      const animationContainer = document.createElement('div');
      animationContainer.className = 'cart-animation';
      
      const flyingItem = document.createElement('div');
      flyingItem.className = 'flying-item';
      flyingItem.textContent = modelEmoji;
      
      // Отримуємо позицію кнопки
      const button = event.target;
      const buttonRect = button.getBoundingClientRect();
      
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
        window.location.href = 'cart.php';
      }, 1000);
    }

    // Додаємо обробники подій для кнопок друку
    document.addEventListener('DOMContentLoaded', function() {
      const printButtons = document.querySelectorAll('.print-btn');
      const modelEmojis = ['🎨', '📱', '🔌', '🏠', '🎮', '🌱'];
      
      printButtons.forEach((button, index) => {
        button.addEventListener('click', (e) => {
          addToCart(e, 'Model', modelEmojis[index % modelEmojis.length]);
        });
      });
    });
  </script>

<?php include 'footer.php'; ?>
