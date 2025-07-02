<?php $page_title = 'Галерея робіт - PrintBox'; include 'header.php'; ?>

  <!-- Gallery Header -->
  <section class="container py-12 gallery-header" style="margin-top: 80px;">
    <div class="hero-center-group" style="max-width: 800px; background: none; box-shadow: none; border: none; padding: 0;">
      <h1 class="section-title gallery-title">Галерея надрукованих робіт</h1>
      <p class="gallery-subtitle" style="text-align: center; color: #666; margin-bottom: 2rem;">Надихайтесь роботами нашої спільноти</p>
      
      <!-- Filter Categories -->
      <div class="filter-buttons" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <button class="print-btn filter-btn" style="background: #121212; border-radius: 20px; padding: 0.5rem 1.5rem; font-size: 0.9rem;">Всі</button>
        <button class="print-btn filter-btn" style="background: #333; border-radius: 20px; padding: 0.5rem 1.5rem; font-size: 0.9rem;">Архітектура</button>
        <button class="print-btn filter-btn" style="background: #333; border-radius: 20px; padding: 0.5rem 1.5rem; font-size: 0.9rem;">Мистецтво</button>
        <button class="print-btn filter-btn" style="background: #333; border-radius: 20px; padding: 0.5rem 1.5rem; font-size: 0.9rem;">Інструменти</button>
        <button class="print-btn filter-btn" style="background: #333; border-radius: 20px; padding: 0.5rem 1.5rem; font-size: 0.9rem;">Меблі</button>
      </div>
    </div>
  </section>

  <!-- Gallery Grid -->
  <section class="container py-12 gallery-grid">
    <div class="model-grid-modern">
      <div class="model-card" onclick="window.location.href='gallery-detail.php?id=1'">
        <div class="model-card-3d">🏠 Надрукований будинок</div>
        <div class="model-card-info">
          <div class="model-title">Мініатюрний будинок</div>
          <div class="model-meta">від <span class="model-creator">@architect</span> • PLA, 0.2mm</div>
          <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
            <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;"> Переможець</span>
          </div>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='gallery-detail.php?id=2'">
        <div class="model-card-3d">🎨 Скульптура</div>
        <div class="model-card-info">
          <div class="model-title">Абстрактна скульптура</div>
          <div class="model-meta">від <span class="model-creator">@artist</span> • PETG, 0.1mm</div>
          <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
            <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">⭐ Висока якість</span>
          </div>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='gallery-detail.php?id=3'">
        <div class="model-card-3d">🔧 Деталь механізму</div>
        <div class="model-card-info">
          <div class="model-title">Шестерня</div>
          <div class="model-meta">від <span class="model-creator">@engineer</span> • ABS, 0.15mm</div>
          <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
            <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">🔧 Функціональна</span>
          </div>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='gallery-detail.php?id=4'">
        <div class="model-card-3d">📱 Підставка</div>
        <div class="model-card-info">
          <div class="model-title">Підставка для телефону</div>
          <div class="model-meta">від <span class="model-creator">@gadgeteer</span> • PLA+, 0.2mm</div>
          <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
            <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">📱 Практична</span>
          </div>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='gallery-detail.php?id=5'">
        <div class="model-card-3d">🌱 Горщик</div>
        <div class="model-card-info">
          <div class="model-title">Квітковий горщик</div>
          <div class="model-meta">від <span class="model-creator">@greenmaker</span> • TPU, 0.3mm</div>
          <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
            <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">🌱 Гнучкий</span>
          </div>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='gallery-detail.php?id=6'">
        <div class="model-card-3d">🎮 Контролер</div>
        <div class="model-card-info">
          <div class="model-title">Ігровий контролер</div>
          <div class="model-meta">від <span class="model-creator">@gamer3d</span> • PLA, 0.1mm</div>
          <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
            <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">🎮 Детальна</span>
          </div>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='gallery-detail.php?id=7'">
        <div class="model-card-3d">🚗 Автомобіль</div>
        <div class="model-card-info">
          <div class="model-title">Спортивний автомобіль</div>
          <div class="model-meta">від <span class="model-creator">@carmaker</span> • ABS, 0.08mm</div>
          <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
            <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">🚗 Високоточний</span>
          </div>
        </div>
      </div>
      <div class="model-card" onclick="window.location.href='gallery-detail.php?id=8'">
        <div class="model-card-3d">🏰 Замок</div>
        <div class="model-card-info">
          <div class="model-title">Середньовічний замок</div>
          <div class="model-meta">від <span class="model-creator">@castlebuilder</span> • PLA, 0.12mm</div>
          <div style="display: flex; gap: 0.5rem; margin-top: 0.5rem;">
            <span style="background: #f0f0f0; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">🏰 Складний</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Pagination -->
    <div style="display: flex; justify-content: center; gap: 1rem; margin-top: 3rem; margin-bottom: 3rem;">
      <button class="print-btn pagination-btn" style="background: #333; border-radius: 8px; padding: 0.5rem 1rem;">← Попередня</button>
      <button class="print-btn pagination-btn" style="background: #121212; border-radius: 8px; padding: 0.5rem 1rem;">1</button>
      <button class="print-btn pagination-btn" style="background: #333; border-radius: 8px; padding: 0.5rem 1rem;">2</button>
      <button class="print-btn pagination-btn" style="background: #333; border-radius: 8px; padding: 0.5rem 1rem;">3</button>
      <button class="print-btn pagination-btn" style="background: #333; border-radius: 8px; padding: 0.5rem 1rem;">Наступна →</button>
    </div>
  </section>

  <!-- Submit Your Work -->
  <section class="container py-12 submit-work-section">
    <div style="background: linear-gradient(135deg, #121212 0%, #333333 100%); padding: 3rem; border-radius: 20px; text-align: center; color: #fff;">
      <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">Поділіться своєю роботою</h2>
      <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">Покажіть світу, що ви можете створити на 3D принтері</p>
      <button class="upload-btn" onclick="window.location.href='upload.php'">Завантажити роботу</button>
    </div>
  </section>

<?php include 'footer.php'; ?> 
