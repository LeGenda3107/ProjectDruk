<?php $page_title = 'Завантажити модель - PrintBox'; include 'header.php'; ?>
  <style>
    /* Анімації для сторінки завантаження */
    .upload-section {
      animation: fadeInUp 0.8s ease-out;
    }
    
    .upload-title {
      animation: fadeInUp 0.8s ease-out 0.2s both;
    }
    
    .upload-subtitle {
      animation: fadeInUp 0.8s ease-out 0.4s both;
    }
    
    .upload-form {
      animation: fadeInUp 0.8s ease-out 0.6s both;
    }
    
    .file-upload-area {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    
    .file-upload-area::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(18,18,18,0.05), transparent);
      transition: left 0.6s;
    }
    
    .file-upload-area:hover::before {
      left: 100%;
    }
    
    .file-upload-area:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    
    .form-input, .form-select, .form-textarea {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .form-input:focus, .form-select:focus, .form-textarea:focus {
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(18,18,18,0.1);
    }
    
    .image-upload-item {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    
    .image-upload-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(18,18,18,0.1), transparent);
      transition: left 0.6s;
    }
    
    .image-upload-item:hover::before {
      left: 100%;
    }
    
    .image-upload-item:hover {
      transform: scale(1.05);
      border-color: #121212;
    }
    
    .print-settings {
      animation: fadeInScale 0.6s ease-out 0.8s both;
    }
    
    .terms-section {
      animation: fadeInScale 0.6s ease-out 1s both;
    }
    
    .submit-buttons {
      animation: fadeInUp 0.6s ease-out 1.2s both;
    }
  </style>
