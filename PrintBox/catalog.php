<?php $page_title = 'Каталог моделей - PrintBox'; include 'header.php'; ?>

  <!-- Catalog Content -->
  <div class="catalog catalog-content">
    <!-- Left Panel -->
    <div class="leftPanel catalog-filters">
      <h1>Фільтри</h1>
      
      <!-- Пошук -->
      <div class="filter-section">
        <h4>Пошук</h4>
        <input type="text" class="filter-input" placeholder="Назва моделі...">
      </div>
      
      <!-- Категорія -->
      <div class="filter-section">
        <h4>Категорія</h4>
        <div class="filter-options">
          <label>
            <input type="checkbox" value="architecture">
            Архітектура
          </label>
          <label>
            <input type="checkbox" value="art">
            Мистецтво
          </label>
          <label>
            <input type="checkbox" value="tools">
            Інструменти
          </label>
          <label>
            <input type="checkbox" value="furniture">
            Меблі
          </label>
          <label>
            <input type="checkbox" value="gaming">
            Ігри
          </label>
          <label>
            <input type="checkbox" value="nature">
            Природа
          </label>
        </div>
      </div>
      
      <!-- Ціна -->
      <div class="filter-section">
        <h4>Ціна</h4>
        <div class="price-inputs">
          <input type="number" class="price-input" placeholder="Від" min="0" max="1000">
          <span>-</span>
          <input type="number" class="price-input" placeholder="До" min="0" max="1000">
        </div>
        <div class="price-slider-container">
          <div class="price-slider">
            <div class="price-slider-track"></div>
            <input type="range" class="price-range" min="0" max="1000" value="0" id="min-price-slider">
            <input type="range" class="price-range" min="0" max="1000" value="1000" id="max-price-slider">
          </div>
          <div class="price-values">
            <span id="min-price-value">0</span>
            <span id="max-price-value">1000</span>
          </div>
        </div>
      </div>
      
      <!-- Розмір -->
      <div class="filter-section">
        <h4>Розмір</h4>
        <div class="filter-options">
          <label>
            <input type="checkbox" value="small">
            Малий
          </label>
          <label>
            <input type="checkbox" value="medium">
            Середній
          </label>
          <label>
            <input type="checkbox" value="large">
            Великий
          </label>
        </div>
      </div>
      
      <!-- Матеріал -->
      <div class="filter-section">
        <h4>Матеріал</h4>
        <div class="filter-options">
          <label>
            <input type="checkbox" value="pla">
            PLA
          </label>
          <label>
            <input type="checkbox" value="abs">
            ABS
          </label>
          <label>
            <input type="checkbox" value="petg">
            PETG
          </label>
          <label>
            <input type="checkbox" value="tpu">
            TPU
          </label>
        </div>
      </div>
      
      <!-- Рейтинг -->
      <div class="filter-section">
        <h4>Рейтинг</h4>
        <div class="rating-filter">
          <label>
            <input type="radio" name="rating" value="5">
            ⭐⭐⭐⭐⭐ 5 зірок
          </label>
          <label>
            <input type="radio" name="rating" value="4">
            ⭐⭐⭐⭐ 4+ зірки
          </label>
          <label>
            <input type="radio" name="rating" value="3">
            ⭐⭐⭐ 3+ зірки
          </label>
        </div>
      </div>
      
      <!-- Сортування -->
      <div class="filter-section">
        <h4>Сортування</h4>
        <select class="filter-select">
          <option value="popular">Популярні</option>
          <option value="newest">Нові</option>
          <option value="price-low">Ціна: від низької</option>
          <option value="price-high">Ціна: від високої</option>
          <option value="rating">За рейтингом</option>
        </select>
      </div>
      
      <button class="clear-filters-btn btn-animate">Очистити фільтри</button>
    </div>

    <!-- Right Panel -->
    <div class="rightPanel catalog-grid">
      <div class="card" onclick="window.location.href='model-detail.html?id=1'">
        <div class="card-3d">🎨</div>
        <div class="textBox">
          <div class="text head">Низькополігонна кішка</div>
          <span>від @catmaker • 2.3k завантажень</span>
          <div class="text price">₴150</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Низькополігонна кішка', '🎨')">Друкувати зараз</button>
          
          <div class="heart-container">
            <input id="heart-1" class="checkbox" type="checkbox">
            <div class="svg-container">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-celebrate" width="100" height="100" viewBox="0 0 24 24">
                <polygon points="10,10 20,20"></polygon>
                <polygon points="10,50 50,10"></polygon>
                <polygon points="20,80 80,20"></polygon>
                <polygon points="80,80 20,80"></polygon>
                <polygon points="90,10 10,90"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card" onclick="window.location.href='model-detail.html?id=2'">
        <div class="card-3d">📱</div>
        <div class="textBox">
          <div class="text head">Підставка для телефону</div>
          <span>від @gadgeteer • 1.8k завантажень</span>
          <div class="text price">₴200</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Підставка для телефону', '📱')">Друкувати зараз</button>
          
          <div class="heart-container">
            <input id="heart-2" class="checkbox" type="checkbox">
            <div class="svg-container">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-celebrate" width="100" height="100" viewBox="0 0 24 24">
                <polygon points="10,10 20,20"></polygon>
                <polygon points="10,50 50,10"></polygon>
                <polygon points="20,80 80,20"></polygon>
                <polygon points="80,80 20,80"></polygon>
                <polygon points="90,10 10,90"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card" onclick="window.location.href='model-detail.html?id=3'">
        <div class="card-3d">🔌</div>
        <div class="textBox">
          <div class="text head">Органайзер для кабелів</div>
          <span>від @tidyup • 3.1k завантажень</span>
          <div class="text price">₴120</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Органайзер для кабелів', '🔌')">Друкувати зараз</button>
          
          <div class="heart-container">
            <input id="heart-3" class="checkbox" type="checkbox">
            <div class="svg-container">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-celebrate" width="100" height="100" viewBox="0 0 24 24">
                <polygon points="10,10 20,20"></polygon>
                <polygon points="10,50 50,10"></polygon>
                <polygon points="20,80 80,20"></polygon>
                <polygon points="80,80 20,80"></polygon>
                <polygon points="90,10 10,90"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card" onclick="window.location.href='model-detail.html?id=4'">
        <div class="card-3d">🏠</div>
        <div class="textBox">
          <div class="text head">Міні будинок</div>
          <span>від @architect • 956 завантажень</span>
          <div class="text price">₴300</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Міні будинок', '🏠')">Друкувати зараз</button>
          
          <div class="heart-container">
            <input id="heart-4" class="checkbox" type="checkbox">
            <div class="svg-container">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-celebrate" width="100" height="100" viewBox="0 0 24 24">
                <polygon points="10,10 20,20"></polygon>
                <polygon points="10,50 50,10"></polygon>
                <polygon points="20,80 80,20"></polygon>
                <polygon points="80,80 20,80"></polygon>
                <polygon points="90,10 10,90"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card" onclick="window.location.href='model-detail.html?id=5'">
        <div class="card-3d">🎮</div>
        <div class="textBox">
          <div class="text head">Ігровий контролер</div>
          <span>від @gamer3d • 1.2k завантажень</span>
          <div class="text price">₴250</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Ігровий контролер', '🎮')">Друкувати зараз</button>
          
          <div class="heart-container">
            <input id="heart-5" class="checkbox" type="checkbox">
            <div class="svg-container">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-celebrate" width="100" height="100" viewBox="0 0 24 24">
                <polygon points="10,10 20,20"></polygon>
                <polygon points="10,50 50,10"></polygon>
                <polygon points="20,80 80,20"></polygon>
                <polygon points="80,80 20,80"></polygon>
                <polygon points="90,10 10,90"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card" onclick="window.location.href='model-detail.html?id=6'">
        <div class="card-3d">🌱</div>
        <div class="textBox">
          <div class="text head">Квітковий горщик</div>
          <span>від @greenmaker • 2.7k завантажень</span>
          <div class="text price">₴180</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Квітковий горщик', '🌱')">Друкувати зараз</button>
          
          <div class="heart-container">
            <input id="heart-6" class="checkbox" type="checkbox">
            <div class="svg-container">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-celebrate" width="100" height="100" viewBox="0 0 24 24">
                <polygon points="10,10 20,20"></polygon>
                <polygon points="10,50 50,10"></polygon>
                <polygon points="20,80 80,20"></polygon>
                <polygon points="80,80 20,80"></polygon>
                <polygon points="90,10 10,90"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card" onclick="window.location.href='model-detail.html?id=7'">
        <div class="card-3d">🚗</div>
        <div class="textBox">
          <div class="text head">Спортивний автомобіль</div>
          <span>від @carmaker • 1.5k завантажень</span>
          <div class="text price">₴400</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Спортивний автомобіль', '🚗')">Друкувати зараз</button>
          
          <div class="heart-container">
            <input id="heart-7" class="checkbox" type="checkbox">
            <div class="svg-container">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-celebrate" width="100" height="100" viewBox="0 0 24 24">
                <polygon points="10,10 20,20"></polygon>
                <polygon points="10,50 50,10"></polygon>
                <polygon points="20,80 80,20"></polygon>
                <polygon points="80,80 20,80"></polygon>
                <polygon points="90,10 10,90"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card" onclick="window.location.href='model-detail.html?id=8'">
        <div class="card-3d">🏰</div>
        <div class="textBox">
          <div class="text head">Середньовічний замок</div>
          <span>від @castlebuilder • 890 завантажень</span>
          <div class="text price">₴350</div>
          <button class="print-btn btn-animate" onclick="event.stopPropagation(); addToCart(event, 'Середньовічний замок', '🏰')">Друкувати зараз</button>
          
          <div class="heart-container">
            <input id="heart-8" class="checkbox" type="checkbox">
            <div class="svg-container">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,15,8.967a4.8,4.8,0,0,1,4.5,5.05A4.8,4.8,0,0,1,13.915,20.317Z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-celebrate" width="100" height="100" viewBox="0 0 24 24">
                <polygon points="10,10 20,20"></polygon>
                <polygon points="10,50 50,10"></polygon>
                <polygon points="20,80 80,20"></polygon>
                <polygon points="80,80 20,80"></polygon>
                <polygon points="90,10 10,90"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Toggle functionality for filter sections
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

    // Heart like functionality
    document.querySelectorAll('.checkbox').forEach(checkbox => {
      checkbox.addEventListener('click', function (e) {
        e.stopPropagation();
        console.log("Лайкнуто!");
      });
    });

    // Функціональність слайдера ціни
    const minPriceSlider = document.getElementById('min-price-slider');
    const maxPriceSlider = document.getElementById('max-price-slider');
    const minPriceValue = document.getElementById('min-price-value');
    const maxPriceValue = document.getElementById('max-price-value');

    if (minPriceSlider && maxPriceSlider) {
      function updatePriceValues() {
        const minVal = parseInt(minPriceSlider.value);
        const maxVal = parseInt(maxPriceSlider.value);
        
        if (minVal > maxVal) {
          if (minPriceSlider === document.activeElement) {
            maxPriceSlider.value = minVal;
            maxPriceValue.textContent = minVal;
          } else {
            minPriceSlider.value = maxVal;
            minPriceValue.textContent = maxVal;
          }
        } else {
          minPriceValue.textContent = minVal;
          maxPriceValue.textContent = maxVal;
        }
      }

      minPriceSlider.addEventListener('input', updatePriceValues);
      maxPriceSlider.addEventListener('input', updatePriceValues);
    }

    // Функціональність очищення фільтрів
    const clearFiltersBtn = document.querySelector('.clear-filters-btn');
    if (clearFiltersBtn) {
      clearFiltersBtn.addEventListener('click', function() {
        // Очищаємо всі чекбокси
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
          checkbox.checked = false;
        });
        
        // Очищаємо радіо кнопки
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
          radio.checked = false;
        });
        
        // Скидаємо слайдер ціни
        if (minPriceSlider && maxPriceSlider) {
          minPriceSlider.value = 0;
          maxPriceSlider.value = 1000;
          minPriceValue.textContent = '0';
          maxPriceValue.textContent = '1000';
        }
        
        // Скидаємо поле пошуку
        const searchInput = document.querySelector('.filter-input');
        if (searchInput) {
          searchInput.value = '';
        }
        
        // Скидаємо селект сортування
        const sortSelect = document.querySelector('.filter-select');
        if (sortSelect) {
          sortSelect.selectedIndex = 0;
        }
        
        // Очищаємо поля ціни
        document.querySelectorAll('.price-input').forEach(input => {
          input.value = '';
        });
      });
    }

    // Додаємо анімації появи для карток
    document.addEventListener('DOMContentLoaded', function() {
      // Анімації видалені для більш плавного відображення
    });
  </script>

<?php include 'footer.php'; ?> 
