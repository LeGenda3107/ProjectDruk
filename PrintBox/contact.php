<?php $page_title = 'Контакти - PrintBox'; include 'header.php'; ?>

  <!-- Contact Header -->
  <section class="container py-12 contact-header" style="margin-top: 80px;">
    <div class="hero-center-group" style="max-width: 800px; background: none; box-shadow: none; border: none; padding: 0;">
      <h1 class="section-title contact-title">Зв'яжіться з нами</h1>
      <p class="contact-subtitle" style="text-align: center; color: #666; margin-bottom: 2rem;">Ми завжди готові допомогти вам з вашими питаннями</p>
    </div>
  </section>

  <!-- Contact Content -->
  <section class="container py-12 contact-content">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; max-width: 1200px; margin: 0 auto;">
      
      <!-- Contact Form -->
      <div class="contact-form">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Напишіть нам</h2>
        
        <div style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
          <form>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
              <div>
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Ім'я *</label>
                <input type="text" class="form-input" placeholder="Ваше ім'я" style="width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 8px; background: #fff;  box-sizing: border-box; ">
              </div>
              <div>
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Email *</label>
                <input type="email" class="form-input" placeholder="your@email.com" style="width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 8px; background: #fff; box-sizing: border-box;">
              </div>
            </div>
            
            <div style="margin-bottom: 1.5rem;">
              <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Тема *</label>
              <select class="form-select" style="width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 8px; background: #fff;">
                <option>Виберіть тему</option>
                <option>Технічна підтримка</option>
                <option>Питання про замовлення</option>
                <option>Співпраця</option>
                <option>Інше</option>
              </select>
            </div>
            
            <div style="margin-bottom: 1.5rem;">
              <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Повідомлення *</label>
              <textarea class="form-textarea" placeholder="Опишіть ваше питання..." style="width: 100%; height: 120px; padding: 1rem; border: 1px solid #ddd; border-radius: 8px; background: #fff; resize: vertical; box-sizing: border-box;"></textarea>
            </div>
            
            <button type="submit" class="upload-btn btn-animate" style="width: 100%;">Надіслати повідомлення</button>
          </form>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="contact-info">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Контактна інформація</h2>
        
        <div style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); margin-bottom: 2rem;">
          <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
            <div style="width: 50px; height: 50px; background: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">📧</div>
            <div>
              <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Email</h4>
              <p style="color: #666;">support@printbox.ua</p>
              <p style="color: #666;">info@printbox.ua</p>
            </div>
          </div>
          
          <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
            <div style="width: 50px; height: 50px; background: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">📞</div>
            <div>
              <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Телефон</h4>
              <p style="color: #666;">+380 (44) 123-45-67</p>
              <p style="color: #666;">+380 (50) 987-65-43</p>
            </div>
          </div>
          
          <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
            <div style="width: 50px; height: 50px; background: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">📍</div>
            <div>
              <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Адреса</h4>
              <p style="color: #666;">м. Київ, вул. Хрещатик, 1</p>
              <p style="color: #666;">Офіс 123, 01001</p>
            </div>
          </div>
          
          <div style="display: flex; gap: 1rem;">
            <div style="width: 50px; height: 50px; background: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">🕒</div>
            <div>
              <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Робочі години</h4>
              <p style="color: #666;">Пн-Пт: 9:00 - 18:00</p>
              <p style="color: #666;">Сб: 10:00 - 16:00</p>
              <p style="color: #666;">Нд: Вихідний</p>
            </div>
          </div>
        </div>

        <!-- Quick Support -->
        <div style="background: linear-gradient(135deg, #121212 0%, #333333 100%); padding: 2rem; border-radius: 16px; color: #fff;">
          <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 1rem;">Швидка підтримка</h3>
          <p style="margin-bottom: 1.5rem; opacity: 0.9;">Потрібна термінова допомога? Зв'яжіться з нами через чат або месенджер</p>
          <div style="display: flex; gap: 1rem;">
            <button class="print-btn btn-animate" style="background: #fff; color: #121212;">💬 Чат</button>
            <button class="print-btn btn-animate" style="background: #fff; color: #121212;">📱 Telegram</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="container py-12 faq-section">
    <h2 class="section-title" style="text-align: center; margin-bottom: 3rem;">Часті питання</h2>
    
    <div style="max-width: 800px; margin: 0 auto;">
      <div class="faq-list" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
        <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
          <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Як довго триває друк?</h4>
          <p style="color: #666; line-height: 1.6;">Час друку залежить від складності моделі та обраного тарифу. Базовий тариф - 2-3 дні, преміум - 24 години.</p>
        </div>
        
        <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
          <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Які матеріали доступні?</h4>
          <p style="color: #666; line-height: 1.6;">Ми працюємо з PLA, ABS, PETG, TPU та іншими матеріалами. Вибір залежить від ваших потреб та обраного тарифу.</p>
        </div>
        
        <div class="faq-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0;">
          <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Як відбувається доставка?</h4>
          <p style="color: #666; line-height: 1.6;">Доставляємо через Нова Пошта по всій Україні та кур'єром по Києву. Вартість доставки залежить від розміру замовлення.</p>
        </div>
        
        <div class="faq-item" style="padding: 1.5rem;">
          <h4 style="font-weight: 600; margin-bottom: 0.5rem;">Чи можна завантажити власну модель?</h4>
          <p style="color: #666; line-height: 1.6;">Так! Ви можете завантажити свій STL файл через нашу платформу. Підтримуються формати STL, OBJ, 3DS, DAE, BLEND.</p>
        </div>
      </div>
      
      <div style="text-align: center; margin-top: 2rem;">
        <button class="print-btn btn-animate" onclick="window.location.href='faq.php'">Переглянути всі питання</button>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?> 