<body class="bg-milk text-gray-900">
  <!-- Upload Section -->
  <section class="container py-12 upload-section" style="margin-top: 80px;">
    <div style="max-width: 800px; margin: 0 auto;">
      <h1 class="section-title upload-title">Завантажити вашу модель</h1>
      <p class="upload-subtitle" style="text-align: center; color: #666; margin-bottom: 3rem;">Поділіться своєю 3D моделлю зі спільнотою</p>

      <div class="upload-form" style="background: #fff; padding: 3rem; border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.08);">
        
        <!-- File Upload Area -->
        <div class="file-upload-area upload-form-group" style="border: 2px dashed #ddd; border-radius: 16px; padding: 3rem; text-align: center; margin-bottom: 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#121212'" onmouseout="this.style.borderColor='#ddd'">
          <div style="font-size: 3rem; margin-bottom: 1rem;">📁</div>
          <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Перетягніть файл сюди</h3>
          <p style="color: #666; margin-bottom: 2rem;">або натисніть для вибору файлу</p>
          <input type="file" accept=".stl,.obj,.3ds,.dae,.blend" style="display: none;" id="fileInput">
          <button class="print-btn btn-animate" onclick="document.getElementById('fileInput').click()">Вибрати файл</button>
          <p style="font-size: 0.9rem; color: #999; margin-top: 1rem;">Підтримувані формати: STL, OBJ, 3DS, DAE, BLEND (макс. 50MB)</p>
        </div>

        <!-- Upload Form -->
        <form>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
            <div class="upload-form-group">
              <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Назва моделі *</label>
              <input type="text" class="form-input" placeholder="Введіть назву моделі" style="width: 100%; padding: 1rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff;">
            </div>
            <div class="upload-form-group">
              <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Категорія *</label>
              <select class="form-select" style="width: 100%; padding: 1rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff;">
                <option>Виберіть категорію</option>
                <option>Архітектура</option>
                <option>Мистецтво та дизайн</option>
                <option>Інструменти та деталі</option>
                <option>Ігри</option>
                <option>Меблі</option>
                <option>Автомобілі</option>
                <option>Інше</option>
              </select>
            </div>
          </div>

          <div class="upload-form-group" style="margin-bottom: 2rem;">
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Опис *</label>
            <textarea class="form-textarea" placeholder="Опишіть вашу модель, особливості друку, матеріали..." style="width: 100%; height: 120px; padding: 1rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff; resize: vertical;"></textarea>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 2.5rem; margin-bottom: 2rem;">
            <div class="upload-form-group">
              <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Теги</label>
              <input type="text" placeholder="тег1, тег2, тег3" style="width: 100%; padding: 1rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff; transition: all 0.3s ease;" onfocus="this.style.borderColor='#121212'; this.style.boxShadow='0 0 0 2px rgba(18,18,18,0.1)'" onblur="this.style.borderColor='#ddd'; this.style.boxShadow='none'">
              <p style="font-size: 0.8rem; color: #666; margin-top: 0.5rem;">Розділяйте теги комами</p>
            </div>
            <div class="upload-form-group">
              <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Ліцензія</label>
              <select style="width: 100%; padding: 1rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff; transition: all 0.3s ease;" onfocus="this.style.borderColor='#121212'; this.style.boxShadow='0 0 0 2px rgba(18,18,18,0.1)'" onblur="this.style.borderColor='#ddd'; this.style.boxShadow='none'">
                <option>Creative Commons</option>
                <option>MIT License</option>
                <option>GPL</option>
                <option>Власницька</option>
              </select>
              <p style="font-size: 0.8rem; color: #666; margin-top: 0.5rem;">Виберіть тип ліцензії</p>
            </div>
            <div class="upload-form-group">
              <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Ціна (грн)</label>
              <input type="number" placeholder="0 (безкоштовно)" style="width: 100%; padding: 1rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff; transition: all 0.3s ease;" onfocus="this.style.borderColor='#121212'; this.style.boxShadow='0 0 0 2px rgba(18,18,18,0.1)'" onblur="this.style.borderColor='#ddd'; this.style.boxShadow='none'">
              <p style="font-size: 0.8rem; color: #666; margin-top: 0.5rem;">0 для безкоштовних моделей</p>
            </div>
          </div>

          <!-- Print Settings -->
          <div class="print-settings upload-form-group" style="background: #f8f9fa; padding: 2rem; border-radius: 16px; margin-bottom: 2rem;">
            <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 1.5rem;">Налаштування друку</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 2rem;">
              <div>
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Матеріал</label>
                <select style="width: 100%; padding: 0.8rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff;">
                  <option>PLA</option>
                  <option>ABS</option>
                  <option>PETG</option>
                  <option>TPU</option>
                  <option>Resin</option>
                </select>
              </div>
              <div>
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Товщина шару (мм)</label>
                <input type="number" step="0.1" placeholder="0.2" style="width: 100%; padding: 0.8rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff;">
              </div>
              <div>
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Заповнення (%)</label>
                <input type="number" min="0" max="100" placeholder="20" style="width: 100%; padding: 0.8rem; box-sizing: border-box; border: 1px solid #ddd; border-radius: 8px; background: #fff;">
              </div>
            </div>
          </div>

          <!-- Image Upload -->
          <div class="upload-form-group" style="margin-bottom: 2rem;">
            <label style="display: block; font-weight: 600; margin-bottom: 1rem;">Зображення моделі (до 5 файлів)</label>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem;">
              <div class="image-upload-item" style="border: 2px dashed #ddd; border-radius: 12px; padding: 2rem; text-align: center; cursor: pointer; transition: all 0.3s ease;" onclick="document.getElementById('imageInput1').click()">
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">📷</div>
                <p style="font-size: 0.9rem; color: #666;">Додати фото</p>
                <input type="file" accept="image/*" style="display: none;" id="imageInput1">
              </div>
              <div class="image-upload-item" style="border: 2px dashed #ddd; border-radius: 12px; padding: 2rem; text-align: center; cursor: pointer; transition: all 0.3s ease;" onclick="document.getElementById('imageInput2').click()">
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">📷</div>
                <p style="font-size: 0.9rem; color: #666;">Додати фото</p>
                <input type="file" accept="image/*" style="display: none;" id="imageInput2">
              </div>
              <div class="image-upload-item" style="border: 2px dashed #ddd; border-radius: 12px; padding: 2rem; text-align: center; cursor: pointer; transition: all 0.3s ease;" onclick="document.getElementById('imageInput3').click()">
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">📷</div>
                <p style="font-size: 0.9rem; color: #666;">Додати фото</p>
                <input type="file" accept="image/*" style="display: none;" id="imageInput3">
              </div>
              <div class="image-upload-item" style="border: 2px dashed #ddd; border-radius: 12px; padding: 2rem; text-align: center; cursor: pointer; transition: all 0.3s ease;" onclick="document.getElementById('imageInput4').click()">
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">📷</div>
                <p style="font-size: 0.9rem; color: #666;">Додати фото</p>
                <input type="file" accept="image/*" style="display: none;" id="imageInput4">
              </div>
              <div class="image-upload-item" style="border: 2px dashed #ddd; border-radius: 12px; padding: 2rem; text-align: center; cursor: pointer; transition: all 0.3s ease;" onclick="document.getElementById('imageInput5').click()">
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">📷</div>
                <p style="font-size: 0.9rem; color: #666;">Додати фото</p>
                <input type="file" accept="image/*" style="display: none;" id="imageInput5">
              </div>
            </div>
          </div>

          <!-- Terms -->
          <div class="terms-section upload-form-group" style="background: #f8f9fa; padding: 2rem; border-radius: 16px; margin-bottom: 2rem;">
            <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 1rem;">Умови завантаження</h3>
            <div style="display: flex; gap: 1rem; align-items: flex-start;">
              <input type="checkbox" id="terms" style="margin-top: 0.2rem;">
              <label for="terms" style="font-size: 0.9rem; line-height: 1.5;">
                Я погоджуюся з <a href="#" style="color: #121212; text-decoration: underline;">умовами використання</a> та <a href="#" style="color: #121212; text-decoration: underline;">політикою конфіденційності</a>. Я підтверджую, що маю права на розповсюдження цієї моделі та вона не порушує авторські права третіх осіб.
              </label>
            </div>
          </div>

          <!-- Submit Buttons -->
          <div class="submit-buttons" style="display: flex; gap: 1rem; justify-content: center;">
            <button type="button" class="print-btn btn-animate" style="background: #666; padding: 1rem 2rem;">Зберегти чернетку</button>
            <button type="submit" class="print-btn btn-animate" style="padding: 1rem 2rem;">Опублікувати модель</button>
          </div>
        </form>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?> 
