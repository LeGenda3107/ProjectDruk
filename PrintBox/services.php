<?php $page_title = 'Послуги 3D друку - PrintBox'; include 'header.php'; ?>

  <!-- Services Header -->
  <section class="container py-12 services-header" style="margin-top: 80px;">
    <div class="hero-center-group" style="max-width: 800px; background: none; box-shadow: none; border: none; padding: 0;">
      <h1 class="section-title services-title">Послуги 3D друку</h1>
      <p class="services-subtitle" style="text-align: center; color: #666; margin-bottom: 2rem;">Професійний 3D друк з доставкою по всій Україні</p>
    </div>
  </section>

  <!-- Service Features -->
  <section class="container py-12 services-grid">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
      <div class="service-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
        <div style="font-size: 3rem; margin-bottom: 1rem;">🚀</div>
        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Швидкий друк</h3>
        <p style="color: #666; line-height: 1.6;">Друкуємо ваші моделі за 24-48 годин з високою якістю</p>
      </div>
      <div class="service-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
        <div style="font-size: 3rem; margin-bottom: 1rem;">🎨</div>
        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Багато матеріалів</h3>
        <p style="color: #666; line-height: 1.6;">PLA, ABS, PETG, TPU та інші матеріали для будь-яких потреб</p>
      </div>
      <div class="service-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
        <div style="font-size: 3rem; margin-bottom: 1rem;">📦</div>
        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Доставка</h3>
        <p style="color: #666; line-height: 1.6;">Безкоштовна доставка по Києву, Нова Пошта по всій Україні</p>
      </div>
    </div>
  </section>

  <!-- Pricing Plans -->
  <section class="container py-12 pricing-section">
    <h2 class="section-title" style="text-align: center; margin-bottom: 3rem;">Тарифи на друк</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
      <!-- Basic Plan -->
      <div class="service-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: 2px solid #f0f0f0;">
        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Базовий</h3>
        <div style="font-size: 2.5rem; font-weight: 800; color: #121212; margin-bottom: 1rem;">₴2/г</div>
        <p style="color: #666; margin-bottom: 2rem;">Ідеально для простих проектів</p>
        
        <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ PLA матеріал</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ 0.2mm шар</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ 2-3 дні термін</li>
          <li style="padding: 0.5rem 0;">✅ Базова підтримка</li>
        </ul>
        
        <button class="print-btn btn-animate" style="width: 100%;" onclick="window.location.href='cart.php'">Замовити</button>
      </div>

      <!-- Standard Plan -->
      <div class="service-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 8px 32px rgba(0,0,0,0.12); border: 2px solid #121212; position: relative;">
        <div style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); background: #121212; color: #fff; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">Популярний</div>
        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Стандарт</h3>
        <div style="font-size: 2.5rem; font-weight: 800; color: #121212; margin-bottom: 1rem;">₴3/г</div>
        <p style="color: #666; margin-bottom: 2rem;">Оптимальне співвідношення ціна/якість</p>
        
        <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ PLA, ABS, PETG</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ 0.15mm шар</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ 1-2 дні термін</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ Покращена підтримка</li>
          <li style="padding: 0.5rem 0;">✅ Постобробка включена</li>
        </ul>
        
        <button class="upload-btn btn-animate" style="width: 100%;" onclick="window.location.href='cart.php'">Замовити</button>
      </div>

      <!-- Premium Plan -->
      <div class="service-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: 2px solid #f0f0f0;">
        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Преміум</h3>
        <div style="font-size: 2.5rem; font-weight: 800; color: #121212; margin-bottom: 1rem;">₴5/г</div>
        <p style="color: #666; margin-bottom: 2rem;">Максимальна якість для складних проектів</p>
        
        <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ Всі матеріали</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ 0.08-0.12mm шар</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ 24 години термін</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ Пріоритетна підтримка</li>
          <li style="padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">✅ Повна постобробка</li>
          <li style="padding: 0.5rem 0;">✅ Консультація експерта</li>
        </ul>
        
        <button class="print-btn btn-animate" style="width: 100%;" onclick="window.location.href='cart.php'">Замовити</button>
      </div>
    </div>
  </section>

  <!-- Materials -->
  <section class="container py-12 materials-section">
    <h2 class="section-title" style="text-align: center; margin-bottom: 3rem;">Доступні матеріали</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
      <div class="service-card" style="background: #fff; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h4 style="font-weight: 700; margin-bottom: 0.5rem;">PLA</h4>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Екологічний, легкий у друку</p>
        <div style="font-weight: 600; color: #121212;">₴2/г</div>
      </div>
      <div class="service-card" style="background: #fff; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h4 style="font-weight: 700; margin-bottom: 0.5rem;">ABS</h4>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Міцний, термостійкий</p>
        <div style="font-weight: 600; color: #121212;">₴3/г</div>
      </div>
      <div class="service-card" style="background: #fff; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h4 style="font-weight: 700; margin-bottom: 0.5rem;">PETG</h4>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Гнучкий, прозорий</p>
        <div style="font-weight: 600; color: #121212;">₴3.5/г</div>
      </div>
      <div class="service-card" style="background: #fff; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h4 style="font-weight: 700; margin-bottom: 0.5rem;">TPU</h4>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Гумоподібний, гнучкий</p>
        <div style="font-weight: 600; color: #121212;">₴4/г</div>
      </div>
      <div class="service-card" style="background: #fff; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h4 style="font-weight: 700; margin-bottom: 0.5rem;">PLA+</h4>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Покращена міцність</p>
        <div style="font-weight: 600; color: #121212;">₴2.5/г</div>
      </div>
      <div class="service-card" style="background: #fff; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Дерево</h4>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Деревоподібна текстура</p>
        <div style="font-weight: 600; color: #121212;">₴4.5/г</div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="container py-12 how-it-works-section">
    <h2 class="section-title" style="text-align: center; margin-bottom: 3rem;">Як це працює</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
      <div class="service-card" style="text-align: center;">
        <div style="background: #121212; color: #fff; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; margin: 1rem auto 1rem;">1</div>
        <h4 style="font-weight: 700; margin-bottom: 1rem;">Завантажте модель</h4>
        <p style="color: #666; line-height: 1.6;">Виберіть STL файл або модель з нашого каталогу</p>
      </div>
      <div class="service-card" style="text-align: center;">
        <div style="background: #121212; color: #fff; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; margin: 1rem auto 1rem;">2</div>
        <h4 style="font-weight: 700; margin-bottom: 1rem;">Налаштуйте параметри</h4>
        <p style="color: #666; line-height: 1.6;">Виберіть матеріал, розмір та кількість</p>
      </div>
      <div class="service-card" style="text-align: center;">
        <div style="background: #121212; color: #fff; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; margin: 1rem auto 1rem;">3</div>
        <h4 style="font-weight: 700; margin-bottom: 1rem;">Отримайте готовий виріб</h4>
        <p style="color: #666; line-height: 1.6;">Ми надрукуємо та доставимо вашу модель</p>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="container py-12 cta-section">
    <div style="background: linear-gradient(135deg, #121212 0%, #333333 100%); padding: 3rem; border-radius: 20px; text-align: center; color: #fff; margin-top: 3rem;">
      <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">Готові почати?</h2>
      <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">Замовте друк прямо зараз та отримайте знижку 10% на перше замовлення</p>
      <button class="upload-btn btn-animate" onclick="window.location.href='cart.php'">Замовити друк</button>
    </div>
  </section>


<?php include 'footer.php'; ?> 
