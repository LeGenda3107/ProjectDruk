<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Кошик - PrintBox</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body class="bg-milk text-gray-900">
  <!-- Fixed Minimal Header -->
  <header class="header-minimal fixed-header">
    <div class="container header-bar">
      <nav class="header-nav">
        <a href="catalog.php" class="nav-link">Каталог</a>
        <a href="gallery.php" class="nav-link">Галерея</a>
        <a href="services.php" class="nav-link">Послуги</a>
        <a href="upload.php" class="nav-link">Завантажити</a>
      </nav>
      <div class="logo">
        <a href="index.php" style="text-decoration: none; color: inherit;">PrintBox</a>
      </div>
      <div style="display: flex; gap: 1rem; align-items: center;">
        <button class="profile-btn" aria-label="Кошик" onclick="window.location.href='cart.php'">
          <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <circle cx="9" cy="21" r="1"/>
            <circle cx="20" cy="21" r="1"/>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
          </svg>
        </button>
        <button class="profile-btn" aria-label="Обліковий запис" onclick="window.location.href='profile.php'">
          <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="5"/>
            <path d="M4 20c0-2.5 4-4.5 8-4.5s8 2 8 4.5"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Cart Section -->
  <section class="container py-12 cart-section" style="margin-top: 80px;">
    <div style="max-width: 1200px; margin: 0 auto;">
      <h1 class="section-title cart-title">Кошик</h1>
      
      <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 3rem; align-items: start;">
        
        <!-- Cart Items -->
        <div class="cart-items">
          <div style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); margin-bottom: 2rem;">
            <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 2rem;">Товари в кошику (3)</h2>
            
            <!-- Item 1 -->
            <div class="cart-item" style="display: flex; gap: 1.5rem; padding: 1.5rem 0; border-bottom: 1px solid #f0f0f0;">
              <div style="width: 80px; height: 80px; background: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">🎨</div>
              <div style="flex: 1;">
                <h3 style="font-weight: 600; margin-bottom: 0.5rem;">Низькополігонна кішка</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">PLA • 100% розмір • 1 шт</p>
                <div style="display: flex; gap: 1rem; align-items: center;">
                  <div style="display: flex; align-items: center; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                    <button class="btn-animate" style="padding: 0.5rem 1rem; background: #f8f8f8; border: none; cursor: pointer;">-</button>
                    <span style="padding: 0.5rem 1rem; min-width: 40px; text-align: center;">1</span>
                    <button class="btn-animate" style="padding: 0.5rem 1rem; background: #f8f8f8; border: none; cursor: pointer;">+</button>
                  </div>
                  <button class="btn-animate" style="color: #666; background: none; border: none; cursor: pointer; text-decoration: underline;">Видалити</button>
                </div>
              </div>
              <div style="text-align: right;">
                <div style="font-weight: 700; font-size: 1.2rem;">₴25.00</div>
                <div style="color: #666; font-size: 0.9rem;">12.5г</div>
              </div>
            </div>

            <!-- Item 2 -->
            <div class="cart-item" style="display: flex; gap: 1.5rem; padding: 1.5rem 0; border-bottom: 1px solid #f0f0f0;">
              <div style="width: 80px; height: 80px; background: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">📱</div>
              <div style="flex: 1;">
                <h3 style="font-weight: 600; margin-bottom: 0.5rem;">Підставка для телефону</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">PLA+ • 100% розмір • 2 шт</p>
                <div style="display: flex; gap: 1rem; align-items: center;">
                  <div style="display: flex; align-items: center; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                    <button class="btn-animate" style="padding: 0.5rem 1rem; background: #f8f8f8; border: none; cursor: pointer;">-</button>
                    <span style="padding: 0.5rem 1rem; min-width: 40px; text-align: center;">2</span>
                    <button class="btn-animate" style="padding: 0.5rem 1rem; background: #f8f8f8; border: none; cursor: pointer;">+</button>
                  </div>
                  <button class="btn-animate" style="color: #666; background: none; border: none; cursor: pointer; text-decoration: underline;">Видалити</button>
                </div>
              </div>
              <div style="text-align: right;">
                <div style="font-weight: 700; font-size: 1.2rem;">₴40.00</div>
                <div style="color: #666; font-size: 0.9rem;">20г</div>
              </div>
            </div>

            <!-- Item 3 -->
            <div class="cart-item" style="display: flex; gap: 1.5rem; padding: 1.5rem 0;">
              <div style="width: 80px; height: 80px; background: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">🔌</div>
              <div style="flex: 1;">
                <h3 style="font-weight: 600; margin-bottom: 0.5rem;">Органайзер для кабелів</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">ABS • 100% розмір • 1 шт</p>
                <div style="display: flex; gap: 1rem; align-items: center;">
                  <div style="display: flex; align-items: center; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                    <button class="btn-animate" style="padding: 0.5rem 1rem; background: #f8f8f8; border: none; cursor: pointer;">-</button>
                    <span style="padding: 0.5rem 1rem; min-width: 40px; text-align: center;">1</span>
                    <button class="btn-animate" style="padding: 0.5rem 1rem; background: #f8f8f8; border: none; cursor: pointer;">+</button>
                  </div>
                  <button class="btn-animate" style="color: #666; background: none; border: none; cursor: pointer; text-decoration: underline;">Видалити</button>
                </div>
              </div>
              <div style="text-align: right;">
                <div style="font-weight: 700; font-size: 1.2rem;">₴35.00</div>
                <div style="color: #666; font-size: 0.9rem;">17.5г</div>
              </div>
            </div>
          </div>

          <!-- Continue Shopping -->
          <div style="text-align: center;">
            <button class="print-btn btn-animate" onclick="window.location.href='catalog.php'">← Продовжити покупки</button>
          </div>
        </div>

        <!-- Order Summary -->
        <div class="cart-summary" style="background: #fff; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); position: sticky; top: 100px;">
          <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 2rem;">Підсумок замовлення</h2>
          
          <div style="margin-bottom: 2rem;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
              <span>Товари (4 шт)</span>
              <span>₴100.00</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
              <span>Доставка</span>
              <span>₴60.00</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 1rem; font-weight: 600;">
              <span>Промокод</span>
              <span style="color: #28a745;">-₴10.00</span>
            </div>
            <hr style="border: none; border-top: 1px solid #f0f0f0; margin: 1rem 0;">
            <div style="display: flex; justify-content: space-between; font-size: 1.2rem; font-weight: 700;">
              <span>Разом</span>
              <span>₴150.00</span>
            </div>
          </div>

          <!-- Promo Code -->
          <div style="margin-bottom: 2rem;">
            <input type="text" class="form-input" placeholder="Промокод" style="width: 100%; padding: 0.8rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; margin-bottom: 0.5rem;">
            <button class="print-btn btn-animate" style="width: 100%; background: #fff; color: #121212; border: 2px solid #121212;">Застосувати</button>
          </div>

          <!-- Checkout Button -->
          <button class="upload-btn btn-animate" style="width: 100%; padding: 1rem; font-size: 1.1rem;" onclick="window.location.href='checkout.html'">
            Оформити замовлення
          </button>

          <!-- Delivery Info -->
          <div style="margin-top: 2rem; padding: 1rem; background: #f8f8f8; border-radius: 8px;">
            <h4 style="font-weight: 600; margin-bottom: 0.5rem;">🚚 Доставка</h4>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 0.5rem;">Нова Пошта - 2-3 дні</p>
            <p style="font-size: 0.9rem; color: #666;">Кур'єр по Києву - 1-2 дні</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer-minimal py-8">
    <div class="container flex flex-col md:flex-row justify-between items-center text-sm text-gray-500 gap-4">
      <div>© 2024 PrintBox - Преміум платформа 3D друку</div>
      <div class="flex gap-6">
        <a href="faq.php" class="footer-link">Часті питання</a>
        <a href="contact.php" class="footer-link">Контакти</a>
        <a href="terms.php" class="footer-link">Умови використання</a>
        <a href="privacy.php" class="footer-link">Політика конфіденційності</a>
      </div>
    </div>
  </footer>
</body>
</html> 
