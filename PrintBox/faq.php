<?php $page_title = 'Часті питання - PrintBox'; include 'header.php'; ?>

<body class="bg-milk text-gray-900">
  <!-- FAQ Header -->
  <section class="container py-12 faq-header" style="margin-top: 80px;">
    <div class="hero-center-group" style="max-width: 800px; background: none; box-shadow: none; border: none; padding: 0;">
      <h1 class="section-title faq-title">Часті питання</h1>
      <p class="faq-subtitle" style="text-align: center; color: #666; margin-bottom: 2rem;">Знайдіть відповіді на найпопулярніші питання</p>
      
      <!-- Search -->
      <div class="faq-search" style="width: 100%; max-width: 500px; margin: 0 auto 3rem;">
        <form class="hero-search-form" autocomplete="off">
          <input type="text" class="hero-search-input form-input" placeholder="Пошук питання..." />
          <button type="submit" class="hero-search-btn btn-animate" aria-label="Пошук">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <circle cx="11" cy="11" r="8"/>
              <path d="M21 21L16.65 16.65"/>
            </svg>
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- FAQ Categories -->
  <section class="container py-12 faq-content">
    <div style="max-width: 1000px; margin: 0 auto;">
      
      <!-- General Questions -->
      <div class="faq-category" style="margin-bottom: 4rem;">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Загальні питання</h2>
        
        <div class="faq-list" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Що таке PrintBox?</h4>
            <p style="color: #666; line-height: 1.6;">PrintBox - це платформа для 3D друку, де ви можете знайти тисячі готових моделей, завантажити власні та замовити друк з доставкою по всій Україні.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Як зареєструватися на сайті?</h4>
            <p style="color: #666; line-height: 1.6;">Натисніть на іконку профілю в правому верхньому куті та виберіть "Зареєструватися". Вам потрібно буде вказати email, пароль та підтвердити реєстрацію.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Чи безкоштовно використання платформи?</h4>
            <p style="color: #666; line-height: 1.6;">Так, реєстрація та перегляд моделей абсолютно безкоштовні. Оплата потрібна тільки при замовленні друку або покупці преміум моделей.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Які формати файлів підтримуються?</h4>
            <p style="color: #666; line-height: 1.6;">Ми підтримуємо STL, OBJ, 3DS, DAE, BLEND та інші популярні формати 3D моделей. Максимальний розмір файлу - 50MB.</p>
          </div>
        </div>
      </div>

      <!-- Printing Questions -->
      <div class="faq-category" style="margin-bottom: 4rem;">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Питання про друк</h2>
        
        <div class="faq-list" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Як довго триває друк?</h4>
            <p style="color: #666; line-height: 1.6;">Час друку залежить від обраного тарифу: Базовий - 2-3 дні, Стандарт - 1-2 дні, Преміум - 24 години. Складні моделі можуть займати більше часу.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Які матеріали доступні?</h4>
            <p style="color: #666; line-height: 1.6;">PLA (₴2/г), ABS (₴3/г), PETG (₴3.5/г), TPU (₴4/г), PLA+ (₴2.5/г), Дерево (₴4.5/г). Вибір залежить від обраного тарифу та ваших потреб.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Чи можна змінити розмір моделі?</h4>
            <p style="color: #666; line-height: 1.6;">Так, ви можете збільшити або зменшити модель. Доступні варіанти: 100% (оригінал), 150% (великий), 200% (дуже великий).</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Що таке підтримки?</h4>
            <p style="color: #666; line-height: 1.6;">Підтримки - це тимчасові структури, які підтримують частини моделі під час друку. Деякі моделі не потребують підтримок, інші - обов'язково.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Чи можна замовити кольоровий друк?</h4>
            <p style="color: #666; line-height: 1.6;">Так, ми пропонуємо широку палітру кольорів для всіх матеріалів. Якщо потрібен специфічний колір, зверніться до нашої підтримки.</p>
          </div>
        </div>
      </div>

      <!-- Delivery Questions -->
      <div class="faq-category" style="margin-bottom: 4rem;">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Доставка та оплата</h2>
        
        <div class="faq-list" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Як відбувається доставка?</h4>
            <p style="color: #666; line-height: 1.6;">Доставляємо через Нова Пошта по всій Україні (2-3 дні) та кур'єром по Києву (1-2 дні). Вартість залежить від розміру замовлення.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Які способи оплати доступні?</h4>
            <p style="color: #666; line-height: 1.6;">Оплата картою онлайн, накладений платіж, оплата при отриманні (тільки для Києва). Всі платежі захищені.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Чи можна відстежити замовлення?</h4>
            <p style="color: #666; line-height: 1.6;">Так, після оформлення замовлення ви отримаєте номер для відстеження. Статус оновлюється в реальному часі.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Що робити, якщо товар пошкоджений?</h4>
            <p style="color: #666; line-height: 1.6;">Зробіть фото пошкодження та зверніться до нашої підтримки протягом 24 годин після отримання. Ми замінимо товар безкоштовно.</p>
          </div>
        </div>
      </div>

      <!-- Technical Questions -->
      <div class="faq-category" style="margin-bottom: 4rem;">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Технічні питання</h2>
        
        <div class="faq-list" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Як підготувати модель для друку?</h4>
            <p style="color: #666; line-height: 1.6;">Модель повинна бути "водонепроникною" (manifold), без дір та перекриттів. Рекомендуємо використовувати автоматичну перевірку в слайсері.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Який максимальний розмір можна надрукувати?</h4>
            <p style="color: #666; line-height: 1.6;">Максимальний розмір: 300x300x400 мм. Для більших моделей ми можемо розділити їх на частини та надрукувати окремо.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Чи можна надрукувати рухомі частини?</h4>
            <p style="color: #666; line-height: 1.6;">Так, ми можемо друкувати моделі з рухомими частинами. Потрібно залишити зазор 0.2-0.4 мм між частинами.</p>
          </div>
          
          <div class="faq-item" style="padding: 1.5rem;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Яка точність друку?</h4>
            <p style="color: #666; line-height: 1.6;">Точність залежить від тарифу: Базовий - ±0.2мм, Стандарт - ±0.15мм, Преміум - ±0.1мм. Це достатньо для більшості застосувань.</p>
          </div>
        </div>
      </div>

      <!-- Still Need Help -->
      <div class="faq-help" style="text-align: center; background: linear-gradient(135deg, #121212 0%, #333333 100%); padding: 3rem; border-radius: 20px; color: #fff;">
        <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">Не знайшли відповідь?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">Наша команда підтримки завжди готова допомогти вам</p>
        <div style="display: flex; gap: 1rem; justify-content: center;">
          <button class="upload-btn btn-animate" onclick="window.location.href='contact.php'">Написати в підтримку</button>
          <button class="print-btn btn-animate" style="background: #fff; color: #121212;">💬 Онлайн чат</button>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?> 
