<?php $page_title = 'Профіль - PrintBox'; include 'header.php'; ?>

  <!-- Profile Header -->
  <section class="container py-12 profile-section" style="margin-top: 80px;">
    <div style="max-width: 1200px; margin: 0 auto;">
      <div class="profile-header" style="background: #fff; padding: 3rem; border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.08); margin-bottom: 2rem;">
        <div style="display: flex; align-items: center; gap: 2rem; margin-bottom: 2rem;">
          <div style="width: 100px; height: 100px; background: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem;">👤</div>
          <div>
            <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">Іван Петренко</h1>
            <p style="color: #666; margin-bottom: 1rem;">@ivan_petrenko</p>
            <div style="display: flex; gap: 2rem;">
              <div>
                <div style="font-weight: 700;">12</div>
                <div style="font-size: 0.9rem; color: #666;">Моделей</div>
              </div>
              <div>
                <div style="font-weight: 700;">8</div>
                <div style="font-size: 0.9rem; color: #666;">Замовлень</div>
              </div>
              <div>
                <div style="font-weight: 700;">156</div>
                <div style="font-size: 0.9rem; color: #666;">Лайків</div>
              </div>
            </div>
          </div>
        </div>
        
        <div style="display: flex; gap: 1rem;">
          <button class="print-btn btn-animate" onclick="window.location.href='upload.php'">Завантажити модель</button>
          <button class="print-btn btn-animate" style="background: #fff; color: #121212; border: 2px solid #121212;">Редагувати профіль</button>
        </div>
      </div>

      <!-- Navigation Tabs -->
      <div class="profile-tabs" style="display: flex; gap: 1rem; margin-bottom: 2rem;">
        <button class="print-btn btn-animate" style="background: #121212; color: #fff;">Мої моделі</button>
        <button class="print-btn btn-animate" style="background: #fff; color: #121212; border: 2px solid #121212;">Замовлення</button>
        <button class="print-btn btn-animate" style="background: #fff; color: #121212; border: 2px solid #121212;">Налаштування</button>
        <button class="print-btn btn-animate" style="background: #fff; color: #121212; border: 2px solid #121212;">Статистика</button>
      </div>

      <!-- My Models -->
      <div class="profile-models">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Мої моделі</h2>
        
        <div class="model-grid-modern">
          <div class="model-card" onclick="window.location.href='model-detail.php?id=1'">
            <div class="model-card-3d">🎨 Низькополігонна кішка</div>
            <div class="model-card-info">
              <div class="model-title">Низькополігонна кішка</div>
              <div class="model-meta">2.3k завантажень • 156 лайків</div>
              <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
                <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">Опубліковано</span>
              </div>
            </div>
          </div>
          <div class="model-card" onclick="window.location.href='model-detail.php?id=2'">
            <div class="model-card-3d">📱 Підставка для телефону</div>
            <div class="model-card-info">
              <div class="model-title">Підставка для телефону</div>
              <div class="model-meta">1.8k завантажень • 89 лайків</div>
              <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
                <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">Опубліковано</span>
              </div>
            </div>
          </div>
          <div class="model-card" onclick="window.location.href='model-detail.php?id=3'">
            <div class="model-card-3d">🔌 Органайзер для кабелів</div>
            <div class="model-card-info">
              <div class="model-title">Органайзер для кабелів</div>
              <div class="model-meta">3.1k завантажень • 234 лайки</div>
              <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
                <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">Опубліковано</span>
              </div>
            </div>
          </div>
          <div class="model-card" onclick="window.location.href='upload.php'">
            <div class="model-card-3d" style="border: 2px dashed #ddd; display: flex; align-items: center; justify-content: center; color: #666;">+ Нова модель</div>
            <div class="model-card-info">
              <div class="model-title">Завантажити нову модель</div>
              <div class="model-meta">Поділіться своєю роботою</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Orders -->
      <div class="profile-orders" style="margin-top: 4rem;">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Останні замовлення</h2>
        
        <div style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
          <div class="order-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0; display: flex; justify-content: between; align-items: center; gap: 2rem;">
            <div style="display: flex; align-items: center; gap: 1rem;">
              <div style="width: 60px; height: 60px; background: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center;">🏠</div>
              <div>
                <div style="font-weight: 600;">Міні будинок</div>
                <div style="font-size: 0.9rem; color: #666;">Замовлення #12345</div>
              </div>
            </div>
            <div style="text-align: right;">
              <div style="font-weight: 600; color: #121212;">₴45.00</div>
              <div style="font-size: 0.9rem; color: #666;">15.03.2024</div>
            </div>
            <div>
              <span style="background: #e8f5e8; color: #2d5a2d; padding: 0.3rem 0.8rem; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">Доставлено</span>
            </div>
          </div>
          
          <div class="order-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0; display: flex; justify-content: between; align-items: center; gap: 2rem;">
            <div style="display: flex; align-items: center; gap: 1rem;">
              <div style="width: 60px; height: 60px; background: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center;">🎨</div>
              <div>
                <div style="font-weight: 600;">Скульптура</div>
                <div style="font-size: 0.9rem; color: #666;">Замовлення #12344</div>
              </div>
            </div>
            <div style="text-align: right;">
              <div style="font-weight: 600; color: #121212;">₴78.50</div>
              <div style="font-size: 0.9rem; color: #666;">12.03.2024</div>
            </div>
            <div>
              <span style="background: #fff3cd; color: #856404; padding: 0.3rem 0.8rem; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">В дорозі</span>
            </div>
          </div>
          
          <div class="order-item" style="padding: 1.5rem; display: flex; justify-content: between; align-items: center; gap: 2rem;">
            <div style="display: flex; align-items: center; gap: 1rem;">
              <div style="width: 60px; height: 60px; background: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center;">🔧</div>
              <div>
                <div style="font-weight: 600;">Шестерня</div>
                <div style="font-size: 0.9rem; color: #666;">Замовлення #12343</div>
              </div>
            </div>
            <div style="text-align: right;">
              <div style="font-weight: 600; color: #121212;">₴23.00</div>
              <div style="font-size: 0.9rem; color: #666;">10.03.2024</div>
            </div>
            <div>
              <span style="background: #d1ecf1; color: #0c5460; padding: 0.3rem 0.8rem; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">В обробці</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Statistics -->
      <div class="profile-stats" style="margin-top: 4rem;">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 2rem;">Статистика</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
          <div class="stat-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
            <div style="font-size: 2.5rem; font-weight: 800; color: #121212; margin-bottom: 0.5rem;">2,347</div>
            <div style="color: #666;">Загальних завантажень</div>
          </div>
          <div class="stat-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
            <div style="font-size: 2.5rem; font-weight: 800; color: #121212; margin-bottom: 0.5rem;">156</div>
            <div style="color: #666;">Лайків отримано</div>
          </div>
          <div class="stat-card" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
            <div style="font-size: 2.5rem; font-weight: 800; color: #121212; margin-bottom: 0.5rem;">₴1,245</div>
            <div style="color: #666;">Зароблено</div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?> 
